<?php
include("includes/header.php");
?>
<body>
    
<body style="overflow-x: hidden;">
    <div class="modal fade" id="addtocart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-1" id="exampleModalLabel">Add this Product</h5>
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
        <a href="#getCategory">categories</a>
        <a href="#products">products</a>
        <a href="./ecopost/index.php">Ecopost</a>
        <a href="./dashboard/index.php">My dashboard</a>

    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <a href="./shopcart.php"><div class="fas fa-shopping-cart" id="cart-btn"><sup id="cartNumber"></sup></div></a>
        <div class="" id="btnLogout" class="profilePic"><svg xmlns="http://www.w3.org/200/svg" viewBox="-250 -230 920 1000"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"/></svg></div>
    </div>

    <form action="search.php" class="search-form" method="get">
        <input type="search" id="searchProduct" name="searchProduct" placeholder="search here...">
        <label for="search-box" id="search_now" name="search_now" id="btnSearch" class="fas fa-search"></label>
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

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> Eco <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/handma.jpg" alt="">
            <h3> Handmade</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/feature-img-2.png" alt="">
            <h3>free delivery</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/feature-img-3.png" alt="">
            <h3>easy payments</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- features section ends -->



<!-- categories section starts  -->

<section class="categories" id="getCategory">
    <h1 class="heading"> Eco <span>categories</span> </h1>
 
</section>

<!-- categories section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> Eco <span>products</span> </h1>

    <div class="swiper product-slider">

          <div class="swiper-wrapper" id="getProducts">

</div>

</div>
</section>

<!-- products section ends -->

<!-- blogs section starts  -->

<!-- <section class="blogs" id="blogs">

    <h1 class="heading">Eco <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/planting.jpeg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>fresh and organic vegitables and fruits</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/rec.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>fresh and organic vegitables and fruits</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/hbag.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>fresh and organic vegitables and fruits</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>
 -->
<!-- blogs section ends -->


<!-- review section starts  -->

<!-- <section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/ian.jpg" alt="">
                <h3>Rovern</h3>                
                <p>I love Eco</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/prof.jpg" alt="">
                <h3>Wylene</h3>                
                <p>I love Eco</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/andros.jpg" alt="">
                <h3>Andros</h3>
                 <p>I love Eco</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>

</section>
 -->
<!-- review section ends -->






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