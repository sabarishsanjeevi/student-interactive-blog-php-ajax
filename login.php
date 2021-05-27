<?php  include('config.php'); ?>
<?php  include('includes/registration_login.php'); ?>
<?php
if(isset($_SESSION['user'])){ 
header("Location: home.php");
}else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Blog 2.0 - Login</title>

    <link rel="stylesheet" href="./assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets2/css/all.min.css">
    <link rel="stylesheet" href="./assets2/css/animate.css">
    <link rel="stylesheet" href="./assets2/css/nice-select.css">
    <link rel="stylesheet" href="./assets2/css/owl.min.css">
    <link rel="stylesheet" href="./assets2/css/jquery-ui.min.css">
    <link rel="stylesheet" href="./assets2/css/magnific-popup.css">
    <link rel="stylesheet" href="./assets2/css/flaticon.css">
    <link rel="stylesheet" href="./assets2/css/main.css">

    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    
  
</head>

<body>

    <!--============= Sign In Section Starts Here =============-->
    <div class="account-section bg_img" data-background="./assets2/images/account-bg.jpg">
        <div class="container">
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="title mb-20">Welcome To Blog 2.0</h4>
                    <form class="account-form" method="post" action="login.php">
                    <center><?php include(ROOT_PATH . '/includes/errors.php') ?></center>
                        <div class="form-group">
                            <label for="sign-up">Your Reg No </label>
                            <input type="text" placeholder="Reg No/e-mail/phone " id="sign-up" type="text" name="username"  value="<?php echo $username; ?>" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" placeholder="Enter Your Password" id="pass" name="password">
                            <span class="sign-in-recovery">Forgot your password? <a href="reset-password.html">recover password</a></span>
                        </div>
                        <div class="form-group text-center">
                            <button class="mt-2 mb-2" type="submit" name="login_btn">Sign In</button>
                        </div>
                    </form>
                </div>
                <div class="or">
                    <span>OR</span>
                </div>
                <div class="account-header pb-0">
                    <span class="d-block mt-15">Don't have an account? <a href="register.php">Sign Up Here</a></span>
                </div>
            </div>
        </div>
    </div>
    <!--============= Sign In Section Ends Here =============-->

    <script src="./assets2/js/jquery-3.3.1.min.js"></script>
    <script src="./assets2/js/modernizr-3.6.0.min.js"></script>
    <script src="./assets2/js/plugins.js"></script>
    <script src="./assets2/js/bootstrap.min.js"></script>
    <script src="./assets2/js/magnific-popup.min.js"></script>
    <script src="./assets2/js/jquery-ui.min.js"></script>
    <script src="./assets2/js/wow.min.js"></script>
    <script src="./assets2/js/waypoints.js"></script>
    <script src="./assets2/js/nice-select.js"></script>
    <script src="./assets2/js/owl.min.js"></script>
    <script src="./assets2/js/counterup.min.js"></script>
    <script src="./assets2/js/paroller.js"></script>
    <script src="./assets2/js/countdown.js"></script>
    <script src="./assets2/js/main.js"></script>


</body>

</html>

<?php } ?>
