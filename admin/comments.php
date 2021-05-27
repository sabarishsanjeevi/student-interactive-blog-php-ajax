<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php  include('includes/post_functions.php'); ?>
<?php
if (isset($_GET['delete-post'])) {
	$post_id = $_GET['delete-post'];
	deletePost($post_id);
}


?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
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
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/page-blog.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->




<!-- Get all admin posts from DB -->
	<title>Admin| Manage Comments</title>
</head>



<body class="vertical-layout vertical-menu-modern content-detached-right-sidebar navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-detached-right-sidebar">
	<!-- admin navbar -->
	<?php include('header.php') ?>
    <?php include('sidebar-admin.php') ?>

    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-detached content-left">
          <div class="content-body"><!-- Blog Detail -->

			

        <div class="col-12">
                        <div class="card">
                        <?php if (isset($_SESSION['message'])) : ?>
          
          <div class="alert alert-success" role="alert">
          <div class="alert-body">
         <p> <?php echo $_SESSION['message']; ?> 
          </p>
          </div>
      </div>
          <?php 	unset($_SESSION['message']);
      endif ?>
      <?php include(ROOT_PATH . '/includes/errors.php'); ?>


                            <div class="card-header">
                                <h4 class="card-title">Comments</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                
                                    <thead>
                                        <tr>
                                            <th>comment id</th>
                                            <th>post</th>
                                            <th>Commented by</th>
                                            <th>email</th>
                                            <th>Comment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$sql = "select * from comments";
$result = $conn -> query($sql);
if($result->num_rows > 0){
    while ($row = $result -> fetch_assoc()){
        ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?>
                                            <td>
                                            <?php 
                                            $o = $row['pid'];
                                            $sql2 = "select title from posts where id = $o";
                                            $result1 = $conn->query($sql2);
                                            $row1 = $result1->fetch_assoc();
                                            $pst = $row1['title'];
                                            echo $pst; 
                                            ?>	
                                            </td>

                                            <td>
                                            <?php echo $row['name']; ?>
                                            </td>
                                            <td>
                                            <?php echo $row['email']; ?>
                                            </td>
                                            <td>
                                            <?php echo $row['message']; ?>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="comments.php?delete-comment=<?php echo $row['id'] ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<?php }else{ ?>
    	<h1 style="text-align: center; margin-top: 20px;">No comments in the database.</h1>
<?php } ?>







		
		<!-- // Display records from DB -->
	</div>
</body>

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
    <script src="../app-assets/js/core/app-menu.min.js"></script>
    <script src="../app-assets/js/core/app.min.js"></script>
    <script src="../app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/page-blog-edit.min.js"></script>
    <!-- END: Page JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
</html>

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
</html>
