<?php include('config.php'); ?>
<?php

function makeSlug(String $string){
	$string = strtolower($string);
	$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
	return $slug;
}

function getAllTopics() {
	global $conn;
	$sql = "SELECT * FROM topics";
	$result = mysqli_query($conn, $sql);
	$topics = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $topics;
}

if(!empty($_POST)) {
    $topic = $_POST['topic'];
    $topic_slug = makeSlug($topic);
    mysqli_query($conn, "insert into topics (name,slug) values('$topic','$topic_slug')");
    $topics = getAllTopics();
    ?>
    <select class="select2 form-control form-control-lg" id="blog-edit-status" name="topic_id">
                  <?php foreach ($topics as $topic): ?>
					      	<option value="<?php echo $topic['id']; ?>" name="<?php echo $topic['id']; ?>">
							    <?php echo $topic['name']; ?>
						      </option>
	              	<?php endforeach ?>
                      </select>
    <?php
}

?>