<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
@media screen and (max-width:640px) {
  #out{margin-left:520px;}
  //#p{margin-left:2px; width:15%;}
  
  
}
.nav{width:1400px;}
	.vertical-menu a {
    color: hotpink; background-color: #3d5b99;
	 padding: 14px 40px;
    text-align: center; 
    text-decoration: none;
    display: inline-block; 
    margin:0px; margin-left:200px;
	
}
.vertical-menu a:hover{
	background-image:url(y.jpg)
	
}
	</style>
</head>
<body>
	<div class="nav"><h1>VENDX</h1> </div>
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
					<strong style="color: white;"><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: white;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
<div class="vertical-menu">
	<a href="home.php"style="color: white;display:block;height:100%;width:50%">VENDING MACHINE 1</a><br/>
</div>
<div class="vertical-menu">
	<a href="home2.php"style="color: white;display:block;height:100%;width:50%">VENDING MACHINE 2</a><br/>
</div>
<div class="vertical-menu">
	<a href="home3.php"style="color: white;display:block;height:100%;width:50%">VENDING MACHINE 3</a><br/>
</div>
<div class="vertical-menu">
	<a href="home4.php"style="color: white;display:block;height:100%;width:50%">VENDING MACHINE 4</a><br/>
</div>
</body>
</html>