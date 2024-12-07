<?php
    include("../config/dbconnect.php");
    include("../config/imagestore.php");
    include("component/authenticate.php");

    if(isset($_GET["catid"])){
        $id=$_GET["catid"];
        $select="select * from categories where catid=$id";
        $result=mysqli_query($con,$select);
        $data=mysqli_fetch_assoc($result);


        $sql="delete from categories where catid=$id";
        $ans=mysqli_query($con,$sql);
        if($ans==false){
            header("Location:admincatagory.php");
        }
        else{
            deleteimg($data["image"]);
            header("Location:admincatagory.php");
        }
    }
    else{
        header("Location:admincatagory.php");
    }
?>