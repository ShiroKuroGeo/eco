$(document).ready(function(){
    let tmp = localStorage.getItem('isloggedin');
    if (tmp == 404) {
        window.location.href = "../dashboard.php";
    }
    viewCategory();
    viewCartsNumber();
    doEcoProduct();
});

$('#btnSearch').click(function(){
  doSearch();
});

$('#addThisProductToCart').click(function(){
  if(confirm){
    prodcutAddThisToCart();
  }else{
    window.location.href = "../dashboard.php";
  }
});

function prodcutAddThisToCart(){
  $.ajax({
    type: "POST",
    url: "./source/router.php",
    data: {choice:'doAddToCart',product:$('#productIDAddThisCart').val(),user:$('#usernameAddThisCart').val(),image:$('#imageAddThisCart').val(),title:$('#titleAddThisCart').val(),price:$('#priceAddThisCart').val(),qt:$('#quantityAddThisCart').val(),total:$('#totalAddThisCart').val()},
    success: function(data){
      if(data == 200){
        window.location.href = "./shopcart.php";
      }else{
        alert("Something is wrong in adding this product!");
      }
    },
    error: function(xhr, ajaxOptions, thrownError){
      alert(thrownError);
    }
  });
}


var viewCategory =()=>{
  $.ajax({
    type: "POST",
    url: "./source/router.php",
    data: {choice: 'category'},
    success: function(data){
      var json = JSON.parse(data);
      var str = "";
      json.forEach(element => {
          str += `   
          <div class='box-container' id="getCategory">     
              <div class="box">
              <img src='./dashboard/cat_uploads/${element.image}'>    
              <h3>${element.category_title}</h3>
                  <a href="#" class="btn">shop now</a>
              </div>
              </div>`;
      });
      $('#getCategory').append(str);
    },
    error: function(xhr, ajaxOptions, thrownError){
      alert(thrownError);
    }
  });
}


var viewCartsNumber =()=>{
  $.ajax({
    type: "POST",
    url: "./source/router.php",
    data: {choice: 'cartsNumber'},
    success: function(data){
      var json = JSON.parse(data);
      $('#cartNumber').append(json.length);
    },
    error: function(xhr, ajaxOptions, thrownError){
      alert(thrownError);
    }
  });
}

var doEcoProduct =()=>{
  $.ajax({
    type: "POST",
    url: "./source/router.php",
    data: {choice: 'doEcoProduct'},
    success: function(data){
      var json = JSON.parse(data);
      var str = "";
      json.forEach(element => {
        if(element.status == 1){
          str +=`

          <div class="swiper-slide box">
          <img src='./dashboard/product_uploads/${element.image_1}'>   

          <h3> ${element.title}</h3>
                <div class="price">₱${element.price}</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn"onclick="toModal(${element.product_id});" data-bs-toggle="modal" data-bs-target="#addtocart">add to cart</a>
            </div> 
      `;
        }
      });
      $('#getProducts').append(str);
    },
    error: function(xhr, ajaxOptions, thrownError){
      // alert(thrownError);
      alert(data);
    }
  });
}


function toModal(id){
  $.ajax({
    type: "POST",
    url: "./source/router.php",
    data: {choice: 'doClickProduct', Item:id},
    success: function(data){
      var json = JSON.parse(data);
      str = "";
      json.forEach(Element => {
        str = `
          <div class="input-group">
            <img src='./dashboard/product_uploads/${Element.image_1}' width="120" class='card-img-top' alt='${Element.title}'>
          </div>
          <p class="fw-bold fs-1">Product Name: ${Element.title}</p>
          <p class="fw-bold fs-2">Product Price: ${Element.price}</p>
          <div class="input-group">
            <input type="text" id="productIDAddThisCart" class="form-control visually-hidden" value="${Element.product_id}" disabled="disabled">
          </div>
          <div class="input-group mt-2">
            <input type="text" id="usernameAddThisCart" class="form-control visually-hidden" value="" placeholder="Enter Username">
          </div>
          <div class="input-group mt-2">
            <input type="text" id="imageAddThisCart" class="form-control visually-hidden" value="${Element.image_1}" disabled="disabled">
          </div>
          <div class="input-group mt-2">
            <input type="text" id="titleAddThisCart" class="form-control visually-hidden" value="${Element.title}" disabled="disabled">
          </div>
          <div class="input-group mt-2">
            <input type="text" id="priceAddThisCart" class="form-control visually-hidden" value="${Element.price}" disabled="disabled">
          </div>
          <div class="input-group mt-2">
            <input type="text" id="quantityAddThisCart" class="form-control visually-hidden" value="1" placeholder="Quantity value">
          </div>
          <div class="input-group mt-2">
            <input type="text" id="totalAddThisCart" class="form-control visually-hidden" value="${Element.price}" disabled="disabled">
          </div>
        `;
      });
      $('#addthisItemToCart').empty().append(str);
    },
    error: function(xhr, ajaxOptions, thrownError){
      alert(thrownError);
    }
  });
}

var doSearch =()=>{
  $.ajax({
    type: "POST",
    url: "../source/router.php",
    data: {choice: 'doSearch', Item:$('#searchProduct').val()},
    success: function(data){
      var searchItem = $('#searchProduct').val();
      window.location.href += 'search.php?search='+searchItem;
    },
    error: function(xhr, ajaxOptions, thrownError){
      alert(thrownError);
    }
  });
}