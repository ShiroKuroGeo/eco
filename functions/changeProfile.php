<?php
    function changeProfile(){
        $target_dir = "../ecopost/image/";
        $picture = $target_dir . basename($_FILES["Profilephoto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($picture,PATHINFO_EXTENSION));

        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["Profilephoto"]["tmp_name"]);

            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            
        } else {
            if (move_uploaded_file($_FILES["Profilephoto"]["tmp_name"], $picture)) {
            echo "<script>window.location = 'http://localhost/eco/ecopost/timeline.php'</script>";
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    changeProfile();
?>