
<?php
include "includes/db_con.php";
include "functions/index_function.php";
include("includes/header.php");
?>
<body>
    
<body style="overflow-x: hidden;">
    <div class="modal fade" id="addtocart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add this Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="addthisItemToCart">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="addThisProductToCart" class="btn btn-primary">Yes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            </div>
            </div>
        </div>
    </div>


    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> Ecoshop </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>        
        <a href="#categories">categories</a>
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
        <label for="search-box"  name="search_now" id="btnSearch"class="fas fa-search"></label>
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

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Create your own <span>HANDMADE</span> products</h3>
        <p>and show the world how  beautiful Eco-friendly thing is... </p>
<!--         <a href="./login/signup.php" class="btn">shop now</a>
 -->    </div>

</section>

<!-- home section ends -->





<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> search<span>result...</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">
        <?php
            getsearch();
            getcategory_name();  
        ?>
</div>

</div>
</section>

<!-- products section ends -->










<?php
include("includes/footer.php");
?>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="javaScript/script.js"></script>
  <script src="javaScript/jquery.js"></script>  
    <script src="javaScript/dashboard.js"></script>
    <script src="javaScript/userInformation.js"></script>
    <script src="javaScript/UserLogout.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>