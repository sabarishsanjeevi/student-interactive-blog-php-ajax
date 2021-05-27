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

    <title>Blog 2.0 - Register</title>

    <link rel="stylesheet" href="./assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets2/css/all.min.css">
    <link rel="stylesheet" href="./assets2/css/animate.css">
    <link rel="stylesheet" href="./assets2/css/nice-select.css">
    <link rel="stylesheet" href="./assets2/css/owl.min.css">
    <link rel="stylesheet" href="./assets2/css/jquery-ui.min.css">
    <link rel="stylesheet" href="./assets2/css/magnific-popup.css">
    <link rel="stylesheet" href="./assets2/css/flaticon.css">
    <link rel="stylesheet" href="./assets2/css/main.css">

    <link rel="shortcut icon" href="assets2/images/favicon.png" type="image/x-icon">
    
  
</head>

<body>

    <!--============= Sign In Section Starts Here =============-->
    <div class="account-section bg_img" data-background="./assets2/images/account-bg.jpg">
        <div class="container">
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="title mb-20">Welcome To Blog 2.0</h4>
                    <form class="account-form" method="post" action="register.php">
                    <center><?php include(ROOT_PATH . '/includes/errors.php') ?></center>
                        <div class="form-group">
                            <label for="sign-up">Your Reg No <span style="color:red;">*</span></label>
                            <input type="text" name="r_no" value="<?php echo $username; ?>"  placeholder="Register Number" pattern="[0-9][0-9][Bb][A-Za-z][A-Za-z][0-9][0-9][0-9][0-9]" title="kindly provide your username correctly" required="true">
                        </div>
                        <div class="form-group">
                            <label for="sign-up">Name <span style="color:red;">*</span></label>
                            <input type="text" name="name"  placeholder="Your Name" required="true">
                        </div>
                        <div class="form-group">
                            <label for="sign-up">Email <span style="color:red;">*</span> </label>
                            <input type="email" name="email"  placeholder="Your Email" required="true">
                        </div>
                        <div class="form-group">
                            <label for="sign-up">Phone <span style="color:red;">*</span></label>
                            <input type="text" name="phone"  placeholder="Phone Number" title="Enter Your Phone without country code" pattern="[0-9]{10,}" required="true">
                        </div>
                        <div class="form-group">
                            <label for="sign-up">College <span style="color:red;">*</span></label>
                            <select name="clg" id="clg" required="true">
                                <option value="unselected" name="unselected" selected="true" disabled="true">Select Your College</option>
                                <option value="M.kumarasamy College Of Engineering" name="M.kumarasamy College Of Engineering">M.kumarasamy College Of Engineering</option>
                                <option value="Others" name="others">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sign-up">Department <span style="color:red;">*</span></label>
                            <select name="dept" id="dept" required>
                                <option value="unselected" name="unselected"  disabled="true">Select Your Department</option>
                                <option value="Information Technology" name="Information Technology" selected="true">Information Technology</option>
                                <option value="Computer Science" name="Computer Science">Computer Science</option>
                                <option value="Electrical And Electronics" name="Electrical And Electronics">Electrical And Electronics</option>
                                <option value="Electronics And Communication" name="Electronics And Communication">Electronics And Communication</option>
                                <option value="Civil" name="Civil">Civil</option>
                                <option value="Mechanical" name="Mechanical">Mechanical</option>
                                <option value="Electrical and Instrumentation" name="Electrical and Instrumentation">Electrical and Instrumentation</option>
                                <option value="Others" name="Others">Others</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pass">Password <span style="color:red;">*</span></label>
                            <input type="password" placeholder="Enter Your Password" id="pass" name="password">
                            <span class="sign-in-recovery">Forgot your password? <a href="reset-password.html">recover password</a></span>
                        </div>
                        <div class="form-group text-center">
                            <button class="mt-2 mb-2" type="submit" name="reg_user">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="or">
                    <span>OR</span>
                </div>
                <div class="account-header pb-0">
                    <span class="d-block mt-15">Already Have a account? <a href="login.php">Sign In Here</a></span>
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
<?php 
}
?>