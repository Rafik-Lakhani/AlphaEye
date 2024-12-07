<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssStyle/style.css">
    <?php include("config/remixicone.php")?>
    <?php include("config/fontfamily.php")?>
    <?php include("config/dbconnect.php") ?>
    <title>Alpha Eye | Make your lock stylist</title>
</head>
<body>

    <div class="main">
        <?php include("component/nav.php"); ?>
        <div class="hero">
            <div class="left-div">
                <h1>Redefining Vision Redefining You</h1>
                <p>Alpha Eye is redefining the eyewear experience by offering a range
              of stylish and durable frames that cater to every personality and
              lifestyle. Our commitment to innovation and craftsmanship ensures
              that each pair not only enhances your vision but also complements
              your style.</p>
                <a href="viewproduct.php"><button>Find Style</button></a>
            </div>
                <div class="right-div">
                    <!-- <img id="higlight-img" src="assets/staticimg/homepageimg.jpg" >
                    <img id="higlight-img-2" src="assets/staticimg/homepageimg2.jpg">
                    <img id="higlight-img-3" src="assets/staticimg/homepageimg2.jpg"> -->

                    <div class="neumor-div">
                    
                    <img id="" src="assets/staticimg/homepageimg.jpg" >
                    <img id="" src="assets/staticimg/homepageimg2.jpg" >
                    </div>
                </div>
        </div>

        
        <div class="newarrivals-div">
            <div class="heading">
                <h1>New Arrivals</h1>
                <a href="viewproduct.php?query=newarrivals"><button>See All</button></a>
            </div>
            <div class="card-div">
                <?php 
                    $select ="SELECT * FROM product WHERE addingdate >= DATE_SUB(CURRENT_DATE, INTERVAL 10 MONTH) AND status='show' ORDER BY addingdate DESC";
                    $result1 = mysqli_query($con, $select);
                    $name="";
                    $lenth=0;
                    while($row = mysqli_fetch_assoc($result1)){
                        if($name==$row["name"] || $lenth==3){
                            continue;
                        }
                        else{
                            $name=$row["name"];
                            $lenth+=1;
                        ?>
                                <div class="card">
                                    <a href="product.php?pname=<?php echo $row['name']  ?>&pid=<?php echo $row["productid"]; ?>">
                                    <img src="assets/images/<?php echo $row["img1"]; ?>" alt="main image">
                                    </a>
                                    <div class="detail-sec">
                                        <div class="name-div">
                                            <h3><?php echo $row["name"]; ?></h3>
                                            <h5><?php echo $row["subcategory"]; ?></h5>
                                            <h3>₹<?php echo $row["sellingprice"]; ?></h3>
                                        </div>
                                        <div class="btn-div">
                                            <a href="addcart.php?action=addproduct&type=onlyframe&productid=<?= $row['productid']?>">
                                                <button>
                                                    <i class="ri-shopping-cart-line"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                       
                    <?php
                    }}?>
            </div>
        </div>
        <div class="img-div">
            <img src="assets/staticimg/benar.jpg" alt="">
        </div>

        <div class="hero2">
            <h1>Personailzed <br> eyecare for you.</h1>
            <p>select one card to find the perefect style or lences,according to your needs.</p>
        </div>
        
        <div class="boxs">
            <div class="box">
                <i class="ri-glasses-2-fill"></i>
                <h1>Digital Life style</h1>
                <p>Enhance Your Digital Lifestyle<br> with Precision Eyeglasses <br>
                Strain-free Vision</p>
                </div>
                    <div class="box">
                    <i class="ri-medal-line"></i>
                    <h1>Great Gamer</h1>
                    <p>Level up your gaming experience with glasses designed for the Great Game in you
                    Strain-free Vision</p>
                    </div>
                        <div class="box">
                        <i class="ri-emotion-laugh-line"></i>
                        <h1>Outdoor Lover</h1>
                        <p>Explore Great Outdoors with Clairty and Comfort, Eyewear for the Outdoor Enthusiast</p>
                        </div>
                            <div class="box">
                            <i class="ri-roadster-line"></i>
                            <h1>Always Driving</h1>
                            <p>Navigate Every Journey :Eyewear Companion for the Always- Driving Enthusiast</p>
                            </div>
        </div>
            <?php include("component/footer.php");?>
    </div>
    <script src="jsScript/script.js"></script>
</body>
</html>