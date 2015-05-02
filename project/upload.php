<!DOCTYPE html>
<html>
<body>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {?><script> 
    alert("Sorry, file already exists.");
</script><?php
    $uploadOk = 0;
}
/*
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {?><script> 
    alert("Sorry, your file is too large.");</script><?php
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {?><script>
    alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");</script><?php
    $uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {?><script>
    alert("Sorry, your file was not uploaded.");</script><?php
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {?><script>
        alert("The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.");
window.location.href="viewimages.php"
</script><?php
    } else {?><script>
        alert("Sorry, there was an error uploading your file.");
window.location.href="index.html"
</script><?php
    }

}
?>
</body>
</html>