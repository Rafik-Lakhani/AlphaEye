<link rel="stylesheet" href="cssStyle/singin.css">
<?php include("component/nav.php");?>
<?php include("config/remixicone.php");?>
<?php include("config/fontfamily.php");
?>
<link rel="stylesheet" href="component/nav.css">
<div class="login-container">
    <div class="login-div">
        <div class="image-part">
            <img src="assets/staticimg/loginpage.png" alt="image of login">
        </div>
        <a href="index.php" id="close-icon">
            <i class="ri-close-fill close-icon"></i>
        </a>
        <form action="verify.php" method="post">
            <h1 class="heading">Sign in</h1>
            <label for="email" class="email">Enter email</label>
            <input type="email" id="email" name="email" require placeholder="example@gmail.com">
            <label for="password" class="password">Enter Password</label>
            <div class="pw-div">
                <input type="password" id="password" name="password" placeholder="Enter Password" require> 
                <i class="ri-eye-off-line" id="pw-eye"></i>
            </div>
            <div class="msg-div">
                <h4>
                    <?php 
                        if(isset($_SESSION["massage"])){
                            echo $_SESSION["massage"];
                            unset($_SESSION["massage"]);
                        }
                    ?>
                </h4>
                <h4><a href="forget.php">Forget Password?</a></h4>
            </div>
            <input type="submit" name="login" id="sub" name="signin">

            <h3 id="signup">Don't Have Account? <a href="singup.php">Signup</a></h3>
        </form>
    </div>
</div>

<script>
    document.getElementById('pw-eye').addEventListener('click', function(){
        var password = document.getElementById('password');
        if(password.type === 'password'){
            password.type = 'text';
            document.getElementById('pw-eye').classList.remove('ri-eye-off-line');
            document.getElementById('pw-eye').classList.add('ri-eye-fill');
        }else{
            password.type = 'password';
            document.getElementById('pw-eye').classList.remove('ri-eye-fill');
            document.getElementById('pw-eye').classList.add('ri-eye-off-line');
        }
    });
</script>

<?php include("component/footer.php");?>