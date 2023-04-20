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
	<title>table cart</title>
<!--     <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
 -->	<link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/checkout.css">
     <link rel="stylesheet" href="css/color.css">
	 <link rel="stylesheet" href="css/style.css">
	
</head>

<div class="modal fade" id="addCheckOut" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Please fill up the form</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="addthisItemToCart">
                    
                </div>
            </div>
            </div>
        </div>
</div>
    
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> Ecoshop </a>

    <nav class="navbar">
        <a href="dashboard.php">home</a>
        <a href="#products">products</a>
        <a href="./ecopost/newsfeed.php">Ecopost</a>
        <a href="./dashboard/index.php">My dashboard</a>

    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"><sup id="cartNumber"></sup></div>
        <div class="fas fa-user" id="login-btn"class="profilePic"></div>
    </div>

    <form action="search.php" class="search-form" method="get">
        <input type="search" id="search-box"name="searchProduct" id="searchProduct" placeholder="search here...">
        <label for="search-box"  name="search_now" id="btnSearch" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart"><sup id="cartNumber"></sup>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/handmade.jpg" alt="">
            <div class="content">
                <h3>handmade</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/bag.webp" alt="">
            <div class="content">
                <h3>bag</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/shampoo.jpeg" alt="">
            <div class="content">
                <h3>Shampoo</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : $19.69/- </div>
        <a href="shopcart.php" class="btn">checkout</a>
    </div>

</div>

</header>

<!-- header section ends -->
<body>
	<section>
    	<div class="gap100 ">
    		<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="cart-sec">
							<table class="table table-responsive">
								<thead>
									<tr>
										<th>Product name</th>
										<th>price</th>
										<th>quantity</th>
										<th>total price</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody id="tblCart">
									<!-- table indecate -->
								</tbody>
								<!-- 	<td>
										<a href="#" title="" class="delete-cart"><i class="ti-close"></i></a>
										<div class="cart-avatar">
											
											<img src="images/resources/cart-2.jpg" alt="">
										</div>
										<div class="cart-meta">
											<span>Black Shoes for men</span>
										</div>
									</td>
									<td>
										<span class="cart-prices"> 
											<del>
												<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>125</span>
											</del> 
											<ins>
												<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>60</span>
											</ins> 
										</span>
									</td>
									<td>
										<div class="cart-list-quantity">
											<div class="c-input-number">
												<span>
													<input id="box1" type="text" class="manual-adjust" value="0"/>
												</span>
											</div>
										</div>
									</td>
									<td>
										<span class="total-price">$60</span>
									</td> -->
								
							</table>
						</div>
					</div>
					<div class="col-lg-6" >
					<div class="amount-area" id="tblCart">
						
					</div>
					
					</div>
				</div>	
    		</div>
    	</div>
	</div>
</div>


    </section><!-- CART SECTION -->
	
		
	
	<?php
include("./includes/footer.php");
?>
	 <script src="javaScript/jquery.js"></script>
    <script src="javaScript/cartTable.js"></script>
    <script src="javaScript/userInformation.js"></script>
    <script src="javaScript/UserLogout.js"></script>
	<script src="js/main.min.js"></script>
	<script src="js/userincr.js"></script>
	<script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>	


</html>