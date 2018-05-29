<!DOCTYPE html>
<html>
<head>
	<title>Login - Psyclinic</title>
	<script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dashboard/build/css/style.css')?>">
	<script src="<?php echo base_url(); ?>assets/dashboard/build/js/adding.js"></script>
</head>


<body>
	<div id="formWrapper">

		<form id="form" action="<?php echo base_url('Core_controller/validasi'); ?>" class="form" method="POST">
			<div class="logo">
				<img src="<?php echo base_url('assets/dashboard/build/images/logo2.png')?>" width="150" height="150">
			</div>
			<div class="form-item">
				<p class="formLabel">Username</p>
					<input type="username" name="username" id="username" class="form-style" autocomplete="off"/>
			</div>
			<div class="form-item">
				<p class="formLabel">Password</p>
					<input type="password" name="password" id="password" class="form-style" />
				<p style="margin-left: 10px;">
					<a href="#"><small>Forget your Password ?</small></a>
					<u><a href="<?php echo base_url('')?>"><small>Cancel</small></a></u>
				</p>	
			</div>
			<div class="button">
				<input type="submit" class="login pull-right" value="Log In"><a href='#'>
				<div class="clear-fix"></div>
			</div>
		</form>
	</div>
</body>
</html>