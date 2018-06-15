<?php
require_once("config.php");
require("select.php");
require('razorpay-php/Razorpay.php');
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="drinks1.css">
<meta name="viewport" content="width=device-width">
		<style type="text/css">
			.razorpay-payment-button{
				color: #ffffff;
				background-color:#7266ba;
				border-color: #7266ba;
				font-size: 14px;
				padding: 10px

			}
		</style>
</head>
<body>
<header>
	<div class="nav">  
	  <img src="33.jpg" class="logo">
	  <ul class="menu">
	  <li><a href="index.php">HOME</a></li>
		<li><a href="cart.php"class="btn btn2">ADMIN</a></li>
	 
	  </ul>
	</div>
</header>


<div class="wrapper">
	<div class="desc">
		<h1>DRINKS AND SNACKS...</h1>
	</div>

	<div class="content">
		<!-- content here -->
		<div class="product-grid product-grid--flexbox">
			<div class="product-grid__wrapper">
				<!-- Product list start here -->

				<!-- Single product -->
				<div class="product-grid__product-wrapper">
					<div class="product-grid__product">
						<span class="product-grid__title"><?php echo $value1; ?></span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart">
									<i class="fa fa-cart-arrow-down"></i>
									<?php include("pay1.php") ?></span>
							
							</div>
						</div>
					</div>
				</div>
				<!-- end Single product -->
				<div class="product-grid__product-wrapper">
					<div class="product-grid__product">
						<span class="product-grid__title"><?php echo $value2; ?></span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i><?php include("pay2.php") ?></span>
							
							</div>
						</div>
					</div>
				</div>
				<div class="product-grid__product-wrapper">
					<div class="product-grid__product">
						<span class="product-grid__title"><?php echo $value3; ?></span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i><?php include("pay3.php") ?></span>
							
							</div>
						</div>
					</div>
				</div>

<!--removed 3 products-->

<div class="product-grid__product-wrapper">
					<div class="product-grid__product">
						<span class="product-grid__title"><?php echo $value4; ?></span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i><?php include("pay4.php") ?></span>
							
							</div>
						</div>
					</div>
				</div>

<!--removed 2 products-->

			</div>		
		</div>
	</div>
</div>
</body>
</html>