<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/productdetail.css">
    <title>Product Detail | Admin</title>
</head>
<body>
    <div class="main">
        <?php
            include("component/adminnav.php");
            include("../config/fontfamily.php");
            include("../config/dbconnect.php");
            include("component/authenticate.php");
            $productid=$_GET["pid"];
        ?>


        <div class="center-sec">
            <div class="heading">
                <h1>Product All Detail</h1>
                <div>
                    <a href="deleteproduct.php?pid=<?php echo $productid ;?>">
                        <button>
                            <i class="ri-delete-bin-6-line"></i>
                        </button>
                    </a>
                    <a href="editproduct.php?pid=<?php echo $productid ;?>">
                        <button>
                            <i class="ri-edit-line"></i>
                        </button>
                    </a>
                </div>
            </div>
            <?php
                // get user data by id from database
                $select = "SELECT * FROM product WHERE productid='$productid'"; 
                $result = mysqli_query($con, $select);
                $data = mysqli_fetch_assoc($result);   
            ?>
            <div class="username">
                <h5>Product ID</h5>
                <h2><?php echo $data['productid']; ?></h2>
                <hr class="hrline">
            </div>
            <div class="username">
                <h5>Product Name</h5>
                <h2><?php echo $data['name']; ?></h2>
                <hr class="hrline">
            </div>
            <div class="username">
                <h5>Product MRP</h5>
                <h2><?php echo $data['mrp']; ?></h2>
                <hr class="hrline">
            </div>
            <div class="username">
                <h5>Selling Price</h5>
                <h2><?php echo $data['sellingprice']; ?></h2>
                <hr class="hrline">
            </div>
            <div class="username">
                <h5>Main Category</h5>
                <h2><?php echo $data['maincategory']; ?></h2>
                <hr class="hrline">
            </div>
            <div class="username">
                <h5>Sub Category</h5>
                <h2><?php echo $data['subcategory']; ?></h2>
                <hr class="hrline">
            </div>
            <div class="username">
                <h5>Product Status</h5>
                <h2><?php echo $data['status']; ?></h2>
                <hr class="hrline">
            </div>
            <div class="username">
                <h5>Product Adding Date</h5>
                <?php $date=strtotime($data['addingdate'])?>
                <h2><?php echo date('Y-m-d',$date);?> </h2>
                <hr class="hrline">
            </div>
            <div class="username" >
                <h5>color</h5>
                <div class="color-div">
                <?php
                    $query="select * from product where name='$data[name]'";
                    $result2=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($result2)){
                        // echo "demo";
                        ?>
                        <a href="productdetail.php?pid=<?php echo $row['productid'];?>">
                            <div class="color-box" style="background-color:<?php echo $row['color']; ?>">
                                
                            </div>
                        </a>
                        <?php
                    }
                ?>
                </div>
                <hr class="hrline">
            </div>
            <div class="username">
                <h5>Product images</h5>
                <div class="image-div">
                <?php 
                // fetch images from database
                    $i=1;
                    while($i < 5){
                        if($data["img$i"]!==""){
                            ?>
                                <img src="../assets/images/<?php echo $data["img$i"];?>" alt="">
                            <?php
                          }
                          $i++;
                    }
                ?>
                        
                    </div>
                <hr class="hrline">
            </div>

            <div class="username">
                <h5>Product Details</h5>
                <h2 id="productdetail"><?php echo $data['detail']; ?></h2>
                <hr class="hrline">
            </div>

        </div>
        

    </div>
</body>
</html>