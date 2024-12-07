<?php
    include("../config/dbconnect.php");
    include("component/authenticate.php");
     if(isset($_GET["pid"])){
        $pid=$_GET["pid"];

        $delete="delete from product where productid=$pid";
        $ans=mysqli_query($con,$delete);
        if($ans==false){
            header("Location:additem.php");
        }
        else{
            header("Location:additem.php");
        }
    }
    else{
        header("Location:additem.php");
    }
?>