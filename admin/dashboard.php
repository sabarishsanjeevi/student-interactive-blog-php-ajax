<?php  include('../config.php'); ?>


<!DOCTYPE html>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/post_functions.php'); ?>
<!-- Get all topics -->
<?php $topics = getAllTopics();	?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->

<!-- page-blog-edit.html  Tue, 19 Jan 2021 12:08:18 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>NEW POST - Blog @ 2.0</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/editors/quill/quill.snow.css">
	<link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/apexcharts.css">
	<link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/charts/chart-apex.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/form-quill-editor.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/page-blog.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">





    <!-- BEGIN: Header-->
    <?php include('header.php'); ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include('sidebar-admin.php'); ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
	<div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Ecommerce Starts -->
        <section id="dashboard-analytics">
                    <div class="row match-height">
<?php
$sql5 = "SELECT COUNT(*) AS user FROM users";
$result5 = $conn->query($sql5);
$row = $result5->fetch_assoc();
$users = $row['user'];

$sql5 = "SELECT COUNT(*) AS posts FROM posts";
$result5 = $conn->query($sql5);
$row = $result5->fetch_assoc();
$b = $row['posts'];

$sql5 = "SELECT sum(views) AS views FROM posts";
$result5 = $conn->query($sql5);
$row = $result5->fetch_assoc();
$views = $row['views'];

$sql5 = "SELECT COUNT(*) AS top FROM topics";
$result5 = $conn->query($sql5);
$row = $result5->fetch_assoc();
$topics = $row['top'];

$sql5 = "SELECT COUNT(*) AS comments FROM posts";
$result5 = $conn->query($sql5);
$row = $result5->fetch_assoc();
$cms = $row['comments'];
?>
                        <!-- Subscribers Chart Card starts -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                            
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="users" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder mt-1"><?php echo $users; ?></h2>
                                    <p class="card-text">Total Users</p>
                                   <a href="users.php"> <button type="button" class="btn btn-gradient-primary">Manage Users</button></a>
                                <br>
                                </div>
                                <div id="gained-chart"></div>

                            </div>
                           
                        </div>

                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                            
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-success p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="plus-square" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder mt-1"><?php echo $b; ?></h2>
                                    <p class="card-text">Total Posts</p>
                                   <a href="post.php"> <button type="button" class="btn btn-gradient-success">Manage posts</button></a>
                                <br>
                                </div>
                                <div id="gained-chart"></div>

                            </div>
                           
                        </div>

                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                            
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-info p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="menu" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder mt-1"><?php echo $topics; ?></h2>
                                    <p class="card-text">Topics</p>
                                   <a href="topics.php"> <button type="button" class="btn btn-gradient-info">Manage Topics</button></a>
                                <br>
                                </div>
                                <div id="gained-chart"></div>

                            </div>
                           
                        </div>




                        <!-- Orders Chart Card starts -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-danger p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="eye" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder mt-1"><?php echo $views; ?></h2>
                                    <p class="card-text">Veiws ON Posts</p>
                                </div>
                                <div id="order-chart"></div>
                                <br>
                            </div>
                        </div>
                        <!-- Orders Chart Card ends -->

                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="edit" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder mt-1"><?php echo $cms; ?></h2>
                                    <p class="card-text">Comments On Posts</p>
                                
                                <a href="comments.php"><button type="button" class="btn btn-gradient-primary">View Comments</button></a>
                                <br>
                                </div>
                                <div id="order-chart"></div>

                                <br>
                            </div>
                        </div>
                        

                    </div>
</div>
</div>
</div></div></div>

    <!-- BEGIN: Footer-->
    <?php include(ROOT_PATH.'/footer.php'); ?>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="../app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="../app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
	<script src="../app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="../app-assets/js/core/app-menu.min.js"></script>
    <script src="../app-assets/js/core/app.min.js"></script>
    <script src="../app-assets/js/scripts/customizer.min.js"></script>
	<script src="../app-assets/js/scripts/cards/card-analytics.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/page-blog-edit.min.js"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>

</html>






