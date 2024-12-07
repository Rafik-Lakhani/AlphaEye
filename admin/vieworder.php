<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/vieworder.css">
    <title>Order Detail | Admin</title>
</head>
<body>
    <div class="main">
        <?php
            include("component/adminnav.php");
            include("../config/fontfamily.php");
            include("../config/dbconnect.php");
            include("component/authenticate.php");
            $orderid=$_GET["orderid"];
        ?>

        <div class="center-sec">
            <div class="heading">
                <h1>Order Information</h1>
            </div>
            <?php
                // get user data by id from database
                $select = "SELECT * FROM `order` WHERE orderid=$orderid"; 
                $result = mysqli_query($con, $select);
                $orderdata = mysqli_fetch_assoc($result);   

                // fetch product in database
                $selectproduct="select * from product WHERE productid=$orderdata[productid]";
                $productresult=mysqli_query($con,$selectproduct);
                $productdata=mysqli_fetch_assoc($productresult);

                // fetch user data in database
                $selectuser="select * from userdata where id=$orderdata[userid]";
                $userresult=mysqli_query($con,$selectuser);
                $userdata=mysqli_fetch_assoc($userresult);

                // fetch useraddress data in database
                $selectaddress="select * from useraddres WHERE userid=$orderdata[userid]";
                $addressresult=mysqli_query($con,$selectaddress);
                $addressdata=mysqli_fetch_assoc($addressresult);

                $userpower="select * from userprescription where orderid=$orderid";
                $powerresult=mysqli_query($con,$userpower);
                
            ?>
            <div class="username">
                <h6>Order ID</h6>
                <h2><?php echo $orderdata['orderid']; ?></h2>
                <hr class="hrline">
            </div>
            <div class="username">
                <h6>Product Name</h6>
                <h2><?php echo $productdata['name']; ?></h2>
                <hr class="hrline">
            </div>
            <div class="username">
                <h6>Quantity</h6>
                <h2><?php echo $orderdata['quantity']; ?></h2>
                <hr class="hrline">
            </div>
            <?php 
                if(mysqli_num_rows($powerresult)>0){
                    $powerdata=mysqli_fetch_assoc($powerresult);
                    ?>
                    <div class="username">
                        <h6>Eye Power</h6>
                        <h2 class="powerheading">
                            <span>SPH</span>
                            <span>CYL</span>
                            <span>AXIS</span>
                            <span>ADD</span>
                        </h2>
                        <h2 class="powerheading">
                            <?php
                            echo "Left"; 
                            echo "<span>$powerdata[leftSPH]</span>";
                            echo "<span>$powerdata[leftCYL]</span>";
                            echo "<span>$powerdata[leftAXIS]</span>";
                            echo "<span>$powerdata[leftADD]</span>";
                            ?>
                        </h2>
                        <h2 class="powerheading">
                            <?php
                            echo "Right"; 
                            echo "<span>$powerdata[rightSPH]</span>";
                            echo "<span>$powerdata[rightCYL]</span>";
                            echo "<span>$powerdata[rightAXIS]</span>";
                            echo "<span>$powerdata[rightADD]</span>";
                            ?>
                        </h2>
                        <hr class="hrline">
                    </div>
                    <?php
                }
            ?>
            <div class="username">
                <h6>Order Amount</h6>
                <h2><?php echo $orderdata['amount']; ?></h2>
                <hr class="hrline">
            </div>
            <div class="username">
                <h6>Order Amount</h6>
                <form action="orderstatus.php" method="post">
                        <input type="hidden" name="orderid" value="<?=$orderid ?>">
                        <h2><?php echo $orderdata['status']; ?></h2>
                        <select name="orderstatus" id="status">
                            <option value="ordered">Ordered</option>
                            <option value="shipping">Shipping</option>
                            <option value="out delivery">Out Delivery</option>
                            <option value="delivered">Delivered</option>
                            <option value="cancel">Cancel</option>
                        </select>
                        <input type="submit" value="Change" name="status">
                </form>
                <hr class="hrline">
            </div>
            <div class="username">
                <h6>User Info</h6>
                <h2>Name:<?php echo $userdata['username']; ?></h2>
                <h2>Email:<?php echo $userdata['useremail']; ?></h2>
                <h2>Phone NO:<?php echo $addressdata['Phonenumber']; ?></h2>
                <h2>Address:<?php
                 echo $addressdata['street'] ;
                 echo $addressdata['city'] ;
                 echo $addressdata['pincode'] ;
                 echo $addressdata['state'] ;
                 echo $addressdata['country'];
                ?></h2>
                <hr class="hrline">
            </div>
            <div class="username">
                <h6>Order Date</h6>
                <?php $date=strtotime($orderdata['placeddate'])?>
                <h2><?php echo date('Y-m-d',$date);?> </h2>
                <hr class="hrline">
            </div>
        </div>
        

    </div>
</body>
</html>