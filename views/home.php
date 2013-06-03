<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container">
	<h1>HOME | <?php echo anchor ('welcome/logout', 'Logout'); ?></h1>
	<div id="body">
			<?php echo $error;?>
			<?php $username = $this->session->userdata('username'); 
				echo img('images/'.$username.'.png'); ?>
			<?php echo form_open_multipart('home/upload');?>

			<input type="file" name="userfile" size="20" />

			<br/><br/>

			<input type="submit" value="upload" />

			</form>
		
	</div>


</div>

</body>
</html>