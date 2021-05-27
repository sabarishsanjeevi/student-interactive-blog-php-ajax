<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php 
	// Get all admin users from DsB
	$admins = getAdminUsers();				
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
	<link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/page-blog.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->


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
			<?php if (empty($admins)): ?>
				<h1 style="text-align: center; margin-top: 20px;">No posts in the database.</h1>
			<?php else: ?>
			


				<div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Create / Edit Users</h4>
                                </div>
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
                                <div class="card-body">
                                    <form class="form form-vertical" method="post" action="<?php echo BASE_URL . 'admin/users.php'; ?>" >
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-icon">UserName</label>
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                                        </div>
                                                        <input type="text" id="first-name-icon" class="form-control" name="username"  value="<?php echo $username; ?>" placeholder="UserName">
                                                    </div>
                                                </div>
                                            </div>
											<?php if ($isEditingUser === true): ?>
					<input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
				<?php endif ?>
				<div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-icon">Name</label>
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                                        </div>
                                                        <input type="text" id="first-name-icon" class="form-control" name="name"  value="<?php echo $name; ?>" placeholder="Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-icon">Email</label>
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></span>
                                                        </div>
                                                        <input type="email" id="email-id-icon" value="<?php echo $email; ?>" class="form-control" name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-icon">Mobile</label>
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smartphone"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg></span>
                                                        </div>
                                                        <input type="text" id="contact-info-icon" class="form-control" name="phone" value="<?php echo $phone; ?>" placeholder="Mobile">
                                                    </div>
                                                </div>
                                            </div>
											<div class="col-12">
											<label for="Role">Role</label>
											<div class="form-group">
											
														<select name="role" id="role" class="select2-size-lg form-control" id="blog-edit-status" >
														<option value="Admin" name="Admin">Admin</option>
														<option value="User" name="User">User</option>
														</select>
											</div>
											</div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="password-icon">Password</label>
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></span>
                                                        </div>
                                                        <input type="password" id="password-icon" class="form-control" name="password" placeholder="Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
											<?php if ($isEditingUser === true): ?> 
					<button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light"  name="update_admin">Update User</button>
				<?php else: ?>
					<button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light"  name="create_admin">Add User</button>
				<?php endif ?>
                                                
                                                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Users</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>User_id</th>
											<th>username</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>posts</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($admins as $key => $admin): ?>
<?php $a = $admin['id'];
$sql5 = "SELECT COUNT(*) AS post FROM posts where user_id = $a";
$result5 = $conn->query($sql5);
$row = $result5->fetch_assoc();
$pst = $row['post'];
?>
                                        <tr>
                                            <td>
                                            <?php echo $key + 1; ?>
                                            </td>
                                            <td><?php echo $a; ?></td>
                                            <td>
                                            <?php echo $admin['username']; ?>	
                                            </td>

                                            <td>
                                            <?php echo $admin['name']; ?>
                                            </td>
                                            <td>
                                            <?php echo $admin['email']; ?>
                                            </td>
                                            <td>
                                            <?php echo $admin['phone']; ?>
                                            <td>
											<?php echo $pst; ?>
                                            </td>
											<td><?php echo $admin['role']; ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="users.php?edit-admin=<?php echo $admin['id'] ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a class="dropdown-item" href="users.php?delete-admin=<?php echo $admin['id'] ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<?php endif ?>







		
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
	<script src="../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
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
