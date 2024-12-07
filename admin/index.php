<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/admindeshtop.css">
    <title>Admin dashboard | Alphaeye</title>
</head>
<body>
    <div class="main">
   <?php 
    include("component/adminnav.php");
    include("../config/fontfamily.php");
    include("component/authenticate.php");
    include("../config/dbconnect.php");
    ?>


    <?php 
        // Get order details from database using session email

        $selectorder="select * from `order` where status!='delivered'";
        $orderresult=mysqli_query($con,$selectorder);
        ?>
     <div class="deshboard">
            <div class="top-sec">
        <div class="box">
            <div class="icon">
                <i class="ri-file-list-line"></i>
            </div>
            <h1>
                <?php 
                    if($orderresult){
                        echo mysqli_num_rows($orderresult);
                    }
                    else{
                        echo "0";
                    }
                ?>
            </h1>
            <h4>
                Current Orders
            </h4>
            
        </div>

        <!-- second box -->

        <div class="box">
            <div class="icon">
                <i class="ri-bar-chart-box-line"></i>
            </div>
            <h1>
                <?php $query="SELECT SUM(amount) AS total FROM `order`";
                $result=mysqli_query($con,$query);
                $ans=mysqli_fetch_array($result);

                ?>
                ₹<?= $ans['total'];?>
            </h1>
            <h4>
                Total Sales
            </h4>
            
        </div>


        <!-- therd box -->

        <div class="box">
            <div class="icon">
                <i class="ri-user-add-line"></i>    
            </div>
            <h1>
                <?php 
                    $selectnew="select * from userdata where joindate >= DATE_SUB(CURRENT_DATE, INTERVAL 3 MONTH) ";
                    $resultnew=mysqli_query($con,$selectnew);
                    echo mysqli_num_rows($resultnew);
                ?>
            </h1>
            <h4>
                New Coustomer
            </h4>
            
        </div>


      

            </div>
            <div class="center-sec">
        <?php 
        if(!$orderresult){
            echo "<h1 style='color:black'>NO Running Order</h1>";
            exit();
        }
        ?>
        <h1>Running Orders</h1>

        <!-- table heading -->
        <div class="order-heading">
            <div class="oder-id">
                <h3>id</h3>
            </div>
            <div class="details">
                <h3>Product Name</h3>
            </div>
            <div class="price">
                <h3>Price</h3>
            </div>
            <div class="status">
                <h3>Status</h3>
            </div>
            <div class="action">
                <h3>Action</h3>
            </div>
        </div>

        <!-- here table data show start -->


        <?php 
            while($order=mysqli_fetch_assoc($orderresult)){
                $productselect="select * from product where productid=$order[productid]";
                $productresult=mysqli_query($con,$productselect);
                $productdata=mysqli_fetch_array($productresult);
                ?>
                 <div class="order-data">
                    <div class="oder-id">
                        <h3><?= $order['orderid'];?></h3>
                    </div>
                    <div class="details">
                        <h3><?= $productdata['name'];?></h3>
                    </div>
                    <div class="price">
                        <h3><?= $order['amount'];?></h3>
                    </div>
                    <div class="status">
                        <h3><?= $order['status'];?></h3>
                    </div>
                    <div class="action">
                        <h3><a href="vieworder.php?orderid=<?= $order['orderid'];?>">
                            <i class="ri-arrow-right-s-line"></i>
                            </a>
                        </h3>
                    </div>
                    
             </div>
             <?php
            }
        ?>
        </div>






    </div>

</body>
</html>