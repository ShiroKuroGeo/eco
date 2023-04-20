<?php

function uploadPost(){
    $target_dir = "../ecopost/image/";
    $picture = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($picture,PATHINFO_EXTENSION));
    if(isset($_POST["submit"])) {
        
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $picture)) {
            echo "<script>window.location = 'http://localhost/eco/ecopost/index.php'</script>";
        } else {
            echo "<script>window.location = 'http://localhost/eco/ecopost/index.php'</script>";
        }
        
    }
    
}
uploadPost();

?>