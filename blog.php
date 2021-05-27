<?php  include('config.php'); ?>
<?php  include('includes/public_functions.php'); ?>
<?php 
if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>
<?php $posts = getPublishedPosts(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $post['title'] ?> | Blog 2.0</title>

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

<body data-spy="scroll" data-target="#faq-menu" data-offset="150">
    <!--============= ScrollToTop Section Starts Here =============-->

    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


<?php
$a = $post['id'];
$sql5 = "SELECT COUNT(*) AS commno FROM comments where pid = $a";
$result5 = $conn->query($sql5);
$row = $result5->fetch_assoc();
$b = $row['commno'];

$u_id = $post['user_id'];
$sql3 = "select name from users where id=$u_id";
$result3 = $conn->query($sql3);
$row = $result3->fetch_assoc();
$usr3 = $row['name'];
?>

    <!--============= Header Section Starts Here =============-->
    <header class="header-section inner-header">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="home.php">
                        <img src="./assets2/logo.png" alt="logo" height="60">
                    </a>
                </div>
                <?php include('menu.php'); ?>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="header-right">
                    <a href="new_post.php" class="header-button d-none d-sm-inline-block">Create Post</a>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

    

    <!--============= Header Section Ends Here =============-->
    <section class="page-header single-header blog-single-header bg_img oh" data-background="./assets2/images/blog/page-header.jpg">
        <div class="bottom-shape">
            <img src="./assets2/up.png" alt="css">
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->


    
    <!--============= Blog Section Starts Here =============-->
    <section class="blog-single-section padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-70 mb-lg-0">
                    <article>
                        <div class="post-details">
                            <div class="post-inner">
                                <div class="post-header">
                                    <div class="meta-post">
                                        <a href="#0" class="read"><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></a>
                                        <a href="#0" class="read"><?php echo $usr3; ?></a>
                                    </div>
                                    <?php if ($post['published'] == false): ?>
                                    <h3 class="title">
                                    Sorry... This post has not been published
                                    </h3>
                                    <?php else: ?>
                                        <h3 class="title">
                                        <?php echo $post['title']; ?>
                                    </h3>
                                </div>
                                <div class="post-content">
                                    <div class="entry-meta">
                                        <div class="thumb">
                                            <a href="#0">
                                                <img src="./assets2/user.png" alt="blog">
                                            </a>
                                        </div>
                                        <a href="#comments" class="comment">
                                            <i class="flaticon-chat-1"></i>
                                            <span><?php echo $b; ?></span>
                                        </a>
                                        <a href="#0" class="comment">
                                            <i class="flaticon-eye"></i>
                                            <span><?php echo $post['views']; ?></span>
                                        </a>
                                    </div>
                                    <div class="entry-content">
                                    <img src="<?php echo 'static/images/' . $post['image']; ?>" alt="blog" size="720x306"> 
                                    <?php echo html_entity_decode($post['body']); ?>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="tags-area">
                                <div class="tags">
                                    <span>
                                        Topic : 
                                    </span>
                                    <div class="tags-item">
                                        <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id']; ?>"> &nbsp;<?php echo $post['topic']['name']; ?></a>
                                    </div>
                                </div>
                                <ul class="social-icons">
                                    <li>
                                        <a href="#0">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="active">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="blog-comment" id="comments">
                            <h5 class="title">comments</h5>
                            <div class="result"> </div>
                            <div class="dummy">
                            <ul class="comment-area">
                                

                              <?php  $pid = $post['id'];
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
                            </div>


                            <div class="leave-comment">
                                <h5 class="title">Post a Comment</h5>
                                <form class="blog-form contactform" form action="" method="post">
                                    <div class="form-group">
                                        <input type="text" id="name" placeholder="Name" value="<?php $_SESSION['user']['name']; ?>" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" placeholder="Email" value="<?php $_SESSION['user']['email']; ?>" name="email" required >
                                    </div>
                                    <input type="hidden" value="<?php $post['id']; ?>" id="pid" name="pid">
                                    <div class="form-group">
                                        <textarea placeholder="Write A Comment" id="message" placeholder="Comments" name="comment" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="button-2 btn-primary" >Post Comment</button>
                                    </div>
                                </form>
                            </div>
                    </article>
                </div>
                <?php endif ?>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <aside class="sticky-menu">
                        <div class="widget widget-search">
                            <h5 class="title">search</h5>
                                <input  id="search" placeholder="Enter your Search Content" required>
                                <div id="display"></div>
                        </div>
                        <div class="widget widget-post">
                            <h5 class="title">latest post</h5>
                            <div class="slider-nav">
                                <span class="widget-prev"><i class="fas fa-angle-left"></i></span>
                                <span class="widget-next active"><i class="fas fa-angle-right"></i></span>
                            </div>
                            <div class="widget-slider owl-carousel owl-theme">
                              <?php foreach ($posts as $post): ?>
                                <div class="item">
                                    <div class="thumb">
                                        <a href="blog.php?post-slug=<?php echo $post['slug']; ?>">
                                            <img src="<?php echo 'static/images/' . $post['image']; ?>" alt="blog-image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="p-title">
                                            <a href="blog.php?post-slug=<?php echo $post['slug']; ?>"><?php echo $post['title']; ?></a>
                                        </h6>
                                        <div class="meta-post">
                                            <a href="blog.php?post-slug=<?php echo $post['slug']; ?>" class="mr-4"><i class="flaticon-chat-1"></i><?php echo $post['comments']; ?></a>
                                            <a href="blog.php?post-slug=<?php echo $post['slug']; ?>"><i class="flaticon-eye"></i><?php echo $post['views']; ?></a>
                                        </div>
                                    </div>
                                </div>
                               <?php endforeach ?>
                            </div>
                        </div>

                        
                       <!-- <div class="widget widget-follow">
                            <h5 class="title">Follow Us</h5>
                            <ul class="social-icons">
                                <li>
                                    <a href="#0" class="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="active">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>-->

                        
                        
                        <div class="widget widget-categories">
                            <h5 class="title">categories</h5>
                            <ul>
                            <?php foreach ($topics as $key => $topic): ?>
                                <li>
                                    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id']; ?>">
                                        <span><?php echo $topic['name']; ?></span>
                                    </a>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--============= Blog Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <?php include('foot.php'); ?>
    <!--============= Footer Section Ends Here =============-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  $(document).ready(function () {
      var pid = "<?php echo $pid ?>";
      $.ajax
        ({
          type: "POST",
          url: "veiw.php",
          data: {"pid": pid },
        });
    });
</script>


<script>
  $(document).ready(function () {
    $('.btn-primary').click(function (e) {
      $(".dummy").hide();
      e.preventDefault();
      var name = $('#name').val();
      var email = $('#email').val();
      var message = $('#message').val();
      var pid = "<?php echo $pid ?>";
      var uid = "<?php echo $post['user_id']; ?>"
      $.ajax
        ({
          type: "POST",
          url: "form_submit.php",
          data: { "name": name, "email": email, "message": message, "pid": pid },
          success: function (data) {
            $('.result').html(data);
            $('#contactform')[0].reset();
          }
        });
    });
  });
</script>



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
    <script src="./assets2/js/main.js"></script>
    <script src="search.js"></script>


</body>

</html>