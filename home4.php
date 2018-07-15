<?php 
include('functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
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
	<div class="nav"><h1>VENDX</h1> </div>
	<div class="header">
		<h2>Admin - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			

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
		
	</div>
	<div class="wrapper">
					<form action="insert.php" method="post">
						Code: </br><input type="text" name="code">
							</br>
							</br>
						Name: </br><input type="text" name="name">     
							</br>
							</br>
						Price:</br> <input type="text" name="price">   
							</br>
							</br>
						Count:</br><input type="number" name="count">
							</br>
							</br>
						Checksum:</br><input type="number" name="checksum">
						</br>
						</br>
						
					<input type="submit" value="Insert">    

					</form>

				</div>
</body>
</html>