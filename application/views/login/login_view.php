<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/kepala.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/cake.jpg');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/reset2.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css');?>" />
        <title>Login</title>
    </head>
<body>
	<div class="home">
		<p>
			<?php echo anchor('home','<< Back To Home', 'class="active"');?>
		</p>
	</div>
	<div class="logo"></div>
	<div id="login_box">
		<h1>Login</h1>
		<?php
			$attributes = array('name' => 'login_form', 'id' => 'login_form');
			echo form_open('login', $attributes);
		?>
	    <?php if (! empty($pesan)) : ?>
	        <p id="message">
	            <?php echo $pesan; ?>
	        </p>
	    <?php endif ?>
	    <form>
			<p>
				<label for="username">Username:</label>
				<input type="text" name="username" size="25" class="form_field" value="<?php echo set_value('username');?>">
			</p>
			
			<?php echo form_error('username', '<p class="field_error">', '</p>');?>
			
			<p>
				<label for="password">Password:</label>
				<input type="password" name="password" size="25" class="form_field" value="<?php echo set_value('password');?>">
			</p>

			<?php echo form_error('password', '<p class="field_error">', '</p>');?>
			
			<p>
				<input type="submit" name="submit" id="submit" value="O K"/>
			</p>
		</form>
	</div>

</body>
</html>