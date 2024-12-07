<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssStyle/profile.css">
    <title>Profile Page | AlphaEye</title>
</head>
<body>
    <div class="main">
        <?php include("config/remixicone.php")?>
        <?php include("config/fontfamily.php")?>
        <?php include("config/dbconnect.php") ?>
        <?php include("component/nav.php")?>
        <?php 
            if(isset($_SESSION['email'])&& isset($_SESSION['role'])){
                $email=$_SESSION['email'];
                $fetchuser="select * from userdata where useremail='$email'";
                $result=mysqli_query($con,$fetchuser);
                $data=mysqli_fetch_array($result);
                
                // here check if useraddress table hold user data or not
                $isaddress=false;
                $select="SELECT * FROM `useraddres` WHERE userid=$data[id]";
                $ans=mysqli_query($con,$select);
                if(mysqli_num_rows($ans)>0){
                    $dataaddress=mysqli_fetch_array($ans);
                    $isaddress=true;
                }
            }
            if(!isset($_SESSION['email']) && !isset($_SESSION['role'])){
                echo "<div style='text-align:center; margin-top: 50px;'>";
                echo "<h1>Please Login to your account</h1>";
                echo "<a href='singin.php' style='text-align:center; text-decoration:none; color:black;'>Login</a>";
                echo "</div>";
                exit();
            }
        ?>
        <div class="profile-container">
            <div class="profile-div">
                <form method="post" action="useraddress.php">
                <h2>You Profile</h2>
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                <div>
                    <label for="name">Your Name</label>
                    <input type="text" name="name" required placeholder="Enter Name" value="<?= $data['username']; ?>">
                </div>
                <div>
                    <label for="email" >Your Email</label>
                    <input type="email" id="email" required disabled  name="email" placeholder="Enter Email" 
                    value="<?= $data['useremail']; ?>">
                </div>
                <div>
                    <label for="name">Your Password</label>
                    <input type="password" name="password" placeholder="Enter New Password">
                </div>
                <div>
                    <label for="name">Your Phone</label>
                    <input type="number" name="phoneno" required placeholder="Enter Phone Number" 
                    value="<?php if($isaddress) echo $dataaddress['Phonenumber']; ?>">
                </div>
                <h2>Your Address</h2>
                <div>
                    <label for="name">Street</label>
                    <input type="text" name="street" required placeholder="Enter Street" 
                    value="<?php if($isaddress) echo $dataaddress['street']; ?>">
                </div>
                <div>
                    <label for="name">City</label>
                    <input type="text" name="city" required placeholder="Enter City" 
                    value="<?php if($isaddress) echo $dataaddress['city']; ?>">
                </div>
                <div>
                    <label for="name">State</label>
                    <input type="text" name="state" required placeholder="Enter State" 
                    value="<?php if($isaddress) echo $dataaddress['state']; ?>">
                </div>
                <div>
                    <label for="name">Country</label>
                    <input type="text" name="country" required placeholder="Enter Country" 
                    value="<?php if($isaddress) echo $dataaddress['country']; ?>">
                </div>
                <div>
                    <label for="name">Pin Code</label>
                    <input type="number" name="pincode" required placeholder="Enter Pin Code" 
                    value="<?php if($isaddress) echo $dataaddress['pincode']; ?>">
                </div>
                <input type="submit" value="Change" name="useraddress">
        </form>
        </div>
        </div>
        <?php include("component/footer.php");?>
    </div>
</body>
</html>