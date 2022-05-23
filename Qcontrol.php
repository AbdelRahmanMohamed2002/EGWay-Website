<?php
// $target_dir = "photos/";
// $target_file = $target_dir . basename($_FILES["NationalIdbirthcertificate"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["NationalIdbirthcertificate"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size
// // if ($_FILES["fileToUpload"]["size"] > 500000) {
// //   echo "Sorry, your file is too large.";
// //   $uploadOk = 0;
// // }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.  ";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["NationalIdbirthcertificate"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["NationalIdbirthcertificate"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }
?>
<?php
// $target_dir = "photos/";
// $target_file = $target_dir . basename($_FILES["picture"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["picture"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size
// // if ($_FILES["fileToUpload"]["size"] > 500000) {
// //   echo "Sorry, your file is too large.";
// //   $uploadOk = 0;
// // }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.  ";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["picture"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
//}
?>
<?php
$msg = "";
// If upload button is clicked ...
$uploadok1=1;
$uploadok2=1;
if (isset($_POST['submit'])) {
	$filename1 = $_FILES["NationalIdbirthcertificate"]["name"];
	$tempname1 = $_FILES["NationalIdbirthcertificate"]["tmp_name"];	
		$folder1 = "image/".$filename1;
    $filename2 = $_FILES["picture"]["name"];
    $tempname2 = $_FILES["picture"]["tmp_name"];	
      $folder2 = "image/".$filename2;
      if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["NationalIdbirthcertificate"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk1 = 1;
        } else {
          echo "File is not an image.";
          $uploadOk1 = 0;
        }
      }
      if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["picture"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk2 = 1;
        } else {
          echo "File is not an image.";
          $uploadOk2 = 0;
        }
      }
      $imageFileType1 = strtolower(pathinfo($folder1,PATHINFO_EXTENSION));
      $imageFileType2 = strtolower(pathinfo($folder2,PATHINFO_EXTENSION));
      if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" ) {
  echo "Sorry, only JPG, JPEG and PNG files are allowed.";
  $uploadOk1=0;
}
if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" ) {
  echo "Sorry, only JPG, JPEG and PNG files are allowed.";
  $uploadOk2=0;
}
if($uploadok1===0 &&$uploadok2===0)
echo "sorry the 2 pictures  were not uploaded";
else
{
	$db = mysqli_connect("localhost", "root", "", "photos");

		// Get all the submitted data from the form
		$sql = "INSERT INTO image (filename) VALUES ('$filename')";

		// Execute query
		mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname1, $folder1)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}
  if (move_uploaded_file($tempname2, $folder3)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
}
}
}
$result = mysqli_query($db, "SELECT * FROM image");
?>