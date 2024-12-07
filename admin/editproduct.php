<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product | Alphaeye</title>
    <link rel="stylesheet" href="stylesheet/editproduct.css">
</head>
<body>
    <?php
    include("component/adminnav.php");
    include("../config/fontfamily.php");
    include("../config/dbconnect.php");
    include("component/authenticate.php");

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $productid = $_POST['productid'];
            $mrp = $_POST['mrp'];
            $sellingprice = $_POST['sellingprice'];
           

            if(isset($_POST['checkbox'])){
                $hidden = $_POST['checkbox'];
            }
            else{
                $hidden ="show";
            }

            $update="UPDATE product SET mrp=$mrp,status='$hidden',sellingprice=$sellingprice WHERE productid=$productid";
            // echo $update;

            $result=mysqli_query($con,$update);
           if($result){
            header("Location:additem.php");
           }
           else{
             header("Location:editproduct?pid=$productid.php");
           }
        }


    ?>
 <div class="form-div">
        <form method="post" enctype="multipart/form-data">
        <div class="close">
        <a href="additem.php">
            <i class="ri-close-fill close-icon"></i>
        </a>
        </div>
        <h1>Edit Product</h1>
        
        
        <div class="price-div">
            <div>
                <label for="price" id="price">MRP Price</label>
                <input type="number" required name="mrp">
                <input type="hidden" name="productid" value="<?php echo $_GET['pid'];?>">
            </div>
            <div>
                <label for="price" id="price">Selling Price</label>
                <input type="number" required name="sellingprice">
            </div>
        </div>

        
        <div class="check-box">
            <div>
                <input type="checkbox" name="checkbox" id="" value="hidden">
                <label for="hidden">hidden</label>
            </div>
        </div>

        <div class="submit">
        <input type="submit" value="Edit Product">
        </div>    
    </form>
    </div>
</div>


</body>
</html>