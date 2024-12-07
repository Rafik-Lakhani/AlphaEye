<?php
    function image($file){
        $filenm=$file["name"];
        $filetmp=$file["tmp_name"];

        $ext=pathinfo($filenm, PATHINFO_EXTENSION);
        $newfilename=uniqid().".".$ext;
        if($file["error"]==0){
            move_uploaded_file($filetmp, "../assets/images/".$newfilename);
            return $newfilename;
        }
        else{
            return "Error";
        }
    }

    function deleteimg($filenm){
        unlink("../assets/images/$filenm");
    }


    function multipleimage($file1){
        $filenm=$file1["name"];
        $filetmp=$file1["tmp_name"];
        $ext=pathinfo($filenm, PATHINFO_EXTENSION);
        $newfilename=uniqid().".".$ext;
        if($file1["error"]==0){
            move_uploaded_file($filetmp, "../assets/images/".$newfilename);
            return $newfilename;
        }
        else{
            return "Error";
        }
    }
?>