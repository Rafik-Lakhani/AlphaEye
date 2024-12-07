<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssStyle/addresspage.css">
    <title>User Address | Alphaeye</title>
</head>
<body>
    <?php include("config/remixicone.php");?>
    <?php include("config/fontfamily.php");
         include("component/nav.php");
        include("config/dbconnect.php");
        // session_start();
        

        
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
        else{
            echo "<div style='text-align:center; margin-top: 50px;'>";
            echo "<h1>Please Login to your account</h1>";
            echo "<a href='singin.php' style='text-align:center; text-decoration:none; color:black;'>Login</a>";
            echo "</div>";
            exit();
        }
       

        // here submit in form

        
        ?>
        <link rel="stylesheet" href="component/nav.css">
        <div class="login-container">
            <div class="login-div">
                <a href="cart.php">
                    <i class="ri-close-fill close-icon" id="close-icon"></i>
                </a>
                <form method="post" action="useraddress.php">
                    <h1 class="heading">Enter Address</h1>
                    <label for="phoneno" class="phoneno">Phone No</label>
                    <input type="number" min="0000000000" max="9999999999" id="phoneno" name="phoneno" required placeholder="Phone NO"
                    value="<?php if($isaddress) echo $dataaddress['Phonenumber']; ?>">

                    <label for="street" class="street">Street</label>
                    <input type="text" id="street" name="street" required placeholder="Street Name"
                    value="<?php if($isaddress) echo $dataaddress['street']; ?>">

                    <label for="city" class="city">City</label>
                    <input type="text" id="city" name="city" required placeholder="City Name"
                    value="<?php if($isaddress) echo $dataaddress['city']; ?>">
                    
                    <label for="pincode" class="pincode">Pincode</label>
                    <input type="number" min="000000" max="999999" id="pincode" name="pincode" required placeholder="pincode Name"
                    value="<?php if($isaddress) echo $dataaddress['pincode']; ?>">


                    <label for="state" class="state">State</label>
                    <input type="text" id="state" name="state" required placeholder="State Name"
                    value="<?php if($isaddress) echo $dataaddress['state']; ?>">

                    <label for="country" class="country">Country</label>
                    <input type="text" id="country" name="country" required placeholder="country Name"
                    value="<?php if($isaddress) echo $dataaddress['country']; ?>">

                    <input type="submit" name="address" id="sub" name="address">

                </form>
                <div class="image-part">
                        <img src="assets/staticimg/delivery.png" alt="image of login">
                </div>
            </div>
        </div>
        <?php include("component/footer.php");?>
</body>
</html>