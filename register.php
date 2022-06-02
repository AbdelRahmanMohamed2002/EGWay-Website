<style>
    .container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=number],input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus,input[type=number]:focus,input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
} 
    </style>
<html>
    <title> Register</title>
    <body>
<form action="singin.php" method="post" enctype="multipart/form-data" onsubmit="return confirmPassword()" onsubmit=" return reg()">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>
    <label for="fname"><b>Firstname</b></label>
    <input type="text" placeholder="Enter firstname" name="fname" id="fname" pattern="[A-Za-z]{3,20}" required>
    <label for="lname"><b>lastname</b></label>
    <input type="text" placeholder="Enter lastname" name="lname" id="lname" pattern="[A-Za-z]{3,20}" required>
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <label>  upload  your birth certificate or National Id :</label>
    <input type="file" name="NationalIdbirthcertificate" id="NationalIdbirthcertificate" required>
    <label>  upload  your picture :</label>
    <input type="file" name="picture" id="picture" required>
    <p>By creating an account you agree to our <a href="EGYAIRWAY.php">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn" name="submit" >Register</button>
    
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="signin.php">Sign in</a>.</p>
  </div>
</form>
<script>
  
function reg()
{<?php
  
$target_dir = "photos/";
$target_file1 = $target_dir . basename($_FILES["NationalIdbirthcertificate"]["name"]);
$target_file2 = $target_dir . basename($_FILES["picture"]["name"]);
$uploadOk1 = 1;
$uploadOk2 = 1;
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
 

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check1 = getimagesize($_FILES["NationalIdbirthcertificate"]["tmp_name"]);
  $check2 = getimagesize($_FILES["picture"]["tmp_name"]);
  if($check1 !== false) {
    echo "File is an image - " . $check1["mime"] . ".";
    $uploadO1k = 1;
  } else {
    echo "File is not an image.";
    $uploadOk1 = 0;
  }
  if($check2 !== false) {
    echo "File is an image - " . $check2["mime"] . ".";
    $uploadOk2 = 1;
  } else {
    echo "File is not an image.";
    $uploadOk2 = 0;
  }
}

// Check if file already exists
if (file_exists($target_file1)) {
  echo '<script>alert("Sorry, National Id already exists.")</script>';
  $uploadOk1 = 0;
}
if (file_exists($target_file2)) {
  echo 'alert("Sorry, the picture already exists.") </script>';
  $uploadOk2 = 0;
}
// Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Allow certain file formats
if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
&&  $imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" ) {
  echo '<script> alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.") </script>';
  $uploadOk1 = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk1 == 0 && $uploadOk2 == 0) {
  echo  '<script> alert("file was not uploaded") </script>'  ;
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["NationalIdbirthcertificate"]["tmp_name"], $target_file1)&&move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file2)) {
    
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "flights";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$em=$_POST['email'];
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$pp=$_POST['psw'];
$picture_ID=htmlspecialchars( basename( $_FILES["NationalIdbirthcertificate"]["name"]));
$pfp= htmlspecialchars( basename( $_FILES["picture"]["name"]));
$q = "SELECT * FROM user_details WHERE Email = '$em' ";
$re = mysqli_query($conn,$q);
if ($re) {
  if (mysqli_num_rows($re) > 0) {
    echo 'already exists!';
  } else {
   
    $query = "INSERT INTO user_details (Email, First_Name, Last_Name, Password1,Personal_Photo,ID_Photo,userType,status1) VALUES ('$em','$fn','$ln','$pp','$pfp','$picture_ID','4','0')";
 $result =$conn->query($query);
 echo'<script>alert("data is saved") </script>'  ;
}

  
 
  } else {
    echo '<script>alert("data is was saved") </script>;';
  }
}
}
?>
}

</script>
</body>
<script>
function confirmPassword() {
var password = document.getElementById("psw").value;  
  var confirmpassword1 = document.getElementById("psw-repeat").value;  
  if(password !== confirmpassword1)  
  {   
    alert("Passwords did not match");
    return false;  
  } else {  
    alert("Password created successfully"); 
    return true; 
  }  
}
 </script>
<!-- <?php
// echo "<script type='text/javascript'>alert('Thank you for your enquiry, we will contact you as soon as possible, have a nice day!');</script>";
// $msg = "";
// // If upload button is clicked ...
// $uploadok1=1;
// $uploadok2=1;
// if (isset($_POST['submit'])) {
// 	$filename1 = $_FILES["NationalIdbirthcertificate"]["name"];
// 	$tempname1 = $_FILES["NationalIdbirthcertificate"]["tmp_name"];	
// 		$folder1 = "image/".$filename1;
//     $filename2 = $_FILES["picture"]["name"];
//     $tempname2 = $_FILES["picture"]["tmp_name"];	
//       $folder2 = "image/".$filename2;
//       if(isset($_POST["submit"])) {
//         $check = getimagesize($_FILES["NationalIdbirthcertificate"]["tmp_name"]);
//         if($check !== false) {
//           echo "File is an image - " . $check["mime"] . ".";
//           $uploadOk1 = 1;
//         } else {
//           echo "File is not an image.";
//           $uploadOk1 = 0;
//         }
//       }
//       if(isset($_POST["submit"])) {
//         $check = getimagesize($_FILES["picture"]["tmp_name"]);
//         if($check !== false) {
//           echo "File is an image - " . $check["mime"] . ".";
//           $uploadOk2 = 1;
//         } else {
//           echo "File is not an image.";
//           $uploadOk2 = 0;
//         }
//       }
//       $imageFileType1 = strtolower(pathinfo($folder1,PATHINFO_EXTENSION));
//       $imageFileType2 = strtolower(pathinfo($folder2,PATHINFO_EXTENSION));
//       if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" ) {
//   echo "Sorry, only JPG, JPEG and PNG files are allowed.";
//   $uploadOk1=0;
// }
// if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" ) {
//   echo "Sorry, only JPG, JPEG and PNG files are allowed.";
//   $uploadOk2=0;
// }
// if($uploadok1===0 &&$uploadok2===0)
// echo "sorry the 2 pictures  were not uploaded";
// else
// {
// 	$db = mysqli_connect("localhost", "root", "", "photos");

// 		// Get all the submitted data from the form
// 		$sql = "INSERT INTO user_details (Personal_Photo,ID_Photo) VALUES ('$filename2','$filename1')";

// 		// Execute query
// 		mysqli_query($db, $sql);
		
// 		// Now let's move the uploaded image into the folder: image
// 		if ((move_uploaded_file($tempname1, $folder1))&&(move_uploaded_file($tempname2, $folder2))) {
// 			$msg = "Image uploaded successfully";
// 		}else{
// 			$msg = "Failed to upload image";
// 	}
  
// }
// }

?>
</html>

