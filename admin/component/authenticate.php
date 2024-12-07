<?php
    session_start();

    if(isset($_SESSION["email"])){
      if($_SESSION["role"]=="administrator"){
            // is true than countinue 

        }
        else{
        header("Location:../");
        }
    }
    else{
        header("Location:../");
    }
?>