<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	@media screen and (max-width:640px) {
  #out{margin-left:520px;}
 // #p{margin-left:2px; width:15%;}
  
}
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2 style="color: white;">Admin - create user</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>
		<!-- logged in user information -->
		<div class="profile_info"  >
			

			<div id="out">
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong style="color: white;;"><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: white;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php" style="color: white;"> + add user</a>
					</small>

				<?php endif ?>
			</div>
		</div>

		<div class="input-group">
			<label style="color: white;">Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label style="color: white;">Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label style="color: white;">User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label style="color: white;">Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label style="color: white;">Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
		</div>
	</form>
	
</body>
</html>