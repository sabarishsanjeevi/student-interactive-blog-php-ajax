
<ul class="menu">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="home.php">Blog</a>
                    </li>
                    <?php
                    if ($_SESSION['user']['role'] == "Admin"){ 
                    ?>
                    <li>
                    <a href="admin/dashboard.php">Admin DashBoard</a>
                    </li>
                    <?php } ?>
                    <li>
                    <a href="dashboard.php">DashBoard</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout </a>
                    </li>
                    <li class="d-sm-none">
                        <a href="new_post.php" class="m-0 header-button">Create Post</a>
                    </li>
</ul>