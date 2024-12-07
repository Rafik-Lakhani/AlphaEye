<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page | Admin</title>
    <link rel="stylesheet" href="stylesheet/addproduct.css">
</head>
<body>
<?php
        include("component/adminnav.php");
        include("../config/fontfamily.php");
        include("../config/dbconnect.php");
        include("../config/imagestore.php");
        include("component/authenticate.php");

        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $productname = $_POST['productname'];
            $size = $_POST['size'];
            $mrp = $_POST['mrp'];
            $sellingprice = $_POST['sellingprice'];
            $maincategory=$_POST['maincategory'];
            $subcategory=$_POST['subcategory'];
            $str=mysqli_real_escape_string($con,$_POST['detail']);
            $detail = str_replace(array('\r\n','\n','\r'),"<br/>",$str);

            $color=$_POST['color'];
            // $checkbox=$_POST['stuts'];
            if(isset($_POST["stuts"])){
                $checkbox=$_POST["stuts"];
            }
            else{
                $checkbox="show";
            }
            //image single upload
            if(isset($_FILES['file'])){
                $mainimage=$_FILES['file'];
                $filename=image($mainimage);
            }
            //multiple image upload

            if(isset($_FILES['otherimg'])) {
                $file2=$_FILES['otherimg'];

                for ($j=0;$j<count($file2["name"]);$j++)
                {
                    $img=array(
                    "name" => $file2["name"][$j],
                    "type" => $file2["type"][$j],
                    "tmp_name" => $file2["tmp_name"][$j],
                    "error" => $file2["error"][$j],
                    "size" => $file2["size"][$j]);
                    $imgname[$j]=multipleimage($img);
                }
              } 


            $insert = "INSERT INTO product(name, size, mrp, sellingprice, maincategory, subcategory, detail, color, status,img1,img2,img3,img4) VALUES ('$productname', '$size', '$mrp', '$sellingprice', '$maincategory', '$subcategory', '$detail', '$color', '$checkbox','$filename','$imgname[0]','$imgname[1]','$imgname[2]')";


            try{
                $result=mysqli_query($con,$insert);
                header("Location:additem.php");
            }
            catch(Exception $e){
                echo "Error:".$e->getMessage();
            }

            $extracolor=$_POST["extracolor"];
            for($i=1;$i<=$extracolor;$i++){
                $colornm=$_POST["secondcolor$i"];


                if(isset($_FILES["secondfile$i"])){
                    $mainimage=$_FILES["secondfile$i"];
                    $filename2=image($mainimage);
                }


                if(isset($_FILES["otherfile$i"])) {
                    $file1=$_FILES["otherfile$i"];
                    for ($j=0;$j<count($file1["name"]);$j++)
                    {

                        $img2=array(
                        "name" => $file1["name"][$j],
                        "type" => $file1["type"][$j],
                        "tmp_name" => $file1["tmp_name"][$j],
                        "error" => $file1["error"][$j],
                        "size" => $file1["size"][$j]);
                        $imgname2[$j]=multipleimage($img2);
                    }
                  } 

                $insert = "INSERT INTO product(name, size, mrp, sellingprice, maincategory, subcategory, detail, color, status ,img1 ,img2 ,img3 ,img4) VALUES ('$productname', '$size', '$mrp', '$sellingprice', '$maincategory', '$subcategory', '$detail', '$colornm', '$checkbox','$filename2','$imgname2[0]','$imgname2[1]','$imgname2[2]')";


                try{
                    $result=mysqli_query($con,$insert);
                    header("Location:additem.php");
                }
                catch(Exception $e){
                    echo "Error:".$e->getMessage();
                }

            }


        }
        
    ?>
    <div class="form-div">
        <form method="post" enctype="multipart/form-data">
        <div class="close">
        <a href="additem.php">
            <i class="ri-close-fill close-icon"></i>
        </a>
        </div>
        <h1>Add Product</h1>
        
        <div class="name-div">
        <div>
        <label for="catname">Product Name</label>
        <input type="text" id="prd-nm" required name="productname">
        </div>
            <div>
            <label for="catname">Product Name</label>
            <select name="size" class="dropdown" required>
                <option value="narrow">narrow</option>
                <option value="medium">medium</option>
                <option value="large">large</option>
                </select>
            </div>
        </div>
       
        <div class="price-div">
            <div>
                <label for="price" id="price">Price</label>
                <input type="number" required name="mrp">
            </div>
            <div>
                <label for="price" id="price">Selling Price</label>
                <input type="number" required name="sellingprice">
            </div>
        </div>



        <div id=drop-down-2>
            <div>
                <label for="dropdown"> Main catgory</label>
                <select name="maincategory" id="maincategory" required onclick="showcaregory()" class="dropdown">
                    <option  disabled selected>select</option>
                    <option value="men">Man</option>
                    <option value="women">Women</option>
                    <option value="both">Both</option>
                </select>
            </div>
            <div id="subcategory">
                <label for="dropdown"> Sub catgory</label>
                <select name="subcategory"  class="dropdown" id="subcat" required>
                    <option  disabled selected>select</option>
                </select>
            </div>
        </div>

        <lable for=textarea class=detail>Detail</lable>
            <textarea id="text-area" required name="detail" rows="3" cols="50">
        </textarea>

        <div class="from-select">
            <div>
            <label for="file">Select-img</label>
            <input type="file" required name="file">
            </div>
               <div>
                <label for="file">Select Other-img</label>
                <input type="file" required multiple min="3" max="3" name="otherimg[]" >
                </div>
        </div>

        <div class="color">
            <label for="color">Enter Color</label>
            <input type="text" required name="color">
            <input type="button" onclick="showcolor()" id="addcolorbtn" value="Add colour">
            <input type="hidden" value="0" name="extracolor" id="hiddentextbox">
        </div>
        
        <div class="check-box">
        <input type="checkbox" name="stuts" value="hidden">
        <label for="hidden" id="hidden-lb">hidden</label>
        </div>

        <div class="submit">
            <input type="submit" value="Add Product">
        </div>    
    </form>
    </div>

    <script>
        function showcaregory(){
            document.getElementById('subcat').innerHTML ='';
            document.getElementById('subcat').innerHTML ='<option  disabled selected>select</option>';
            // document.getElementById('subcat').style.opacity = 1;
            <?php
            $query = "SELECT * FROM categories";

            $result=mysqli_query($con,$query);
            while($data=mysqli_fetch_assoc($result)){

                if(!isset($data["men"]) &&  !isset($data["women"])) {
                    if($data["status"]=="show"){
                        ?>
                        if(document.getElementById('maincategory').value=="both"){
                        <?php
                            echo "
                            document.getElementById('subcat').innerHTML +=
                            '<option for=subcat value=$data[setboth]> $data[setboth] </option>';
                            ";
                        ?>
                        }
                        <?php
                    }
                }
                elseif(!isset($data["women"]) && !isset($data["setboth"])) {
                    // $row="men";
                    if($data["status"]=="show"){
                        ?>
                        if(document.getElementById('maincategory').value=="men"){
                        <?php
                            echo "
                            document.getElementById('subcat').innerHTML +=
                            '<option for=subcat value=$data[men]> $data[men] </option>';
                            ";
                        ?>
                        }
                        <?php
                    }
                }
                else{
                    // $row="women";
                    if($data["status"]=="show"){
                        ?>
                        if(document.getElementById('maincategory').value=="women"){
                        <?php
                            echo "
                            document.getElementById('subcat').innerHTML +=
                            '<option for=subcat value=$data[women]> $data[women] </option>';
                            ";
                        ?>
                        }
                        <?php
                    }
                }
            }
            ?>
        }

        var i=1;
        
        function showcolor(){
            document.querySelector(".color").innerHTML +=`
                <div class="add-color-div">
                    <div class="color-file-div">
                        <div>
                            <label for="file">Select-img</label>
                            <input type="file" required name=secondfile${i}>
                        </div>
                        <div>
                            <label for="file">Select Other-img</label>
                            <input type="file" required multiple min="3" max="3" name="otherfile${i}[]">
                        </div>
                    </div>
                    <div>
                        <label for="color">Enter secondcolor</label>
                        <input type="text" required name=secondcolor${i}>
                    </div>
                </div>
            
            `;
            document.querySelector("#hiddentextbox").value = i;
            i++;
            }
            


            // document.querySelector("#addcolorbtn").addEventListener("click", function(){
            //     document.querySelector(".color").innerHTML +=`
            //     <div class="add-color-div">
            //         <div class="color-file-div">
            //             <div>
            //                 <label for="file">Select-img</label>
            //                 <input type="file" name=file${i}>
            //             </div>
            //             <div>
            //                 <label for="file">Select Other-img</label>
            //                 <input type="file" name="otherfile${i}[]">
            //             </div>
            //         </div>
            //         <div>
            //             <label for="color">Enter secondcolor</label>
            //             <input type="text" name=secondcolor${i}>
            //         </div>
            //     </div>
            
            // `;
            // document.querySelector("#hiddentextbox").value = i;
            // i++;
            
            // });



    </script>
</body>
</html>