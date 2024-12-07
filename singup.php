<link rel="stylesheet" href="cssStyle/singup.css">
<?php include("component/nav.php");?>
<?php include("config/remixicone.php");?>
<?php include("config/fontfamily.php")?>

<div class="login-container">
    <div class="login-div">
    <div class="image-part">
        <img src="assets/staticimg/register.png" alt="image of register">
    </div>
    <a href="index.php">
            <i class="ri-close-fill" id="close-icon"></i>
    </a>
        <form action="verify.php" method="post">
            <h1 class="heading">Sign Up</h1>
           <label for="Username">Enter Your User Name</label>
           <input type="text" name="username" class="from-input" required placeholder="Enter Your User Name">

           <label for="Email" class="Email">Enter Your Email</label>
           <input type="email" name="email" placeholder="Enter Your Eamil" required>

            <div class="pass">
           <label for="Password" class="password">password</label>
           <input type="password" name="password" id="password" placeholder="Enter Password" required>
           <i class="ri-eye-off-line" id="password-eye"></i>
            </div>


           <label for="Conform password" class="con-pass">Confrom password</label>
           <input type="text" name="cofpassword" placeholder="Enter Conform Password" required>

           <h3><?php 
                    if(isset($_SESSION["massage"])){
                        echo $_SESSION["massage"];
                        unset($_SESSION["massage"]);
                    }
                    ?></h3>
           <input type="submit" value="Submit" id="sub" name="signup">
           <h3>Already Have An Account? <a href="singin.php">sign in</a></h3>
        </form>
    </div>
</div>

<script>
     document.getElementById('password-eye').addEventListener('click', function(){
        var password = document.getElementById('password');
        if(password.type === 'password'){
            password.type = 'text';
            document.getElementById('password-eye').classList.remove('ri-eye-off-line');
            document.getElementById('password-eye').classList.add('ri-eye-fill');
        }else{
            password.type = 'password';
            document.getElementById('password-eye').classList.remove('ri-eye-fill');
            document.getElementById('password-eye').classList.add('ri-eye-off-line');
        }
    });
</script>

<?php include("component/footer.php");?>