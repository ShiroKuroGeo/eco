$('#btnPostListing').click(function(){
    doAddProduct();
});

var doAddProduct =()=>{
  var photo = $('#fileToUpload').val();
  var photoName = photo.replace(/^.*[\\\/]/, '');
  $.ajax({
    type: "POST",
    url: "../source/router.php",
    data: {choice:'doInsertListing',title:$('#name').val(), price:$('#price').val(), Qt:$('#Quantity').val(), categories:$('#category').val(), description:$('#text').val(), image:photoName},
    success: function(data){
      alert("Sad layp");//Ilisdig sweet alert
    },
    error: function(xhr, ajaxOptions, thrownError){
      alert(thrownError);
    }
  });  
}

