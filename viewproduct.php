<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssStyle/viewproduct.css">
    <title>Product | Alpha Eye</title>
    <?php include("config/remixicone.php");?>
    <?php include("config/fontfamily.php");?>
    <?php include("config/dbconnect.php"); ?>
</head>
<body>
    <div class="main">
        <?php include("component/nav.php")?>

        <div class="card-div">
                <?php 
                    if(isset($_GET['category'])){
                        $category=$_GET['category'];
                        $select ="SELECT * FROM product WHERE subcategory='$category' AND status='show' ORDER BY RAND()";
                        $result1 = mysqli_query($con, $select); 
                        if(!$result1 || mysqli_num_rows($result1)==0){
                            echo "<h2>No Any Product Found</h2>";
                            exit();
                        }
                    }
                    elseif(isset($_GET['search'])){
                        $search=$_GET['searchquery'];
                        $select_product = "SELECT * FROM product WHERE CONCAT(name,subcategory,mrp,sellingprice,size,color,maincategory) LIKE '%$search%' AND status = 'show' ORDER BY RAND()";
                        $result1 = mysqli_query($con, $select_product);
                        if(!$result1 || mysqli_num_rows($result1)==0){
                            echo "<h2>No Search Product Found</h2>";
                            exit();
                        }
                    }
                    // here this request is newarrive requested
                    elseif(isset($_GET['query'])){
                        $select_product = "SELECT * FROM product WHERE addingdate >= DATE_SUB(CURRENT_DATE, INTERVAL 3 MONTH) AND status='show' ORDER BY RAND()";
                        $result1 = mysqli_query($con, $select_product);
                        if(!$result1 || mysqli_num_rows($result1)==0){
                            echo "<h2>No Product Found</h2>";
                            exit();
                        }
                    }
                    else{
                        $select ="SELECT * FROM product WHERE status = 'show' ORDER BY RAND()";
                        $result1 = mysqli_query($con, $select); 
                        if(mysqli_num_rows($result1)<=0){
                            echo "<h2>No Any Product Found</h2>";
                            exit();
                        }
                    }
                     while($row = mysqli_fetch_assoc($result1)){
                    ?>
                                <div class="card">
                                    <a href="product.php?name=<?=$row['name'] ?>&pid=<?php echo $row['productid'];?>">
                                    <img src="assets/images/<?php echo $row["img1"]; ?>" alt="main image">
                                    </a>
                                    <div class="detail-sec">
                                        <div class="name-div">
                                            <h3><?php echo $row["name"]; ?></h3>
                                            <h5><?php echo $row["subcategory"]; ?></h5>
                                            <h3>₹<?php echo $row["sellingprice"]; ?></h3>
                                        </div>
                                        <div class="btn-div">
                                            <a href=
                                            "addcart.php?action=addproduct&type=onlyframe&productid=<?= $row['productid']?>"><button><i class="ri-shopping-cart-line"></i></button></a>
                                        </div>
                                    </div>
                                    
                                </div>
                       
                    <?php
                    }?>
            </div>
        </div>
        <?php include("component/footer.php");?>
    </div>
    
</body>
</html>