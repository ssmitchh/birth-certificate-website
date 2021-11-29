<?php // hugh helped me make this work - we got the code from a website (may not work on windows?? but works on mac - i can demo if need be)


$target_file = str_replace(' ', '-', $_FILES["image"]["name"]);

$uploadOk = 1;
$imageFileType =  strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }


// Check file size
if ($_FILES["image"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], __DIR__. $target_file)) {
    echo '{"path":"'.'./birthcertwebsite'.$target_file.'"}';
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>