<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/userdata.css">
    <title>User Detail | Admin</title>
</head>
<body>
    <div class="main">
        <?php
            include("component/adminnav.php");
            include("../config/fontfamily.php");
            include("../config/dbconnect.php");
            include("component/authenticate.php");
            $userid=$_GET["id"];
        ?>
        <div class="center-sec">
            <div class="heading">
                <h1>User all detail</h1>
                <button><a href="userdelete.php?id=<?php echo $userid ;?>"><i class="ri-user-forbid-line"></i></a></button>
            </div>
            <?php
                // get user data by id from database
                $select = "SELECT * FROM userdata WHERE id='$userid'"; 
                $result = mysqli_query($con, $select);
                $data = mysqli_fetch_assoc($result);   
            ?>
            <div class="username">
                <h6>User ID</h6>
                <h2><?php echo $data['id']; ?></h2>
                <hr class="hrline">
            </div>
            <div class="username">
                <h6>User Name</h6>
                <h2><?php echo $data['username']; ?></h2>
                <hr class="hrline">
            </div>
            <div class="username">
                <h6>User email</h6>
                <h2><?php echo $data['useremail']; ?></h2>
                <hr class="hrline">
            </div>
            <div class="username">
                <h6>Total Order</h6>
                <h2>0</h2>
                <hr class="hrline">
            </div>
            <div class="username">
                <h6>Join Date</h6>
                <?php $date=strtotime($data['joindate'])?>
                <h2><?php echo date('Y-m-d',$date);?> </h2>
                <hr class="hrline">
            </div>


        </div>
        

    </div>
</body>
</html>