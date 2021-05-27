<?php require_once('../config.php');
if(!isset($_SESSION['user'])){ //if login in session is not set
    ?>
    <script>
    window.location.href="login.php";
    </script>
   <?php
}else{
 if ($_SESSION['user']['role'] == "Admin"){ 
 ?>
 <script>
 window.location.href="dashboard.php";
 </script>
<?php
 }
 else{
    ?>
    <script>
    window.location.href="home.php";
    </script>
   <?php
 }
} ?>