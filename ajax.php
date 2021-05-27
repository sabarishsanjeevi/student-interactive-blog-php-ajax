<?php
//Including Database configuration file.
include "config.php";
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
//Search query.
   $Query = "SELECT title,slug FROM posts WHERE title LIKE '%$Name%' or slug LIKE '%$Name%' or body LIKE '%$Name%' LIMIT 20";
//Query execution
   $ExecQuery = MySQLi_query($conn, $Query);
//Creating unordered list to display result.
   echo '
<ul>
   ';
   //Fetching result from database.
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
   <!-- Creating unordered list items.
        Calling javascript function named as "fill" found in "script.js" file.
        By passing fetched result as parameter. -->
   <li onclick='fill("<?php echo $Result['title']; ?>")'>
   <a href="blog.php?post-slug=<?php echo $Result['slug']; ?>">
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
       <?php echo $Result['title']; ?>
   </li></a>
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
   <?php
}}
?>
</ul>