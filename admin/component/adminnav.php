<link rel="stylesheet" href="component/adminnav.css">
<?php include("../config/remixicone.php");?>
<?php
    $pagenm=pathinfo($_SERVER["SCRIPT_FILENAME"],PATHINFO_BASENAME);
?>
<nav>
    <div class="nav_div">
        <div class="logo-center">
        <div class="top-nav">
            <h1><i class="ri-user-settings-fill"></i>Admin</h1>
        </div>
        </div>
        <div class="center-nav">
            <ul>
                <li id="<?php if($pagenm=="index.php"){ echo"active"; } ?>">
                    <a class="active-a" href="../admin">
                        <i class="ri-dashboard-line"></i>
                        Dashboard
                    </a>
                </li>
                <li id="<?php if($pagenm=="orderadmin.php"){ echo "active"; }?>">
                    <a href="orderadmin.php">
                        <i class="ri-shopping-cart-2-line"></i>
                        Order
                    </a>
                </li>
                <li id="<?php if($pagenm=="additem.php"){ echo "active"; }?>">
                    <a href="additem.php">
                        <i class="ri-truck-line"></i>
                        Add product
                    </a>
                </li>
                <li id="<?php if($pagenm=="admincatagory.php"){ echo "active"; }?>">
                    <a href="admincatagory.php">
                        <i class="ri-file-list-3-line"></i>
                        Category
                    </a>
                </li>
                <li id="<?php if($pagenm=="user.php"){ echo "active"; }?>">
                    <a href="user.php">
                        <i class="ri-user-line"></i>
                        User
                    </a>
                </li>
            </ul>
       
        </div>
        <div class="bottom-nav">
            <a href="../logout.php">
                <button>
                    <i class="ri-logout-box-line"></i>
                    Logout
                </button>
            </a>
        </div>
    </div>
</nav>