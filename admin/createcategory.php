<?php
        include("../config/dbconnect.php");
        include("../config/imagestore.php");
        include("component/authenticate.php");

        if($_SERVER['REQUEST_METHOD']=="POST"){
            $categorynm=$_POST["categorynm"];
            $file=$_FILES["file"];
            $type=$_POST["categotytype"]; 
            $filename=image($file);
            if($filename=="Error"){
                header("Location:admincatagory.php");
            }
            if(isset($_POST["checkbox"])){
                $checkbox=$_POST["checkbox"];
            }
            else{
                $checkbox=NULL;
            }


            if($type=="men"){
                if($checkbox==NULL){
                    $sql="INSERT INTO `categories`(`men`, `status`,`image`) VALUES ('$categorynm','show','$filename')";
                    $result=mysqli_query($con, $sql);
                    header("Location:admincatagory.php");
                }
                else{
                    $sql="INSERT INTO `categories`(`men`,`image`) VALUES ('$categorynm','$filename')";
                    $result=mysqli_query($con, $sql);
                    header("Location:admincatagory.php");
                }
            }
            elseif($type=="women"){
                if($checkbox==NULL){
                    $sql="INSERT INTO `categories`(`women`, `status`,`image`) VALUES ('$categorynm','show','$filename')";
                    $result=mysqli_query($con, $sql);
                    header("Location:admincatagory.php");
                }
                else{
                    $sql="INSERT INTO `categories`(`women`,`image`) VALUES ('$categorynm','$filename')";
                    $result=mysqli_query($con, $sql);
                    header("Location:admincatagory.php");
                }
            }
            elseif($type=="unisex")
            {
                if($checkbox==NULL){
                    $sql="INSERT INTO `categories`(`setboth`, `status`,`image`) VALUES ('$categorynm','show','$filename')";
                    $result=mysqli_query($con, $sql);
                    header("Location:admincatagory.php");
                }
                else{
                    $sql="INSERT INTO `categories`(`setboth`,`image`) VALUES ('$categorynm','$filename')";
                    $result=mysqli_query($con, $sql);
                    header("Location:admincatagory.php");
                }
            }
            else{
                echo "invaild type";
                header("Location:admincatagory.php");
            }
        }
?>