
$('#btnRegister').click(function(){
    check();
});

var check=()=>{

    if($('#Firstname').val() != "" && $('#Lastname').val() != "" && $('#Email').val() != "" && $('#Username').val() != "" && $('#Address').val() != "" && $('#phone').val() != "" && $('#Password').val() != "" && $('#retypePassword').val() != ""){
        if($('#Password').val() == $('#retypePassword').val()){
            doRequest();
        }else{
           /*  alert("The password does not match"); */
           swal("The password does not match!", "Try Again!", "error");
        }
    }else{
        alert("Suwati ");
    }
}

var doRequest =()=>{
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice:'register',Firsname:$('#Firstname').val(),Lastname:$('#Lastname').val(),Username:$('#Username').val(),Address:$('#Address').val(),Phone:$('#phone').val(),Email:$('#Email').val(),Password:$('#Password').val()},
            success: function(data){
                if (data == "success"){
                    swal("Your Are Successfully Register", "Nice One", "success");
                    window.location.href = "./";
                }else{
                    /* alert("Unsuccess"); */
                    swal("Something is wrong!", "Try Again!", "error");
                }
            },
            error: function (xhr,ajaxOptions,thrownError){
                alert(data);
            }
        }); 
}