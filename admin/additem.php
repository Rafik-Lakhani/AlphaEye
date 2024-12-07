<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product | Alphaeye</title>
    <link rel="stylesheet" href="stylesheet/additem.css">
</head>
<body>
    <?php
        include("component/adminnav.php");
        include("../config/fontfamily.php");
        include("../config/dbconnect.php");
        include("component/authenticate.php");
       
        $select="SELECT productid, name, color, status, sellingprice FROM product";
        $result=mysqli_query($con,$select);

        $quary="SELECT * FROM categories where status='show'";
        $data=mysqli_query($con,$quary);

    ?>
    <div class="deshboard">
        <div class="top-sec">
            <div class="box-conatiner">
                <div class="box">
                    <div class="icon">
                        <i class="ri-file-list-line"></i>
                    </div>
                    <h1>
                        <?php
                         echo mysqli_num_rows($result);
                        ?>
                    </h1>
                    <h4>
                    Total Product
                    </h4>
                </div>
           
            <!-- second box -->
            <div class="box">
                <div class="icon">
                    <i class="ri-file-list-line"></i>
                </div>
                <h1>
                <?php 
                    echo mysqli_num_rows($data);
                ?>
                </h1>
                <h4>
                    Total SubCategory
                </h4> 
            </div>
          
            
           
            </div>
        </div>
       


        <!-- table and heading -->
        <div class="document">
            <div class="top-hadding">
                <h1>All Product</h1>
                <a href="addproduct.php"><button>Add</button></a>
            </div>

        <div class="divder"></div>

        <?php 
            $select="SELECT productid, name, color, status, sellingprice FROM product";
            $result=mysqli_query($con,$select);
            if(mysqli_num_rows($result)>0){
                ?>
                    <div class="order-heading">
                        <div class="oder-id">
                        <h3>Product id</h3>
                        </div>
                        <div class="details">
                        <h3>Product Name</h3>
                        </div>
                        <div class="color">
                        <h3>Color</h3>
                        </div>
                        <div class="price">
                        <h3>Price</h3>
                        </div>
                        <div class="status">
                        <h3>Status</h3>
                        </div>
                        <div class="action">
                        <h3>Action</h3>
                        </din>
                    </div>
            </div>
            <?php
                while($data=mysqli_fetch_assoc($result)){
                    ?>
                        <div class="order-data">
                            <div class="oder-id">
                                <h3><?php echo $data['productid'];?></h3>
                            </div>
                            <div class="details">
                                <h3><?php echo $data['name'];?></h3>
                            </div>
                            <div class="color">
                                <h3><?php echo $data['color'];?></h3>
                            </div>
                            <div class="price">
                                <h3><?php echo $data['sellingprice'];?></h3>
                            </div>
                            <div class="status">
                                <h3><?php echo $data['status'];?></h3>
                            </div>
                            <div class="action">
                                <h3><a href="productdetail.php?pid=<?php echo $data['productid'];?>">
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </h3>
                            </din>
                        </div>
                </div>
                    <?php
                }
            }
            else{
                echo "Product not found";
            }
        ?>
               
                
                
</div>


</body>
</html>