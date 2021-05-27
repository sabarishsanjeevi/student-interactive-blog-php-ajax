<?php require_once('config.php');
if(!isset($_SESSION['user'])){ //if login in session is not set
header("Location:login.php");
}else{
?>

<?php include('includes/public_functions.php');
include('post_post.php'); ?>
<?php 
	// Get posts under a particular topic
	if (isset($_GET['topic'])) {
		$topic_id = $_GET['topic'];
        $posts2 = getAllPosts();
        $topics = getAllTopics();
		$posts = getPublishedPostsByTopic($topic_id);
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Blog 2.0 - Home</title>

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
    
    <style>
        .badge {
  display: inline-block;
  padding: 0.35em 0.4em;
  font-size: 80%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
            .badge {
      transition: none; } }
  a.badge:hover, a.badge:focus {
    text-decoration: none; }
  .badge:empty {
    display: none; }

.btn .badge {
  position: relative;
  top: -1px; }

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem; }

  .badge-light {
  color: #2a2e30;
  background-color: #babfc7; }
  a.badge-light:hover, a.badge-light:focus {
    color: #2a2e30;
    background-color: #9ea5b0; }
  a.badge-light:focus, a.badge-light.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(186, 191, 199, 0.5); }

    .mr-50,
.mx-50 {
  margin-right: 0.5rem !important; }
  </style>
  
</head>

<body data-spy="scroll" data-target="#faq-menu" data-offset="150">
    <!--============= ScrollToTop Section Starts Here =============-->

    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header class="header-section inner-header">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="./assets2/logo.png" alt="logo" height="50" >
                    </a>
                </div>
                <?php include('menu.php'); ?>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="header-right">
                    <a href="new_post.php" class="header-button d-none d-sm-inline-block"> Create Post </a>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->


    <!--============= Header Section Ends Here =============-->
    <section class="page-header bg_img oh" data-background="./assets2/images/page-header.png">
        <div class="bottom-shape d-none d-md-block">
            <img src="./assets2/css/img/page-header.png" alt="css">
        </div>
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">Filtered Posts</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="#0">Blog</a>
                    </li>
                    <li>
                       <?php echo getTopicNameById($topic_id); ?>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->


    
    <!--============= Blog Section Starts Here =============-->
    <section class="blog-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <article class="mb-40-none">

                    <div class="widget widget-follow">
                    <h3>Posts Under Topic : <span style="color:red;"><?php echo getTopicNameById($topic_id); ?></h3>
                    </div>


                    <?php foreach ($posts as $post): ?>

                        <div class="post-item">
                            <div class="post-thumb">
                                <a href="blog.php?post-slug=<?php echo $post['slug']; ?>"><img src="<?php echo 'static/images/' . $post['image']; ?>" alt="blog-post-image" size="730x443"></a>
                            </div>
                            <div class="post-content">
                                <h3 class="title">
                                    <a href="blog.php?post-slug=<?php echo $post['slug']; ?>"><?php echo $post['title'] ?> </a>
                                </h3>
                               
                                    <?php if (isset($post['topic']['name'])): ?>
						
							<a href="filtered_posts.php?topic=<?php echo $post['topic']['id']; ?>">
							<div class="badge badge-pill badge-light-info mr-50">
							<?php echo $post['topic']['name'] ?>
                            </div>
						</a>
					<?php endif ?>
                                <a href="blog.php?post-slug=<?php echo $post['slug']; ?>" class="read"><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></a>
                            </div>

                            
                        </div>
                        <?php endforeach ?>
                    </article>
                    <div class="pagination-area text-center pt-50 pb-50 pb-lg-none">
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 col-sm-10">
                    <aside class="sticky-menu">
                        <div class="widget widget-search">
                            <h5 class="title">search</h5>
                                <input type="text" id="search" placeholder="Enter your Search Content" >
                                <div id="display"></div>
                        </div>

                       
                        <div class="widget widget-post">
                            <h5 class="title">latest post</h5>
                            <div class="slider-nav">
                                <span class="widget-prev"><i class="fas fa-angle-left"></i></span>
                                <span class="widget-next active"><i class="fas fa-angle-right"></i></span>
                            </div>
                            <div class="widget-slider owl-carousel owl-theme">
                              <?php foreach ($posts2 as $post): ?>
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
                                            <a href="blog.php?post-slug=<?php echo $post['slug']; ?>" class="mr-4"><i class="flaticon-chat-1"></i>20 Comments</a>
                                            <a href="blog.php?post-slug=<?php echo $post['slug']; ?>"><i class="flaticon-eye"></i>466 View</a>
                                        </div>
                                    </div>
                                </div>
                               <?php endforeach ?>
                            </div>
                        </div>
                      <!--  <div class="widget widget-follow">
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
                        </div> -->
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
<?php } ?>