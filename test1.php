 <?php include('config.php');
?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php include('post_post.php'); ?>
<!-- Get all topics -->
<?php $topics = getAllTopics();	?>
<!DOCTYPE html>

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
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/editors/quill/quill.snow.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-quill-editor.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/page-blog.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->
 
  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

<?php include('header.php'); ?>

<?php include('sidebar.php'); ?>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
          </div>
        </div>
        <div class="content-body"><!-- Blog Edit -->
<div class="blog-edit-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="media">
            <div class="avatar mr-75">
              <img src="./assets2/user.png" width="38" height="38" alt="Avatar" />
            </div>
            <div class="media-body">
              <h6 class="mb-25"><?php echo $_SESSION['user']['name']; ?></h6>
              <p class="card-text"><?php echo date("d/m/Y"); ?></p>
            </div>
          </div>
          <!-- Form -->
          <form method="post" enctype="multipart/form-data" action="new_post.php" class="mt-2">
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="form-group mb-2">
                  <label for="blog-edit-title">Title</label>
                  <input
                    type="text"
                    name="title"
                    id="blog-edit-title"
                    class="form-control"
                    value = "<?php echo $title; ?>"
                    placeholder="Post Title - Eg: my post"
                  />
                </div>
              </div>
              <?php if ($isEditingPost === true): ?>
					<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
				<?php endif ?>

              <div class="col-md-6 col-12">
                <div class="form-group mb-2">
                  <label for="blog-edit-slug">Status</label>
                  <select class="select2 form-control form-control-lg" name="publish" id="publish">
                  <option value="1">Publish</option>
                  <option value="0">Save As Draft</option>
                  </select>
                  </div>
              </div>
<input type="hidden" name="user_id" value="<?php echo $_SESSION['user']['id']; ?>">
              <div class="col-md-6 col-12">
                <div class="form-group mb-2">
                  <label for="blog-edit-status">Topic</label>
                  <div class="result"> </div>
                  <div class="dummy">
                  <select class="select2 form-control form-control-lg" id="blog-edit-status" name="topic_id">
                  <option disabled="true">Select topic or create one</option>
                  <?php foreach ($topics as $topic): ?>
					      	<option value="<?php echo $topic['id']; ?>" name="<?php echo $topic['id']; ?>">
							    <?php echo $topic['name']; ?>
						      </option>
	              	<?php endforeach ?>
                  </select>
                  </div>
                  </div>

              </div>
             

              <div class="col-md-6 col-12">
              <div class="form-group mb-2">
              <label for="blog-edit-status">New Topic</label>
              <form action="" method="post" class="contactform">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="New Topic" id="topic" name="topic" aria-describedby="button-addon2">
                                                <div class="input-group-append" id="button-addon2">
                                                    <button class="btn btn-outline-primary waves-effect" type="button">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
              </form>
              <div class="col-12">
              


                <div class="form-group mb-2">
                  <label>Content</label>
                  <div id="blog-editor-wrapper">
                    <div id="blog-editor-container">
                    <textarea name="body" id="body" cols="100" rows="40"><?php echo $body; ?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-2">
                <div class="border rounded p-2">
                  <h4 class="mb-1">Featured Image</h4>
                  <div class="media flex-column flex-md-row">
                    <img
                      src="app-assets/images/slider/03.jpg"
                      id="blog-feature-image"
                      class="rounded mr-2 mb-1 mb-md-0"
                      width="170"
                      height="110"
                      alt="Blog Featured Image"
                    />
                    <div class="media-body">
                      <small class="text-muted">Blog - Future Image <span style="color:red;" >*</span></small>
                      <p class="my-50">
                        <a href="javascript:void(0);" id="blog-image-text">C:\Blog 2.0\feauture.jpg</a>
                      </p>
                      <div class="d-inline-block">
                        <div class="form-group mb-0">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" value="<?php echo $image; ?>"  name="featured_image" id="blogCustomFile" accept="image/*" />
                            <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-50">
              <?php if ($isEditingPost === true): ?> 
                <button type="submit" name="update_post" class="btn btn-primary mr-1">Update</button>
				<?php else: ?>
					<button type="submit" name="create_post" class="btn btn-primary mr-1">Post ...</button>
				<?php endif ?>

                
                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
              </div>
            </div>
          </form>
          <!--/ Form -->
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Blog Edit -->

        </div>
      </div>
    </div>
    <!-- END: Content-->

    </div>
    <!-- End: Customizer-->

    <!-- Buynow Button-->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
<?php include('footer.php'); ?>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


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
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
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
  </body>
  <!-- END: Body-->
  <script>
  $(document).ready(function () {
    $('.btn-outline-primary').click(function (e) {
      $(".dummy").hide();
      e.preventDefault();
      var topic = $('#topic').val();
      $.ajax
        ({
          type: "POST",
          url: "topic.php",
          data: { "topic": topic },
          success: function (data) {
            $('.result').html(data);
            $('#contactform')[0].reset();
          }
        });
    });
  });
</script>

<script>
if($('#dropdown option:selected:disabled').length){
  alert('Please select a topic');
}
</script>
<!-- page-blog-edit.html  Tue, 19 Jan 2021 12:08:18 GMT -->
</html>
<script>
	CKEDITOR.replace('body');
</script>
