<?php
include("config/dbconnect.php");
// here user profile page address
if(isset($_POST['useraddress'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phoneno'];
    $pw=$_POST['password'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $pincode=$_POST['pincode'];

    $select="SELECT * FROM `useraddres` WHERE userid=$id";
    $ans=mysqli_query($con,$select);
        if(mysqli_num_rows($ans)>0){
            $update="UPDATE `useraddres` SET `Phonenumber`='$phone',`street`='$street',`city`='$city',`state`='$state',`country`='$country',`pincode`='$pincode' WHERE userid=$id";
            
            mysqli_query($con,$update);
        }
        else{
            $insert="INSERT INTO `useraddres`(`userid`,`Phonenumber`, `street`, `city`, `state`, `country`, `pincode`) VALUES ($id,'$phone','$street','$city','$state','$country','$pincode')";
            mysqli_query($con,$insert);
        }
        
        // here check if password is set or not
        if($pw){
            $password=password_hash($pw,PASSWORD_BCRYPT);
            $usernameup="UPDATE `userdata` SET `username`='$name',`password`='$password' WHERE id=$id";
            mysqli_query($con,$usernameup);
            header("Location:profile.php");
        }
        else{
            $usernameup="UPDATE `userdata` SET `username`='$name' WHERE id=$id";
            mysqli_query($con,$usernameup);
            header("Location:profile.php");
        }
       
}


// here add address in check out page

if(isset($_POST['address'])){
    session_start();
    $phone=$_POST['phoneno'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $pincode=$_POST['pincode'];


    $email=$_SESSION['email'];
   $fetchuser="select * from userdata where useremail='$email'";
    $result=mysqli_query($con,$fetchuser);
    $data=mysqli_fetch_array($result);

    $selectcart="select * from cart where userid=$data[id] AND powertype!='NULL'";
    $cartresult=mysqli_query($con,$selectcart);

    $select="SELECT * FROM `useraddres` WHERE userid=$data[id]";
    $ans=mysqli_query($con,$select);
        if(mysqli_num_rows($ans)>0){
            $update="UPDATE `useraddres` SET `Phonenumber`='$phone',`street`='$street',`city`='$city',`state`='$state',`country`='$country',`pincode`='$pincode' WHERE userid=$data[id]";
            mysqli_query($con,$update);

            if(mysqli_num_rows($cartresult)>0){
                header("Location:userprescription.php");
            }
            else{
                header("Location:order.php?type=onlyframe");
            }
            
        }
        else{
            $insert="INSERT INTO `useraddres`(`userid`,`Phonenumber`, `street`, `city`, `state`, `country`, `pincode`) VALUES ($data[id],'$phone','$street','$city','$state','$country','$pincode')";
            mysqli_query($con,$insert);

            if(mysqli_num_rows($cartresult)>0){
                header("Location:userprescription.php");
            }
            else{
                header("Location:order.php?type=onlyframe");
            }
        }
        
}
?>