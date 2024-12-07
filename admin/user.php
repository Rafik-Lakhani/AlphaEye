<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/user.css">
    <title>User Detail | Admin</title>
</head>
<body>
    <div class="main">
        <?php
            include("component/adminnav.php");
            include("../config/fontfamily.php");
            include("../config/dbconnect.php");
            include("component/authenticate.php");
        ?>

        <div class="center-sec">
                <h1>User Details</h1>
                <!-- table heading -->
                <div class="order-heading">
                    <div class="oder-id">
                        <h3>User ID</h3>
                    </div>
                    <div class="details">
                        <h3 class="useremail">User Name</h3>
                    </div>
                    <div class="price details">
                        <h3 class="useremail">User Email</h3>
                    </div>
                    <div class="status">
                        <h3>Date Of Join</h3>
                    </div>
                    <div class="action">
                        <h3>Action</h3>
                    </din>
                </div>
        </div>
        <!-- all user data print here -->

        <?php
            $select="select * from userdata where status = 0";
            $result=mysqli_query($con,$select);
            while($data=mysqli_fetch_assoc($result)){
        ?>
                <div class="order-data">
                    <div class="oder-id">
                        <h3><?php echo $data["id"]?></h3>
                    </div>
                    <div class="details">
                        <h3 class="useremail"><?php echo $data["username"]?></h3>
                    </div>
                    <div class="price details">
                        <h3 class="useremail"><?php echo $data["useremail"]?></h3>
                    </div>
                    <div class="status">
                        <?php $date=strtotime($data['joindate'])?>
                        <h3><?php echo date('Y-m-d',$date);?></h3>
                    </div>
                    <div class="action">
                        <h3>
                            <a href="userdata.php?id=<?php echo $data['id']?>">
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                        </h3>
                    </din>
                </div>
            </div>
        <?php
            }
        ?>
        

    </div>
</body>
</html>