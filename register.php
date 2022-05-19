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
    
    <body>
<form action="Qcontrol.php" method="Request" enctype="multipart/form-data" onsubmit="return confirmPassword()">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>
    <label for="fname"><b>Firstname</b></label>
    <input type="text" placeholder="Enter firstname" name="fname" id="fname" pattern="[A-Za-z]" required>
    <label for="lname"><b>lastname</b></label>
    <input type="text" placeholder="Enter lastname" name="lname" id="lname" pattern="[A-Za-z]" required>
    
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
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// chec if the data existed
$query = "SELECT * FROM products WHERE code = '$code'";
 $result = $conn->query($query);

if (mysqli_num_rows($result) > 0) {
  echo "User id exists already.";
  $user = mysqli_fetch_array($result);
  print_r($user); // the data returned from the query
}

//-------------------------------------------------------------
$sql = "SELECT * from table  where email='.$_POST[email]' ,picture='.$_POST[picture]',picture2='.$_POST[NationalIdbirthcertificate]'";

$result = $conn->query($sql);
//-------------------------------
$sql = "INSERT INTO image (filename) VALUES ('$filename')"; //TODO: Save Image As Path Instead Of Full Image In DB
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
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

</html>

