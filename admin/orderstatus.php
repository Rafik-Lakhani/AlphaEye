<?php 
     include("../config/dbconnect.php");
     if(isset($_POST['status'])){
        echo "demo";
        $orderid=$_POST['orderid'];
        $status=$_POST['orderstatus'];

        $update="UPDATE `order` SET status='$status' WHERE orderid=$orderid";
        $result=mysqli_query($con,$update);
        if($result){
            header("Location:$_SERVER[HTTP_REFERER]");
        }
        else{
            header("Location:$_SERVER[HTTP_REFERER]");
        }
    }
?>