
<?php
require_once("config.php");
require("select4.php");
require('razorpay-php/Razorpay.php');
session_start();

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="drinks1.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<style type="text/css">
			.razorpay-payment-button{
				color: #ffffff;
				background-color:#7266ba;
				border-color: #7266ba;
				font-size: 14px;
				padding: 10px

			}
			@media screen and (max-width:640px) {
  #out{margin-left:520px;}
  #p{margin-left:2px; width:15%;}
  
}
body{ background-image: url("y.jpg"); height:750px; }			
.nav  
{	
	
	width:100%;
	height:90px;
	background:#3d5b99;position:absolute;
	top:0; left:0; color:white; z-index:7; font-family:verdana; -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25); 
}
 


.profile_info div {
	display: inline-block; 
	margin: 0px;margin-top:90px;background:#3d5b99;margin-right: 0px;
    margin-left: 1275px;
}
.profile_info:after {
	content: "";
	display: block;
	clear: both;
}


			

		</style>
</head>
<body>
	<div class="nav"><h1>VENDX</h1> </div>
	

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
					<strong style="color: white;"><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: white;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div

<div class="wrapper" background:#3d5b99>
	<div class="desc">
		<h1>DRINKS AND SNACKS...</h1>
	</div>

	
		<!-- content here -->
		<div class="product-grid product-grid--flexbox">
			<div class="product-grid__wrapper">
				<!-- Product list start here -->

				<!-- Single product -->
				<div class="product-grid__product-wrapper" id="p">
					<div class="product-grid__product">
						<span class="product-grid__title"><?php echo $value1; ?></span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart">
									<i class="fa fa-cart-arrow-down"></i>
									<?php include("pay13.php") ?></span>
							
							</div>
						</div>
					</div>
				</div>
				<!-- end Single product -->
				<div class="product-grid__product-wrapper" id="p">
					<div class="product-grid__product">
						<span class="product-grid__title"><?php echo $value2; ?></span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i><?php include("pay14.php") ?></span>
							
							</div>
						</div>
					</div>
				</div>
				<div class="product-grid__product-wrapper" id="p">
					<div class="product-grid__product">
						<span class="product-grid__title"><?php echo $value3; ?></span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i><?php include("pay15.php") ?></span>
							
							</div>
						</div>
					</div>
				</div>

<!--removed 3 products-->

<div class="product-grid__product-wrapper" id="p">
					<div class="product-grid__product">
						<span class="product-grid__title"><?php echo $value4; ?></span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i><?php include("pay16.php") ?></span>
							
							</div>
						</div>
					</div>
				</div>

<!--removed 2 products-->
			</div>
		</div>	
	
</div>
</body>
</html>
