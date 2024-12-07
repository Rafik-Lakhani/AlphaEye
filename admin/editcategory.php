<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link rel="stylesheet" href="stylesheet/addcategory.css">
</head>
<body>
<div class="main">
    <?php 
    include("component/adminnav.php");
    include("../config/fontfamily.php");
    include("../config/dbconnect.php");
    include("../config/imagestore.php");
    include("component/authenticate.php");

    $catid = $_GET['catid'];
    $select="select * from categories where catid=$catid";
    $result=mysqli_query($con,$select);
    $data=mysqli_fetch_assoc($result);

    if(isset($data["men"])==false &&  isset($data["women"])==false) {
        $row="setboth";
    }
    elseif(isset($data["women"])==false && isset($data["setboth"])==false) {
        $row="men";
    }
    else{
        $row="women";
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $catid = $_POST['catid'];
        // here fetch category 
        $select="select * from categories where catid=$catid";
        $result=mysqli_query($con,$select);
        $data=mysqli_fetch_assoc($result);

        if(isset($data["men"])==false &&  isset($data["women"])==false) {
            $row="setboth";
        }
        elseif(isset($data["women"])==false && isset($data["setboth"])==false) {
            $row="men";
        }
        else{
            $row="women";
        }

        $categoryname = $_POST['categoryname'];

        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            $file=$_FILES['file'];
            deleteimg($data["image"]);//delete from only folder not database
            $filename=image($file);
        }
        else{
            $filename=$data["image"];
        }
        
        if(isset($_POST["checkbox"])){
            $checkbox=$_POST["checkbox"];
        }
        else{
            $checkbox=NULL;
        }

        if(isset($_POST["categoryname"])){
            $categoryname = $_POST['categoryname'];
        }
        else{
            $categoryname = $data[$row];
        }



        if($checkbox==NULL){
            $sql="UPDATE `categories` SET `$row`='$categoryname' ,`status`='show' , `image`='$filename' WHERE `catid`='$catid'";//here we update imgindatabase
            $result=mysqli_query($con,$sql);
            header("Location:admincatagory.php");
        }
        else{
            $sql="UPDATE `categories` SET `$row`='$categoryname' ,`status`='$checkbox' , `image`='$filename' WHERE `catid`='$catid' ";
            $result=mysqli_query($con,$sql);
            header("Location:admincatagory.php");
        }

    }



    ?>
    <div class="form-div">
        <form method="post" enctype="multipart/form-data">
        <div class="close">
        <a href="admincatagory.php">
            <i class="ri-close-fill close-icon"></i>
        </a>
        </div>
        <h1>Edit Category</h1>
        
        <label for="catname" class="label">Enter New Category name</label>
        <input type="text" name="categoryname" value="<?php echo $data[$row]; ?>">
        <input type="hidden" name="catid" value="<?= $catid; ?>">

        <div class="from-select">
        <label for="file">Select img</label>
        <input type="file" name="file">
        </div>
       
        <div class="check-box">
        <input type="checkbox" name="checkbox" id="" value="hidden">
        <label for="hidden" id="hidden-lb">hidden</label>
        </div>

        <div class="submit">
        <input type="submit" value="Edit Category">
        </div>    
    </form>
    </div>
</div>
</body>
</html>