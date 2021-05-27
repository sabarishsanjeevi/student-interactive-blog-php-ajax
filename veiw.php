<?php include('config.php'); ?>
<?php

if(!empty($_POST)) {
    $pid = $_POST['pid'];
    mysqli_query($conn,"UPDATE posts SET views = views+1 where (id=$pid)");
}
?>
