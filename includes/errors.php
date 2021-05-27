<?php if (count($errors) > 0) : ?>
	<div class="alert alert-danger" role="alert">
	<h4 class="alert-heading">Error</h4>
	<div class="alert-body">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
	  </div>
  </div>
<?php endif ?>