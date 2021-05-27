<?php include('config.php'); ?>
<?php
//Database connection
$dbhost = 'localhost';
$dbuser = 'techcode_india';
$dbpass = 'Tech@2020';
$db = 'techcode_blog2';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($conn); 
 
//insert into database
if(!empty($_POST)) {
 $name = $_POST['name'];
 $id = $_SESSION['user']['id'];
 $email= $_POST['email'];
 $message =  $_POST['message'];
 $pid = $_POST['pid'];
 mysqli_query($conn, "insert into comments (name, email, message, uid, pid) values ('$name', '$email', '$message', '$id', '$pid')");
 $sql2 = "UPDATE posts SET comments = comments+1 where id=$pid";
 $conn->query($sql2);

$sql = "SELECT name,message,comment_at FROM comments where pid = $pid ORDER by id desc";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $timestamp = strtotime($row['comment_at']);
        $date = date('d-m-Y', $timestamp);
        ?>
        <ul class="comment-area">
    <li>

<div class="blog-item">
    <div class="blog-thumb">
        <a href="#0">
            <img src="./assets2/user.png" alt="blog">
        </a>
    </div>
    <div class="blog-thumb-info">
        <span><?php echo $date ?></span>
        <h6 class="title"><a href="#0"><?php echo $row['name']; ?></a></h6>
    </div>
    <div class="blog-content">
        <p>
        <?php echo $row['message']; ?>
        </p>
    </div>
</div>
</li>
</ul>
        <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
 <!--<center>
<div class="alert alert-primary" role="alert">
 <h4 class="alert-heading">Sucess</h4>
 <div class="alert-body">
   comment posted sucessfully
   </div>
</div>
</center>;-->
<?php
}
?>
