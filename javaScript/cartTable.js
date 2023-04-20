$(document).ready(function(){
    let tmp = localStorage.getItem('isloggedin');
    if (tmp == 404) {
        window.location.href = "./dashboard.php";
    }
    viewCarts();
    viewCartsNumber();
    doGetInfoUser();
    addCheckBox();
});

function addCheckBox(){
    $('#checkPrice').on('click', function() {
        var selectedCheckboxes = $('input[type="checkbox"]:checked');
        var selectedValues = []; 
        var totalSum = 0;

        selectedCheckboxes.each(function() {
            var value = parseInt($(this).val());
            selectedValues.push(value);
            totalSum += value;
        });
        $('#totalSum').empty().append("P "+totalSum);
    });
}

$('#checkOutItem').click(function(){
    $('#checkOutItem').on('click', function() {
        var selectedCheckboxes = $('input[type="checkbox"]:checked'); 
        var selectedValues = [];

        selectedCheckboxes.each(function() {
            selectedValues.push($(this).val());
        });

        $('#addthisItemToCart').empty().append(selectedValues);
    });
});

var doGetInfoUser =() =>{
    $.ajax({
      type: "POST",
      url: "./source/router.php",
      data: {choice: 'doGetInfoUser'},
      success: function(data){
        var json = JSON.parse(data);
        var str = "";
        var changeProfile = "";
        json.forEach(element => {
            str = element.email;
            changeProfile = `<img src="images/${element.image}" class="card-img-top" width="100" alt="..." onclick="toggleMenu()">`;
        });
        $('#nameOfUser').append(str);
        $('.profiles').append(changeProfile);
      },
      error: function(xhr, ajaxOptions, thrownError){
        alert(thrownError);
      }
    });
  }
  
  
var viewCarts =()=>{
    $.ajax({
    type: "POST",
    url: "./source/router.php",
    data: {choice: 'doGetCart'},
    success: function(data){
        var json = JSON.parse(data);
        var str = "";
        var count = 1;
        json.forEach(element => {
            str += 
            `
            <tr>
                <td>
                <span><input type="checkbox"class="checkboxValue" id="${element.id}" value="${element.price}"></span>  <img src="./dashboard/product_uploads/${element.image}"class="image"width="150"alt=""> <span>${element.title}</span>
                </td>
                <td>
                    <span class="cart-prices">
                        <ins>₱${element.price}</ins> 
                    </span>
                </td>
                <td>
                    <div class="cart-list-quantity">
                        <div class="c-input-number">
                            <span>
                                <input id="updateNumber" type="text" class="manual-adjust" value="${element.Qt}"/>
                            </span>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="total-price">₱${element.price * element.Qt}</span>
                </td>
                <td>
                    <a href="#" title="" class="update-cart" onclick="updateFunction(${element.id})">Update Cart | </a>
                    <a href="#" title="" class="update-cart" onclick="deleteFunction(${element.id})">Delete Item | </a>
                    <a href="#" title="" class="update-cart" onclick="toModal(${element.product_id});" data-bs-toggle="modal" data-bs-target="#addCheckOut">Proceed to Checkout</a>
                </td>
            </tr>
            `;
            count++;
        });
        $('#tblCart').append(str);
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
  
var updateFunction =(id)=>{
    if(confirm("Are you sure you want to update this item")){
        $.ajax({
            type: "POST",
            url: "./source/router.php",
            data: {choice: 'doUpdateCartQuery', Quantity:$('#updateNumber').val(), ID:id},
            success: function(data){
                if(data == 200){
                    window.location.href = "./shopcart.php";
                }else{
                    // alert("Updated Failed!");
                    alert(data);
                }
            },
            error: function(xhr, ajaxOptions, thrownError){
              alert(thrownError);
            }
        });
    }else{
        window.location.href = "shopcart.php";
    }
}

var deleteFunction =(id)=>{
    if(confirm("Are you sure you want to delete this item")){
        $.ajax({
            type: "POST",
            url: "./source/router.php",
            data: {choice: 'doDeleteCartQuery', ID:id},
            success: function(data){
                if(data == 200){
                    window.location.href = "./shopcart.php";
                }else{
                    alert("Deleted Failed!");
                }
            },
            error: function(xhr, ajaxOptions, thrownError){
                alert(thrownError);
            }
        });
    }
}

var deleteAfterAddInOrder =(id)=>{
    $.ajax({
        type: "POST",
        url: "./source/router.php",
        data: {choice: 'doDeleteCartQuery', ID:id},
        success: function(data){
            location.reload();
        },
        error: function(xhr, ajaxOptions, thrownError){
            alert(thrownError);
        }
    });
}

function onAddToOrder(title, total, qt){
    $.ajax({
      type: "POST",
      url: "./source/router.php",
      data: {choice:'doInsertOrder',title:title, total_price:total, Qt:qt, address:$('#addressOrder').val(), P_method:$('#paymentOrder').val(),status:1},
      success: function(data){

      },
      error: function(xhr, ajaxOptions, thrownError){
        alert(thrownError);
      }
    });
}

function viewMyOrder(p, t, pr, total, quan, img){
    $.ajax({
        type: "POST",
        url: "./source/router.php",
        data: {choice:'doinsertManageOrder',productUser_Id:p, title:t, price:pr, total_price:total, Qt:quan, image:img, p_method:$('#paymentOrder').val()},
        success: function(data){
          alert(data);
        },
        error: function(xhr, ajaxOptions, thrownError){
          alert(thrownError);
        }
    });  
}

function toModal(id){
    $.ajax({
        type: "POST",
        url: "./source/router.php",
        data: {choice: 'doCartTableToOrder', Item:id},
        success: function(data){
        var json = JSON.parse(data);
        str = "";
        json.forEach(element => {
            str = `
                <div class="row  d-flex justify-content-center">
                    <div class="col-10">
                        <label class="label"for="">Address</label>
                        <div class="input-group-sm">
                                <input type="text" class="form-control" name="addressOrder" id="addressOrder"placeholder="Please provide your Complete Address" required>
                        </div>
                        </div>

                        <div class="col-20">
                        <label class="pay"for=""> Payment method</label>
                        <div class="input-group-sm">                       
                            <select name="paymentOrder" id="paymentOrder" onclick="checkValuePicked()" placeholder=""required>
                                <option value="COD">Please choose your payment</option>
                                <option value="COD" id="cod">Cash On Delivery</option>
                                <option value="gcash" id="gcash">Gcash</option>
                            </select>
                        </div>
                        </div>
                        <div class="order">
                            <button type="button" class="orders" id="sadsadsad" onclick="onAddToOrder('${element.title}', '${element.total_price}', '${element.Qt}'); deleteAfterAddInOrder(${element.id}); viewMyOrder('${element.user_id}', '${element.title}', '${element.price}', '${element.total_price}', '${element.Qt}', '${element.image}'); ">Place Order</button>
                        </div>
                    
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