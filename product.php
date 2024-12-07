<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssStyle/product.css">
    <title>Product | AlphaEye</title>
</head>
<body>
    <div class="main">
        <?php 
        include("component/nav.php");
        include("config/fontfamily.php");
        include("config/remixicone.php");
        include("config/dbconnect.php");

        if(isset($_GET["pid"])){
            $productid=$_GET["pid"];
       }
       else{
            $productid=1;
       }
       
        $sql = "SELECT * FROM product WHERE productid = $productid";
        $result = mysqli_query($con, $sql);
        $product = mysqli_fetch_assoc($result);
        
        // Display product details here
        ?>
        
        <div class="product-detail">
            <div class="product-image">
                <img id="main-img"   src="assets/images/<?php echo $product['img1']?>" alt="Product 1">
                <div class="sub-img">
                    <img src="assets/images/<?php echo $product['img2']?>" alt="Product 1" id="subimg1" onclick="changeimg(1)">
                    <img src="assets/images/<?php echo $product['img3']?>" alt="Product 2" id="subimg2" onclick="changeimg(2)">    
                    <img src="assets/images/<?php echo $product['img4']?>" alt="Product 3" id="subimg3" onclick="changeimg(3)">
                </div>
            </div>
            <div class="product-description">
                    <div class="price-div">
                        <h1><?php echo $product['name'];?></h1>
                        <h3 style="text-decoration-line: line-through";>MRP ₹<?php echo $product['mrp'];?></h3>
                        <h2>Price ₹<?php echo $product['sellingprice'];?></h2>
                        <h3>Inclusive of all taxes</h3>
                    </div>
                        <div class="price-div">
                        <h2>Gender:<span><?php echo $product['maincategory']?></span>       
                        &nbsp&nbsp&nbsp&nbsp&nbsp Size:<span><?php echo $product['size'];?></span></h2>
                         
                         <h2>Colour</h2>
                         <div style="display:flex; gap:9px;">
                         <?php 
                            $quary="select * from product where name='$product[name]'";
                            $result2=mysqli_query($con,$quary);
                            while($row=mysqli_fetch_assoc($result2)){
                                ?>
                                 <a href="product.php?name=<?=$row['name'] ?>&pid=<?php echo $row['productid'];?>"><div class="color-box" style="background-color:<?php echo $row['color'];?>"></div></a>
                                <?php
                            }
                         ?>
                        </div>
                        </div>
                                <div class="button-div">
                                    <button onclick="show()">Add To Cart</button>
                                </div>
                    <div class="detail-section">
                        <details>    
                            <summary><h3 style="display:inline;">Product Details</h3></summary>
                            <p><?php echo $product['detail']?></p>
                        </details>
                    </div>
                </div>

        </div>
                <div class="box">     
                     <!-- here lense select part  -->
                    <div class="select-lenses">
                            <button class="close"><i class="ri-close-circle-line"></i></button>
                    <i class="ri-star-line"></i>
                    <h1>Add Lenses</h1>
                        <p>You have chosen a <?php echo $product['size']; ?> sized frame<br>
                        for ₹<?php echo $product['mrp'];?></p>


                            <button id="btn-buy" onclick="next(2)">
                                <h5>Buy With Lenses</h5>
                            </button>
                                <a herf="selectlense.php?name=<?php echo $product['name']; ?>&pid=<?php echo $product['productid']; ?>">
                                    <button id="btn-frm">
                                        <h5>I need only frames</h5>
                                    </button>
                                </a>

                    </div>
                    <!-- end of lens select part -->
                
                <div class="select-lenses2">
                        <button class="close" onclick="close()"><i class="ri-close-circle-line"></i></button>
                    <h1>Select Power Type</h1>
                    <div class="type-lense" id="type1" onclick="getlense(1)">
                        <img src="assets/staticimg/single_vision.webp" alt="zero power image">
                        <div class="detail-name">
                            <h3>Single Vision/Powered Eyeglasses</h3>
                            <p>For distance or near vision.</p>
                        </div>
                    </div>
                    <div class="type-lense"id="type2" onclick="getlense(2)">
                        <img src="assets/staticimg/zero_power.webp" alt="zero power image">
                        <div class="detail-name">
                            <h3>Zero Power Eyeglasses</h3>
                            <p>Fashion or Protection from Glare/Computer Screens etc.</p>
                        </div>
                    </div>
                    <div class="type-lense" id="type3" onclick="getlense(3)">
                        <img src="assets/staticimg/bifocal.webp" alt="zero power image">
                        <div class="detail-name">
                            <h3>Bifocal/Progressive Eyeglasses</h3>
                            <p>Distance & Near vision in same lenses.</p>
                        </div>
                    </div>

                    <button onclick="next(3)" class="continuebtn">Continue</button>
                </div>

                <div class="select-lenses3">
                    <h1>Select Lenses Type</h1>
                </div>

            </div>

            <!-- here hidden form to transfer data in cart page  -->

            <form action="addcart.php" method="get" style="display:none">
                <input type="hidden" name="type" id="type">
                <input type="hidden" name="action" value="addproduct">
                <input type="hidden" name="productid" id="productid" 
                value="<?php echo $product['productid'] ?>">
                <input type="hidden" name="powertype" id="powertype" value="null">
                <input type="hidden" name="lensetype" id="lensetype" value="null">
                <input type="hidden" name="lenseprice" id="lenseprice" value="null">
                <input type="submit" name="productpage" id="submitbtn">
            </form>
                
        <!-- here add Similar Products start -->
        <h1 id="similarproduct-heading">Similar Products</h1>
        <div class="card-div">
                <?php 
                    $fecthproduct ="SELECT * FROM product WHERE subcategory='$product[subcategory]'
                    AND productid !=$product[productid] ORDER BY RAND() LIMIT 3";
                    $similerproduct = mysqli_query($con, $fecthproduct);

                    while($row = mysqli_fetch_assoc($similerproduct)){
                    ?>
                                <div class="card">
                                    <a href="product.php?pname=<?php echo $row['name']  ?>&pid=<?php echo $row["productid"]; ?>">
                                    <img src="assets/images/<?php echo $row["img1"]; ?>" alt="main image">
                                    </a>
                                    <div class="detail-sec">
                                        <div class="name-div">
                                            <h3><?php echo $row["name"]; ?></h3>
                                            <h5><?php echo $row["subcategory"]; ?></h5>
                                            <h3>₹<?php echo $row["sellingprice"]; ?></h3>
                                        </div>
                                        <div class="btn-div">
                                            <a href="addcart.php?action=addproduct&type=onlyframe&productid=
                                            <?= $row['productid']?>">
                                                <button>
                                                    <i class="ri-shopping-cart-line"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                       
                    <?php
                    }?>
            </div>
        <!-- end add Similar Products -->
        <?php include("component/footer.php");?> 
    </div>
    <script src="jsScript/product.js"></script>
</body>
</html>