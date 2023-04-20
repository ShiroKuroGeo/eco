<?php
include("./includes/header.php");
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Checkout</title>
<!--     <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
 -->    
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/style.css">


<!--     <link rel="stylesheet" href="css/responsive.css">
 -->
</head>
<body>
	
<!-- header section starts  -->

<header class="header">

    <a href="dashboard.php" class="logo"> <i class="fas fa-shopping-basket"></i> Ecoshop </a>

    <nav class="navbar">
        <a href="dashboad.php">home</a>
        <a href="#features">features</a>        
        <a href="#categories">categories</a>
        <a href="#products">products</a>
        <a href="#blogs">blogs</a>
        <a href="./dashboard/index.php">My dashboard</a>

    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>


</header>

<!-- header section ends -->

	<section>
		<div class="gap100">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-sm-12">
						<div class="checkout-meta">
							<h4>Please fill up billing Details</h4>
							<form method="post" class="c-form">
								<div class="row">
									<div class="col-lg-12 col-sm-12">
										<input type="text" placeholder="Complete Name" required="">
									</div>
									<div class="col-lg-6 col-sm-12">
										<input type="text" placeholder="Email Address" required="">
									</div>
									<div class="col-lg-6 col-sm-12">
										<input type="text" placeholder="Phone" required="">
									</div>
									<div class="col-lg-12 col-sm-12">
										<input type="text" placeholder="Company Name" required="">
									</div>
									<div class="col-lg-12 col-sm-12">
										<input type="text" placeholder="Country" required="">
									</div>
									<div class="col-lg-12 col-sm-12">
										<input type="text" placeholder="Address1" required="">
									</div>
									<div class="col-lg-12 col-sm-12">
										<input type="text" placeholder="Address2" required="">
									</div>
									<div class="col-lg-12 col-sm-12">
										<input type="text" placeholder="Town / City" required="">
									</div>
									<div class="col-lg-6 col-sm-12">
										<input type="text" placeholder="State" required="">
									</div>
									<div class="col-lg-6 col-sm-12">
										<input type="text" placeholder="Postcode / ZIP" required="">
									</div>
									<div class="col-lg-12 col-sm-12">
										<div class="additional">
											<h4>Additional Information</h4>
											<form class="c-form" method="post">
												<textarea placeholder="Order Note" rows="12"></textarea>
											</form>
										</div>
									</div>
									<div class="col-lg-12 col-sm-12">
										<input type="checkbox" required="">
										<label>I Accept The <a title="" href="#"> Privacy Policy</a> and <a title="" href="#"> Terms of Service </a></label>
									</div>
								</div>
							</form>
						</div>	
					</div>
					<div class="col-lg-5 col-sm-12">
						<div class="checkout-total">
							<h4>Order Totals</h4>
							<div class="total-box">
								<ul>
									<li>Cart Subtotal <span>$70</span></li>
									<li>Shipping & Handling <span>$20</span></li>
									<li>Coupon / Discount <span>-$10</span></li>
									<li class="final-total">Order Total <span>$100</span></li>
								</ul>
							</div>
						</div>
						<div class="payment-method">
							<div class="payment-method">
								<div class="form-radio">
								  <div class="radio">
									<label>
									  <input type="radio" name="radio" checked="checked"><i class="check-box"></i>
										Direct Bank Transfer
									</label>
									  <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor incididunt ut la etere dolore magna aliqua.</p>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="radio"><i class="check-box"></i>
										Cheque Payment
									</label>
								  </div>
									<div class="radio">
									<label>
									  <input type="radio" name="radio"><i class="check-box"></i>
										Paypal
									</label>
								  </div>
								</div>
							</div>
						</div>
							<button class="submit-checkout" type="submit">Place Order</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php

include("./includes/footer.php");
?>
	
	
	<script src="js/main.min.js"></script>
	<script src="js/script.js"></script>

</body>	


</html>