<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VENDX</title>
	<link rel="stylesheet" href="style1.css">
	<style type="text/css">
	@media screen and (max-width:640px) {
  .fb-header-base, .fb-header  {
    width:100%;
	height:250px;/* The width is 100%, when the viewport is 800px or smaller */
  }

  #form1{ width:180px; top:100px;left:50px;}
  #form2{width:250px; top:170px;left:50px;}
  .submit1{ left:230px; top:185px;}
  #img2{ left:0px;top:260px;}
  #mailbox{ width:208px;left:300px;}
  .fb-body{ left:0px;}
  #form3{ top:260px;left:350px;color:white;}
  #nav  
{	
	width:1400px;
	
}
}
}
	</style>
</head>
<body>
<form method="post" action="login.php">
	<?php echo display_error(); ?>
	<div class = "fb-header-base" id= "nav"></div>
		<div class = "fb-header" id= "nav">
			<div id="form1" class="fb-header">
				<label>Username</label><br>
				<input type="text" name="username"><br>
			</div>
			<div id="form2" class="fb-header">
				<label>Password</label><br>
				<input type="password" name="password"><br>
			</div>
			<div  class="submit1">
				<button type="submit" name="login_btn">Login</button>
			</div>
			<div id="img1" class="fb-header">
			<h2>VENDX</h2>
		</div>

</form>	
<form method="post" action="login.php">	
	<div class="fb-body">
		<div class="fb-body" id="img2">
		<img src="x.jpg"/>
		</div>
		<div class="fb-body" id="form3">
			<label>Username</label><br/>
			<input type="text" name="username" id ="mailbox" value="<?php echo $username; ?>"><br/>
			<label>Email</label><br/>
			<input type="email" name="email" id ="mailbox" value="<?php echo $email; ?>"><br/>
			<label>Password</label><br/>
			<input type="password" name="password_1" id ="mailbox" ><br/>
			<label>Confirm Password</label><br/>
			<input type="password" name="password_2" id ="mailbox" ><br/><br/>
			<button type="submit" class="btn" name="register_btn">Register</button>
		</div>
	</div>
</form>
</body>
</html>