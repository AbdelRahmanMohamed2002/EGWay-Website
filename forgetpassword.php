<style>
    .container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus,input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.submit {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}



</style>
<html>
    <head></head>
    <body>
<form action="forgetpassword.php" method= "post">
    <div class="container">
<label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>
    <input type="submit" value="submit" class="submit">
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
$query = "SELECT password FROM products WHERE email = '$_POST[email]'";
 $result = $conn->query($query);

?>
</body>
    </html>