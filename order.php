<?php 
include("config/dbconnect.php");
session_start();
if(isset($_POST["userprescriptionpage"])){
    $leftsph=$_POST['leftsph'];
    $rightsph=$_POST['rightsph'];
    $leftcyl=$_POST['leftcyl'];
    $rightcyl=$_POST['rightcyl'];
    $leftaxis=$_POST['leftaxis'];
    $rightaxis=$_POST['rightaxis'];
    $leftadd=$_POST['leftadd'];
    $rightadd=$_POST['rightadd'];

    if(isset($_SESSION['email'])&& isset($_SESSION['role'])){
       $useremail=$_SESSION['email'];
       $selectuser="select * from userdata where useremail='$useremail'";
       $userresult=mysqli_query($con,$selectuser);
       $userdata=mysqli_fetch_assoc($userresult);

        $selectcart="select * from cart where userid=$userdata[id]";
        $cartresult=mysqli_query($con,$selectcart);
        // $cartdata=mysqli_fetch_assoc($cartresult);


        while($row=mysqli_fetch_assoc($cartresult)){
        
            // fetch data from products table
            $selectproduct="select * from product where productid=$row[productid]";
            $productresult=mysqli_query($con,$selectproduct);
            $productdata=mysqli_fetch_assoc($productresult);

            // here calculate amount of order
            $amount=($productdata['sellingprice']+$row['lensprice'])*$row['quantity'];
            $lensprice=$row['lensprice']*$row['quantity'];
            
            // here insert order in db
            $addorder="INSERT INTO `order`(`productid`, `userid`, `quantity`, `powertype`, `lenstype`, `lensprice`, `amount`) VALUES ($row[productid],$row[userid],$row[quantity],'$row[powertype]','$row[lenstype]',$lensprice,$amount)";
            $orderresult=mysqli_query($con,$addorder);

            if($orderresult && isset($row['powertype'])){
                $selectorder="select * from `order` where userid=$userdata[id] AND productid=$row[productid]";

            $orderselectresult=mysqli_query($con,$selectorder);
            $orderdata=mysqli_fetch_assoc($orderselectresult);

            // add user eye number in data base

            $adduserpower="INSERT INTO `userprescription`(`orderid`, `userid`, `productid`, `leftSPH`, `rightSPH`, `leftCYL`, `rightCYL`, `leftAXIS`, `rightAXIS`, `leftADD`, `rightADD`) VALUES ($orderdata[orderid],$orderdata[userid],$orderdata[productid],$leftsph,$rightsph,$leftcyl,$rightcyl,$leftaxis,$rightaxis,$leftadd,$rightadd)";
            $userpowerresult=mysqli_query($con,$adduserpower);
            }
            // here delete cart data from order plase
            if($orderresult){
                $deletecart="delete from cart where cartid = $row[cartid]";
                $deletecartresult=mysqli_query($con,$deletecart);
            }
        }
        
        // here all products add in order plase and after order conformations page
        if($orderresult && $userpowerresult){
            header("Location: orderconformation.php");
            exit();
        }
    }
    else{
        header("Location: cart.php");
        exit();
    }
}
else{
    header("Location: cart.php");
    exit();
}



// here only frame product add in order plase and after order conformations page
if($_GET['type']=='onlyframe'){

    if(isset($_SESSION['email'])&& isset($_SESSION['role'])){
        $useremail=$_SESSION['email'];
        $selectuser="select * from userdata where useremail='$useremail'";
        $userresult=mysqli_query($con,$selectuser);
        $userdata=mysqli_fetch_assoc($userresult);
 
        $selectcart="select * from cart where userid=$userdata[id]";
        $cartresult=mysqli_query($con,$selectcart);

        while($row=mysqli_fetch_assoc($cartresult)){
            // fetch data from products table
            $selectproduct="select * from product where productid=$row[productid]";
            $productresult=mysqli_query($con,$selectproduct);
            $productdata=mysqli_fetch_assoc($productresult);
            
            // here calculate amount of order
            $amount=($productdata['sellingprice']+$row['lensprice'])*$row['quantity'];
            
            // here insert order in db
            $addorder="INSERT INTO `order`(`productid`, `userid`, `quantity`, `amount`) VALUES ($row[productid],$row[userid],$row[quantity],$amount)";
            $orderresult=mysqli_query($con,$addorder);
            
            if($orderresult){
                $deletecart="delete from cart where cartid = $row[cartid]";
                $deletecartresult=mysqli_query($con,$deletecart);
            }
        }
        if($orderresult){
            header("Location: orderconformation.php");
            exit();
        }
    }
    else{
        header("Location: cart.php");
        exit();
    }

}
else{
    header("Location: cart.php");
    exit();
}


?>