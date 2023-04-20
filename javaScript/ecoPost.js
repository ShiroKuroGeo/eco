$(document).ready(function(){
    let tmp = localStorage.getItem('isloggedin');
    if (tmp == "success") {
        window.location.href = "../dashboard.php";
    }
    getEcoPost();
    doGetEcoPostNewFeed();

});

$('#btnPost').click(function(){
    doInsertEcoPost();
});

$('#btnChangeProfile').click(function(){
    doChangeProfile();
});

$('#btnSaveLink').click(function(){
    doGetMessageLink();
});

var doInsertEcoPost =()=>{
    var photo = $('#photo').val();
    var photoName = photo.replace(/^.*[\\\/]/, '');
    var videos = $('#videos').val();
    var videosName = videos.replace(/^.*[\\\/]/, '');
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice: 'doInsertEcoPost', Description:$('#description').val(), photo:photoName, video:videosName, status:1},
        success: function(data){
            
        },
        error: function(xhr, ajaxOptions, thrownError){
          alert(thrownError);
        }
    });
}

var getEcoPost =()=>{
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice: 'doGetDataEcoPost'},
        success: function(data){
          var json = JSON.parse(data);
          var str = "";
          json.forEach(element => { 
            if(element.status == 1){
                str += ` <div class="user-post" >
									
                <div class="friend-info">
                    <figure>
                        <img src="./image/${element.image}">
                    </figure>
                    <div class="friend-name">
                        <ins><a href="time-line.html" title="">${element.username}</a></ins>
                        <span>published:${element.d_c} </span>
                    </div>

                    <div class="description">
                            
                            <p>
                            ${element.caption}
                            </p>
                        </div>
                        
                        `
                        if(element.imagePost !=0){
                           str+=   `<div class="post-meta">
                                        <img src="./image/${element.imagePost}"> 
                                    </div>`
                        }
                        `

                        `
                        if(element.video !=0){
                         str+=   `
                            <div class="post-meta">
                            <video src="./image/${element.video} "height="500" width="870" ></video>
                            <div class="we-video-info">
                            
                        </div>
                    </div>
                            `
                        }
                        ``;
            }
          });
          $('#mgaPostTime').append(str);
        },
        error: function(xhr, ajaxOptions, thrownError){
          alert(thrownError);
        }
    });
}

var doGetEcoPostNewFeed =()=>{
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice: 'doGetEcoPostNewFeed'},
        success: function(data){
          var json = JSON.parse(data);
          var str = "";
          json.forEach(element => {
            if(element.status == 1){
                str += ` <div class="user-post" >
									
                <div class="friend-info">
                    <figure>
                    <img src="./image/${element.image}">
                    </figure>
                    <div class="friend-name">
                        <ins><a href="time-line.html" title=""> ${element.username}</a></ins>
                        <span>published:${element.d_c} </span>
                    </div>

                    <div class="description">
                            
                            <p>
                            ${element.caption}                        
                            </p>
                        </div>
                        
                        `
                        if(element.imagePost !=0){
                           str+=   `<div class="post-meta">
                        <img src="./image/${element.imagePost}"> 
                    </div>`
                        }
                        `

                        `
                        if(element.video !=0){
                         str+=   `
                            <div class="post-meta">
                            <video src="../images/${element.video} "height="500" width="870" ></video>
                            <div class="we-video-info">
                            
                        </div>
                    </div>
                            `
                        }
                        ``;
            }
          });
          $('#mgaPost').append(str);
        },
        error: function(xhr, ajaxOptions, thrownError){
            alert(thrownError);
        }
    });
}

var doGetMessageLink =()=>{
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice: 'doGetMessageLink', linkMessage:$('#updateLinkMessage').val()},
        success: function(data){
            // window.location.href = "timeline.html";
            location.reload()
        },
        error: function(xhr, ajaxOptions, thrownError){
          alert(thrownError);
        }
    });
}

var doChangeProfile =()=>{
    
    var photo = $('#Profilephoto').val();
    var photoName = photo.replace(/^.*[\\\/]/, '');
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice: 'doChangeProfile', photo:photoName},
        success: function(data){
            
        },
        error: function(xhr, ajaxOptions, thrownError){
          alert(thrownError);
        }
    });
}

function commentOnThisPost(id){
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice: 'doAddCommentToAPost', ID:id, comment:$('#commentTextArea').val()},
        success: function(data){
            location.reload();
        },
        error: function(xhr, ajaxOptions, thrownError){
          alert(thrownError);
        }
    });
}
