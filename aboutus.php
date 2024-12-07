<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssStyle/aboutus.css">
</head>
<body>
    <div class="main">
        <?php
        include("component/nav.php");
        include("config/fontfamily.php");
        include("config/remixicone.php");
       ?>

        <div class="main-contain">
            <div class="whowe-are">
                    <div class="detail">
                        <h1>Who Are We?</h1>
                            <p>At Alpha Eye, our vision is to improve one's quality of life -by solving vision problems with our Eyewear.</p>
                            <p>Born in 2024, we're known for our cool pairs, super-friendly teams and fun & flexible work culture!</p>
                    </div>
                            <div class="img">
                                <img src="assets/staticimg/aboutus.jpg" alt="aboutusimg">
                            </div>
            </div>
            <div class="whowe-are">
                    <div class="detail">
                        <h1>OUR FOCUS</h1>
                        <p>
                        We value your time & need for quality which is why we focus even on the tiniest details when it comes to your Eyewear. Here’s what our loyal customers love the most:
                            <ul>
                                <li>Frame Styles That Make You Look Richer</li>
                                <li>Durability That Lasts Long</li>
                                <li>Prices That Complement Every Pocket</li>

                            </ul>
                        </p>
                           
                    </div>
                            <div class="img-2">
                                <img src="assets\staticimg\Aviator\johnjacobsrimlessavator-4.jpg" alt="aboutusimg">
                            </div>
            </div>
           
            <div class="whowe-are">
                    <div class="detail-sec">
                        <h1>Contact us</h1>
                        <h5><span><i class="ri-mail-line"></i></span>alphaeye@info.com</h5>
                        <h5><span><i class="ri-customer-service-2-line"></i></span>+91 1234567890</h5>
                        <h5><span><i class="ri-building-line"></i></span>Surendranagar</h5>
                    </div>
                           
            </div>
           
        </div>
       <?php 
       include("component/footer.php");
       ?>
    </div>
</body>
</html>