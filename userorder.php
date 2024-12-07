<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssStyle/userorder.css">
    <title>Your Order | Alpha Eye</title>
</head>
<body>
    <div class="main">
        <?php include("config/remixicone.php");?>
        <?php include("config/fontfamily.php");?>
        <?php include("component/nav.php");?>
        <?php include("config/dbconnect.php");?>
        <?php 
            if(!isset($_SESSION['email'])&& !isset($_SESSION['role'])){
                echo "<div style='text-align:center; margin-top: 50px;'>";
                echo "<h1>Please Login to your account</h1>";
                echo "<a href='singin.php' style='text-align:center; text-decoration:none; color:black;'>Login</a>";
                echo "</div>";
                exit();
            }
        // Get order details from database using session email
        $useremail=$_SESSION['email'];
        $selectuser="select * from userdata where useremail='$useremail'";
        $useresult=mysqli_query($con,$selectuser);
        $userdata=mysqli_fetch_assoc($useresult);

        $selectorder="select * from `order` where userid=$userdata[id]";
        $orderresult=mysqli_query($con,$selectorder);
        ?>
        <div class="center-div">
            <h1>Your Order</h1>
            <?php while($orderdata=mysqli_fetch_assoc($orderresult)){
                $productselect="select * from product where productid=$orderdata[productid]";
                $productresult=mysqli_query($con,$productselect);
                $productdata=mysqli_fetch_array($productresult);
                ?>
                <div class="order-product">
                    <div class="image-sec">
                        <img src="assets/images/<?= $productdata['img1']?>" alt="" srcset="">
                    </div>
                    <div class="details-sec">
                        <div class="name-sec">
                            <h2><?= $productdata['name']?></h2>
                            <?php $date=strtotime($orderdata['placeddate'])?>
                            <h4>Order Date: <?= date('d-m-y',$date); ?></h4>
                            <h4>Quantity: <?= $orderdata['quantity']?></h4>
                            <h4>Delivery Status: <?= $orderdata['status']?> </h4>
                        </div>
                        <div class="price-sec">
                            <h2>₹<?= $orderdata['amount']?></h2>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
        <?php include("component/footer.php") ?>
    </div>
</body>
</html>