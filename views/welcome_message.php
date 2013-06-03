<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container">
	<h1>LOGIN</h1>

	<div id="body">
	   
		<?php echo form_open('welcome/login');?>
			<br>Username<input required='required' name="username"></input>
			<br>Password<input required='required' type="password" name="password">
			<button type="submit" >Login</button>
		<?php echo form_close(); ?>
	</div>

	<h1>SIGN UP</h1>

	<div id="body">
	   
		<?php echo form_open('welcome/sign_up');?>
			Fullname<input required='required' name="fullname"></input>
			<br>Username<input required='required' name="username"></input>
			<br>Password<input required='required' type="password" name="password">
			<button type="submit" >SignUp</button>
		<?php echo form_close(); ?>
	</div>


</div>

</body>
</html>