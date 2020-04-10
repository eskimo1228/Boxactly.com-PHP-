<?php  if (count($errors) > 0) : ?>
  <div class="msg alert-danger">
  	<?php foreach ($errors as $error) : ?>
  	  <span><?php echo $error ?></span>
	  <span></span>
  	<?php endforeach ?>
  </div><br>
<?php  endif ?>