$(document).ready(function(){
    let tmp = localStorage.getItem('isloggedin');
    if (tmp == 404) {
        window.location.href = "../dashboard.php";
    }
    doGetUserInformationEcoPost();
    doGetUserInformationEcoShop();
});

var doGetUserInformationEcoShop =() =>{
    $.ajax({
      type: "POST",
      url: "./source/router.php",
      data: {choice: 'doGetInfoUser'},
      success: function(data){
        var json = JSON.parse(data);
        var str = "";
        var changeProfile = "";
        json.forEach(element => {
            str = element.username;
            changeProfile = `<img src="./images/${element.image}" height="50px" onclick="toggleMenu()"></a>`;
        });
        $('#nameOfUserES').append(str);
        $('#userProduct').append(str);
        $('.profilePic').append(changeProfile);
      }
    });
  }

var doGetUserInformationEcoPost =() =>{
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice: 'doGetInfoUser'},
        success: function(data){
        var json = JSON.parse(data);
        var emailOfUser = "";
        var linkMessageOfUser = "";
        var changeProfile = "";
        json.forEach(element => {
            emailOfUser = element.username;
            linkMessageOfUser = `Message me in this link :<br> <a href="${element.messageLink}" id="textwrap" class="text-primary">${element.messageLink} </a>`;
            changeProfile = `<img src="./image/${element.image}" class="card-img-top" alt="...">`;
        });
        $('.nameOfUser').append(emailOfUser);
        $('.profName').append(emailOfUser);
        $('#messageLink').append(linkMessageOfUser);
        $('#appendChangeProfile').append(changeProfile);
        $('.changeProfile').append(changeProfile);
        }
    });
}
  