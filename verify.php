<?php
    include("config/dbconnect.php");
    session_start();
     include("component/authenticate.php");

if(isset($_POST["signup"])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $pw=$_POST['password'];
        $cofpw=$_POST['cofpassword'];

        if($pw==$cofpw){
            $hashpw=password_hash($pw,PASSWORD_BCRYPT);
            $insert = "INSERT INTO `userdata`(`username`, `useremail`, `password`) VALUES ('$username', '$email', '$hashpw')";
            try{
                $result=mysqli_query($con,$insert);
            
           
                if(!$result){
                    $_SESSION["massage"]="user all ready register";
                    header("Location:singup.php");
                }
                else{
                        header("Location:index.php");
                        $_SESSION["email"]=$email;
                        $_SESSION["role"]="customer";
                        // setcookie("useremail",$email,time()+(86400 * 30), "/");
                        // setcookie("PHPSESSID",session_id(),time()+(86400 * 30), "/");
                }
            }
            catch(exception $E)
            {  
                $_SESSION["massage"]="user all ready register";
                header("Location:singup.php");
            }
        }
        else{
            $_SESSION["massage"]="password not match";
            header("Location:singup.php");
        }
    }


    else{
        $email=$_POST['email'];
        $pw=$_POST['password'];
        $select="SELECT * FROM `userdata` WHERE `useremail`='$email'";
       
        $result=mysqli_query($con,$select);
        $data = mysqli_fetch_array($result);
        
        if(mysqli_num_rows($result) > 0){
                if(password_verify($pw,$data['password'])){
                    if($data["status"]==1){
                        $_SESSION["email"]=$email;
                        $_SESSION["role"]="administrator";
                        header("Location:admin");
                        //  setcookie("useremail",$email,time()+(86400 * 30), "/");
                        // setcookie("PHPSESSID",session_id(),time()+(86400 * 30), "/");
                    }
                    else{
                        $_SESSION["email"]=$email;
                        $_SESSION["role"]="customer";
                        header("Location:index.php");
                        //  setcookie("useremail",$email,time()+(86400 * 30), "/");
                        // setcookie("PHPSESSID",session_id(),time()+(86400 * 30), "/");
                    }
                }
                else{
                    $_SESSION["massage"]="invailid password";
                    header("Location:singin.php");
                }
        }
        else{
            $_SESSION["massage"]="invailid User";
            header("Location:singin.php");
        }


    }
?>