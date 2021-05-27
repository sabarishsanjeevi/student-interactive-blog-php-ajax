<?php include('config.php');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>User Profile - Blog @ 2.0</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-user.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
 <?php include( 'header.php'); ?>


    <!-- BEGIN: Main Menu-->
<?php include( 'sidebar.php'); ?>
    <!-- END: Main Menu-->
    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- page users view start -->
                <section class="page-users-view">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">My Profile</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="users-view-image">
                                            <img src="assets2/user.png" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar" height="80" width="40">
                                        </div>
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-bold">Username : &nbsp;</td>
                                                    <td><?php echo $_SESSION['user']['username'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Name : &nbsp;</td>
                                                    <td><?php echo $_SESSION['user']['name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Email :&nbsp;</td>
                                                    <td><?php echo $_SESSION['user']['email'] ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                                <tr>
                                                    <td class="font-weight-bold">College / School : &nbsp;</td>
                                                    <td><?php echo $_SESSION['user']['college'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Department : &nbsp;</td>
                                                    <td><?php echo $_SESSION['user']['dept'] ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12">
                                            <a href="profile-edit.php" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- account end -->
                        <!-- information start -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Information</div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td class="font-weight-bold">Mobile : &nbsp;</td>
                                            <td><?php echo $_SESSION['user']['phone'] ?></td>
                                        </tr>
                                        <!--<tr>
                                            <td class="font-weight-bold">Website</td>
                                            <td>https://rowboat.com/insititious/Angelo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Languages</td>
                                            <td>English, Arabic
                                            </td>
                                        </tr>-->
                                        <tr>
                                            <td class="font-weight-bold">Gender 
                                            : &nbsp;</td>
                                            <td><?php echo $_SESSION['user']['gender'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- information start -->
                        <!-- social links end -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Social Links</div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td class="font-weight-bold">Twitter : &nbsp;</td>
                                            <td><?php echo $_SESSION['user']['twitter'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Facebook :&nbsp;</td>
                                            <td><?php echo $_SESSION['user']['facebook'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Instagram :&nbsp;</td>
                                            <td><?php echo $_SESSION['user']['instagram'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Github :&nbsp;</td>
                                            <td><?php echo $_SESSION['user']['git'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">CodePen :&nbsp;</td>
                                            <td><?php echo $_SESSION['user']['codepen'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Slack : &nbsp;</td>
                                            <td><?php echo $_SESSION['user']['slack'] ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                </section>
                <!-- page users view end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

<?php include( 'footer.php') ?>


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/page-blog-edit.min.js"></script>
    <!-- END: Page JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->


    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/vendors/js/scripts/components.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>

    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/app-user.js"></script>
    <!-- END: Page JS-->


    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
    
</body>
<!-- END: Body-->

</html>