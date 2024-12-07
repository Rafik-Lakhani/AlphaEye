<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page | AlphaEye</title>
    <link rel="stylesheet" href="cssStyle/cart.css">
</head>
<body>
<?php 
$totalprice=0;
$discount=0;
$totalmrp=0;

       
        include("config/dbconnect.php");
        include("config/fontfamily.php");
        include("config/remixicone.php");
?>

<!-- here cart page content start -->
    
    <div class="main">
        <div class="cart">
            <?php  include("component/nav.php");?>
            <div class="heading">
                <h2>Your Cart</h2>
            </div>
            <div class="cart-section">
                <div class="cart-item">
                    <!-- while loop to print all product in page -->
                     <?php 
                        if(isset($_SESSION['email']) && isset($_SESSION['role'])){
                            $email=$_SESSION['email'];
                            $fecthuser="select id from userdata where useremail='$email'";
                            $result=mysqli_query($con,$fecthuser);
                            $userdata=mysqli_fetch_assoc($result);
        
                            $cartproduct="select * from cart where userid = $userdata[id]";
                            $result=mysqli_query($con,$cartproduct);
                            if(mysqli_num_rows($result)>0){
                                while($cartdata=mysqli_fetch_assoc($result)){
                                    $fetchproduct="select * from product where productid = $cartdata[productid]";
                                    $productresult=mysqli_query($con,$fetchproduct);
                                    $productdata=mysqli_fetch_assoc($productresult);

                                    

                                    if($cartdata['powertype']!=null){
                                        ?>
                                             <div class=cart-first>
                                        <div class="product-div">
                                            <img class=img src="assets\images\<?= $productdata['img1']; ?>" alt="">
                                            
                                            <div class="product-detail">
                                                <div class="product-name">                       
                                                    <h3 class="productname"><?= $productdata['name']; ?></h3>
                                                    <h5>
                                                        <span class="mrpprice">₹<?php 
                                                            $mrp=$productdata['mrp']*$cartdata['quantity'];
                                                            echo $mrp;
                                                        ?></span>
                                                        ₹<?php
                                                        $productprice=$productdata['sellingprice']*$cartdata['quantity']; 
                                                        echo $productprice;
                                                        ?></h5>
                                                        
                                                </div>
                                                <div class="lens">
                                                    <h5>Lens:<?= $cartdata['lenstype']; ?></h5>
                                                    <h6>₹<?php 
                                                        $lenseprice=$cartdata['lensprice']*$cartdata['quantity']; 
                                                        echo $lenseprice;
                                                    ?></h6>
                                                </div>
                                                <div class="line"></div>
                                                    <div class="final-price">
                                                        <h4>Final Price</h4>
                                                        <h6>
                                                            <?php 
                                                                $totalproductprice=$lenseprice+$productprice;
                                                                echo $totalproductprice;
                                                                $totalprice+=$totalproductprice;
                                                                $totalmrp+=(($productdata['mrp']+$cartdata['lensprice'])*$cartdata['quantity']);
                                                            ?>
                                                        </h6>
                                                    </div>
                                                <div class="line-2"></div>
                                                
                                                <div class="quantity-wrapper">
                                                <span>
                                                    <a 
                                                    href="addcart.php?action=deleteproduct&cartid=<?php echo $cartdata['cartid']; ?>">
                                                        <button type="text">Remove</button>
                                                    </a>
                                                </span>
                                                    <div class= "quantity-wrapper-2">
                                                        <form action="addcart.php" method="get">
                                                            <input type="hidden" name= 'action' value="updatequantity">
                                                            <input type="hidden" name="cartid" value="<?= $cartdata['cartid']?>">
                                                            <input type="number" id="quantity" name="quantity" max="10" min="1"
                                                            value="<?php echo $cartdata['quantity']; ?>">
                                                            <input type="submit" style="display:none">
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                        <?php

                                    }else{
                                        ?>
                                             <div class=cart-first>
                                        <div class="product-div">
                                            <img class=img src="assets\images\<?= $productdata['img1']; ?>" alt="">
                                            
                                            <div class="product-detail">
                                                <div class="product-name">                       
                                                    <h3 class="productname"><?= $productdata['name']; ?></h3>
                                                    <h5>
                                                        <span class="mrpprice">₹<?php 
                                                            $mrp=$productdata['mrp']*$cartdata['quantity'];
                                                            echo $mrp;
                                                        ?></span>
                                                        ₹<?php
                                                        $productprice=$productdata['sellingprice']*$cartdata['quantity']; 
                                                        echo $productprice;
                                                        $totalprice += $productprice;
                                                        $totalmrp+=($productdata['mrp']*$cartdata['quantity']);
                                                    ?></h5>
                                                </div>                                                
                                                <div class="quantity-wrapper">
                                                <span>
                                                    <a 
                                                    href="addcart.php?action=deleteproduct&cartid=<?php echo $cartdata['cartid']; ?>">
                                                        <button type="text">Remove</button>
                                                    </a>
                                                </span>
                                                    <div class= "quantity-wrapper-2">
                                                        <form action="addcart.php" method="get">
                                                            <input type="hidden" name= 'action' value="updatequantity">
                                                            <input type="hidden" name="cartid" value="<?= $cartdata['cartid']?>">
                                                            <input type="number" id="quantity" name="quantity" max="10" min="1"
                                                            value="<?php echo $cartdata['quantity']; ?>">
                                                            <input type="submit" style="display:none">
                                                        </form>
                                                        
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                        <?php
                                    }
                                    ?>
                                   
                                    <?php }}
                                        else{
                                            echo "<h3>Oop's Not Any Product Added</h3>";
                                        }
                    
                                    }
                                    else{
                                        echo "<h3>Oop's Not Any Product Added</h3>";
                                    }
                                
                                 ?>
                </div>
                <div class="car-sec">
                            <div class="heading-2">
                            <h2>Bill Details</h2>
                            </div>
                                <div class="product-div-2">
                                            <div class="product-detail-2">
                                                <div class="product-name-2">                       
                                                    <h5> Total MRP</h5>
                                                        <h5>₹<?= $totalmrp ?></h5>
                                                </div>
                                                <div class="product-name-2">                       
                                                    <h5> Total Discount</h5>
                                                        <h5>₹<?php 
                                                            $discount = $totalmrp -$totalprice;
                                                            echo $discount;
                                                        ?></h5>
                                                </div>
                                                    <div class="lens-2">
                                                        <h5>Other Charge</h5>
                                                        <h5>₹0</h5>
                                                    </div>
                                                <div class="line"></div>
                                                    <div class="final-price-2">
                                                    <h4>Total payable</h4>
                                                    <h4>₹<?= $totalprice; ?></h4>
                                                </div>
                                            </div>
                                </div>
                                     <div class="button-cheakout">
                                         <a href="address.php">
                                             <button>Proceed To Cheakout ></button>
                                         </a>
                                    </div>
                    </div>
            </div>   
            <?php include("component/footer.php");?>       
        </div>
    </div>
</body>
</html>