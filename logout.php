<?php
    session_start();

if(isset($_SESSION['email'])){
    unset($_SESSION['email']);
    unset($_SESSION['role']);
    header('Location:index.php');
}
else{
    header('Location:index.php');
}
?>
