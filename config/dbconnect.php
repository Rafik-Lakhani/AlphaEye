<?php
$host="localhost";
$id="root";
$pass="";
$dbname="alphaeye";

$con= mysqli_connect($host,$id,$pass,$dbname);


if(!$con){
    echo "not done";

}

?>