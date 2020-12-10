<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v5 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/Login/assets-sign/css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/Login/assets-sign/fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?php echo base_url();?>/Login/assets-sign/css/style.css"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" method="post" role= "form" action="<?php echo base_url(); ?>/index.php/Administrador/blog" onsubmit="return validar();">
				<h2>Register Account Form</h2>
				<div class="form-row">
					<label for="full-name">Full Name</label>
					<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Your Name" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Your Email</label>
					<input type="text" name="email" id="email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row-last">
					<input name="B4" type="submit" name="register" class="register" value="registrarte">
				</div>
			</form>
		</div>
	</div>
	<script src="<?php echo base_url();?>/js/global.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>