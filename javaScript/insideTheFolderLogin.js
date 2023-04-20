$(document).ready(function(){
    let tmp = localStorage.getItem('isloggedin');
    if (tmp == "200") {
        window.location.href = "../dashboard.php";
    }
});

//Inside the folder

$('#btnLoginInside').click(function(){
    checkInside();
});

var checkInside =()=>{
    if($('#email').val() != "" && $('#password').val() != ""){
        doRequestInLogin();
    }else{
        alert("Fill up empty Fields!");
    }
}


var doRequestInLogin =()=>{
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice:'login',Email:$('#email').val(),Password:$('#password').val()},
            success: function(data){
                if (data == "200"){
                    localStorage.setItem('isloggedin','200');
                        $.ajax({
                            type: "POST",
                            url: "../source/router.php",
                            data: {choice: 'doGetInfoUser'},
                            success: function(data){
                                var json = JSON.parse(data);
                                var str = "";
                                json.forEach(element => {
                                    if(element.status == 1){
                                        if(element.role == "admin"){
                                            str = "./admin/index.php";
                                        }else if(element.role == "user"){
                                            str = "../ecopost/index.php";
                                        } 
                                    }else{
                                       /*  alert("Your account is already lock!"); */
                                       swal("Your account is already lock!", "", "error");
                                       
                                       $.ajax({
                                            type: "POST",
                                            url: "./source/router.php",
                                            data: {choice:'logout'},
                                            success: function(data){
                                                if (data == "success") {
                                                    localStorage.setItem('isloggedin','404');
                                                    window.location.href = "./";
                                                }else{
                                                    swal("Something is wrong!", "Try Again!", "error");
                                                    location.reload();
                                                }
                                            }, 
                                            error: function (xhr, ajaxOptions, thrownError) {
                                                alert(thrownError);
                                            }
                                        });
                                    }
                            });
                                window.location.href = str;
                            }
                        });
                }else{
                    /* confirm("Something is wrong!"); */
                    swal("Something is wrong!", "Try Again!", "error");                }
            },
            error: function (xhr,ajaxOptions,thrownError){
                alert(thrownError)
            }
        });
}