<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product | Alphaeye</title>
    <link rel="stylesheet" href="stylesheet/addcategory.css">
</head>
<body>
<div class="main">
    <?php 
    include("component/adminnav.php");
    include("../config/fontfamily.php");
    include("component/authenticate.php");

    ?>
    <div class="form-div">
        <form method="post" action="createcategory.php"  enctype="multipart/form-data" >
        <div class="close">
        <a href="admincatagory.php">
            <i class="ri-close-fill close-icon"></i>
        </a>
        </div>
        <h1>Add Category</h1>
        
        <label for="catname">Enter Category name</label>
        <input type="text" name="categorynm">

        <div class="from-select">
        <label for="file">Select img</label>
        <input type="file" name="file">
        </div>

        <div class=drop-down>
            <label for="dropdown">Drop down</label>
            <select name="categotytype" id="dropdown">
            <option value="men">man</option>
            <option value="women">woman</option>
            <option value="unisex">uni-sex</option>
            </select>
        </div>
       
        <div class="check-box">
        <input type="checkbox" name="checkbox" id="" value="hidden">
        <label for="hidden" id="hidden-lb">hidden</label>
        </div>

        <div class="submit">
        <input type="submit" value="Add Category">
        </div>    
    </form>
    </div>
</div>
</body>
</html>