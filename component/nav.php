<link rel="stylesheet" href="component/nav.css">
<?php
    session_start();
    include("./config/dbconnect.php");

    $fetchmen="SELECT * FROM categories WHERE women IS NULL AND setboth IS NULL AND status='show'";
    $resultmen=mysqli_query($con,$fetchmen);

    $fetchwomen="SELECT * FROM categories WHERE men IS NULL AND setboth IS NULL AND status='show'";
    $resultwomen=mysqli_query($con,$fetchwomen);

    $fetchunisex="SELECT * FROM categories WHERE women IS NULL AND men IS NULL AND status='show'";
    $resultunisex=mysqli_query($con,$fetchunisex);


    ?>
<nav>
        <div class="nav-div">
            <div class="left-nav">
                <a href="index.php" >
                    <h1>AlphaEye</h1>
                </a>
            </div>
            <div class="center-nav">
                <ol class="list">
                    <li><a href="index.php">Home<span></span></a></li>
                    <li class="category">
                        Category<span></span>
                                <div class="category-div">
                                    <div class="image-sec">
                                        <img src="assets/staticimg/Men-icon.jpg" alt="" srcset="" 
                                        id="men">
                                        <img src="assets/staticimg/Women-icon.jpg" alt="" srcset="" id="women">
                                        <img src="assets/staticimg/unisex.png" id="uniseximg" alt="" srcset="">
                                    </div>
                                    <div class="name-sec">
                                        <div class="men">
                                            <h3>Men Category</h3>
                                            <?php while($men=mysqli_fetch_assoc($resultmen)){?>
                                            <h5>
                                                <a class="catlink" href="viewproduct.php?category=<?php echo $men['men']; ?>">
                                                    <?php echo $men['men']; ?></a>
                                            </h5>
                                            <?php }?>
                                        </div>
                                        <div class="women">
                                            <h3>Women Category</h3>
                                            <?php while($women=mysqli_fetch_assoc($resultwomen)){?>
                                            <h5>
                                                <a  class="catlink" href="viewproduct.php?category=<?php echo $women['women']; ?>">
                                                    <?php echo $women['women']; ?></a>
                                            </h5>
                                            <?php }?>
                                        </div>
                                        <div class="unisex">
                                            <h3>Unisex Category</h3>
                                            <?php while($unisex=mysqli_fetch_assoc($resultunisex)){?>
                                            <h5>
                                                <a class="catlink" href="viewproduct.php?category=<?php echo $unisex['setboth']; ?>">
                                                    <?php echo $unisex['setboth']; ?></a>
                                            </h5>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                    </li>
                    <li><a href="viewproduct.php">Product<span></span></a></li>
                    <li><a href="aboutus.php">AboutUs <span></span></a></li>
                </ol>
            </div>
            <div class="right-nav">
                    <i class="ri-search-line" id="search-icon"></i>
                <?php
                    if(isset($_SESSION['email']) && isset($_SESSION['role'])){
                        $email=$_SESSION['email'];
                        $select="select * from userdata where useremail='$email'";
                        $result=mysqli_query($con,$select);
                        $data=mysqli_fetch_assoc($result);
                        $char=str_split($data['username']);
                        ?>
                            <button id="user-logo">
                                <i class='ri-close-circle-line' id="userclose" style="display:none"></i>
                                <span id='user-name-logo'>
                                    <?php echo $char[0];?>
                                </span>
                            </button>
                    <?php
                    }
                    else{
                        ?>
                             <a href="singin.php"><i class="ri-user-line"></i></a>
                        <?php
                    }
                ?>  
                <a href="cart.php"><i class="ri-shopping-cart-2-line"></i></a>
            </div>
            <!-- search  box design -->
           <div class="search-sec">
                    <form method="get" action="viewproduct.php">
                        <input type="text" name="searchquery" placeholder="Search Product">
                        <input type="submit" name="search" style="display:none">
                        <h3>No recent searches</h3>
                    </form>
                    <button id="closesearch">
                        <i class="ri-close-circle-line"></i>
                    </button>
           </div>

           <!-- here user profile menu -->
            <!-- user profile menu -->
                <div class="menu-div">
                    <ul>
                        <li><a href="profile.php">
                            <i class="ri-shield-user-line"></i>Profile</a>
                        </li>
                        <li><a href="userorder.php">
                            <i class="ri-truck-line"></i>Orders</a>
                        </li>
                        <li><a href="logout.php">
                            <i class="ri-shut-down-line"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            <!-- user profile menu -->
        <!-- </div> -->

        </div>
    </nav>

    <script src="component/nav.js"></script>