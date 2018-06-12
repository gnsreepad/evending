<?php
require_once("config.php");
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
						<span class="product-grid__title">FANTA</span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart">
									<i class="fa fa-cart-arrow-down"></i>
									<form action="/purchase" method="POST">
	<!-- Note that the amount is in paise = 50 INR -->
					<script
					    src="https://checkout.razorpay.com/v1/checkout.js"
					    data-key="<?php echo $razor_api_key; ?>"
					    data-amount="5000"
					    data-buttontext="Pay with Razorpay"
					    data-name="Merchant Name"
					    data-description="Purchase Description"
					    data-image="https://your-awesome-site.com/your_logo.jpg"
					    data-prefill.name="Harshil Mathur"
					    data-prefill.email="support@razorpay.com"
					    data-theme.color="#F37254"
					></script>
					<input type="hidden" value="Hidden Element" name="hidden"></span>
			</form>
							
							</div>
						</div>
					</div>
				</div>
				<!-- end Single product -->
				<div class="product-grid__product-wrapper">
					<div class="product-grid__product">
						<span class="product-grid__title">SPRITE</span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i><form action="/purchase" method="POST">
	<!-- Note that the amount is in paise = 50 INR -->
					<script
					    src="https://checkout.razorpay.com/v1/checkout.js"
					    data-key="<?php echo $razor_api_key; ?>"
					    data-amount="5000"
					    data-buttontext="Pay with Razorpay"
					    data-name="Merchant Name"
					    data-description="Purchase Description"
					    data-image="https://your-awesome-site.com/your_logo.jpg"
					    data-prefill.name="Harshil Mathur"
					    data-prefill.email="support@razorpay.com"
					    data-theme.color="#F37254"
					></script>
					<input type="hidden" value="Hidden Element" name="hidden"></span>
			</form>
							
							</div>
						</div>
					</div>
				</div>
				<div class="product-grid__product-wrapper">
					<div class="product-grid__product">
						<span class="product-grid__title">7UP</span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i><form action="/purchase" method="POST">
	<!-- Note that the amount is in paise = 50 INR -->
					<script
					    src="https://checkout.razorpay.com/v1/checkout.js"
					    data-key="<?php echo $razor_api_key; ?>"
					    data-amount="5000"
					    data-buttontext="Pay with Razorpay"
					    data-name="Merchant Name"
					    data-description="Purchase Description"
					    data-image="https://your-awesome-site.com/your_logo.jpg"
					    data-prefill.name="Harshil Mathur"
					    data-prefill.email="support@razorpay.com"
					    data-theme.color="#F37254"
					></script>
					<input type="hidden" value="Hidden Element" name="hidden"></span>
			</form>
							
							</div>
						</div>
					</div>
				</div>
<div class="product-grid__product-wrapper">
					<div class="product-grid__product">
						<span class="product-grid__title">MOUNTAIN DEW</span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i><form action="/purchase" method="POST">
	<!-- Note that the amount is in paise = 50 INR -->
					<script
					    src="https://checkout.razorpay.com/v1/checkout.js"
					    data-key="<?php echo $razor_api_key; ?>"
					    data-amount="5000"
					    data-buttontext="Pay with Razorpay"
					    data-name="Merchant Name"
					    data-description="Purchase Description"
					    data-image="https://your-awesome-site.com/your_logo.jpg"
					    data-prefill.name="Harshil Mathur"
					    data-prefill.email="support@razorpay.com"
					    data-theme.color="#F37254"
					></script>
					<input type="hidden" value="Hidden Element" name="hidden"></span>
			</form>
							
							</div>
						</div>
					</div>
				</div>
<div class="product-grid__product-wrapper">
					<div class="product-grid__product">
						<span class="product-grid__title">PEPSI</span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i><form action="/purchase" method="POST">
	<!-- Note that the amount is in paise = 50 INR -->
					<script
					    src="https://checkout.razorpay.com/v1/checkout.js"
					    data-key="<?php echo $razor_api_key; ?>"
					    data-amount="5000"
					    data-buttontext="Pay with Razorpay"
					    data-name="Merchant Name"
					    data-description="Purchase Description"
					    data-image="https://your-awesome-site.com/your_logo.jpg"
					    data-prefill.name="Harshil Mathur"
					    data-prefill.email="support@razorpay.com"
					    data-theme.color="#F37254"
					></script>
					<input type="hidden" value="Hidden Element" name="hidden"></span>
			</form>
							
							</div>
						</div>
					</div>
				</div>
<div class="product-grid__product-wrapper">
					<div class="product-grid__product">
						<span class="product-grid__title">KURKURE</span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i><a href="cart.html" style="color:white">BUY</span></a>
							
							</div>
						</div>
					</div>
				</div>
<div class="product-grid__product-wrapper">
					<div class="product-grid__product">
						<span class="product-grid__title">LAYS</span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i><a href="cart.html" style="color:white">BUY</span></a>
							
							</div>
						</div>
					</div>
				</div>
<div class="product-grid__product-wrapper">
					<div class="product-grid__product">
						<span class="product-grid__title">CHEETOS</span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i><a href="cart.html" style="color:white">BUY</span></a>
							
							</div>
						</div>
					</div>
				</div>
<div class="product-grid__product-wrapper">
					<div class="product-grid__product">
						<span class="product-grid__title">POPCORN</span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i><a href="cart.html" style="color:white">BUY</span></a>
							
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>
</body>
</html>