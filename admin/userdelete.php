<?php
    include("../config/dbconnect.php");
    include("component/authenticate.php");
     if(isset($_GET["id"])){
        $id=$_GET["id"];

        $select="select * from userdata where id=$id";
        $result=mysqli_query($con,$select);
        $data=mysqli_fetch_assoc($result);
        $sql="delete from userdata where id=$id";
        $ans=mysqli_query($con,$sql);
        if($ans==false){
            header("Location:user.php");
        }
        else{
            header("Location:user.php");
        }
    }
    else{
        header("Location:user.php");
    }
?>