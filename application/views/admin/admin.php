<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
   <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/kepala.ico" type="image/x-icon" />
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chrome-bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icomoon.css"/> 
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tables.css">

<script  type="text/javascript"  src="<?php echo base_url(); ?>assets/js/tinymce/tinymce.min.js"></script>
<script  type="text/javascript">
            tinymce.init({
            selector: "textarea"
            });
</script>

</head>
<body>
<div class="content-block-title2"><span class="icon-food"></span><?php echo anchor('admin/admin', 'Welcome. You are now in Admin Page');?></div>
<div class="main">
	<div class="col_3">
		<ul class="menu-left">
			<li><?php echo anchor('home', 'Home', 'class="home"');?></li>
			<li><?php echo anchor('admin/recipe', 'Recipe', 'class="recipe"');?></li>
			<li><?php echo anchor('admin/category', 'Category', 'class="category"');?></li>
			<li><?php echo anchor('admin/tips', 'Tips', 'class="tips"');?></li>
      <li><?php echo anchor('admin/author', 'Author', 'class="author"');?></li>
      <li><?php echo anchor('admin/guestbook', 'Guestbook', 'class="guestbook"');?></li>
			<li><a class="logout"<?php echo anchor('logout', 'Logout', array('onclick' => "return confirm('Anda yakin akan logout?')"));?></li>
		</ul>
	</div>
	<div class="col_9 padding-left">
		<div class="content-block">
    		<div class="content-block-title"><span class="icon-food"></span> <?php echo $title_box; ?></div>
    		<?php echo $content; ?>
			<div id="page"></div>
      		
		</div>
	</div>
</div>
</body>
</html>
