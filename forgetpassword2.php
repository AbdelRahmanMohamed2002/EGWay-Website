<html>
<style>
button {
	font-size: 1em;
	padding: 15px 35px;
	color: #fff;
	text-decoration: none;
	cursor: pointer;
	transition: all 300ms ease-out;
	background: #403e3d;
	border-radius: 50px;
}
</style>
<form action="signin.php"> <button type="submit"> signin<button> </form>
<?php

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
$query = "SELECT Password1 FROM user_details WHERE Email = '$em'";
 $result = $conn->query($query);
 if($row = mysqli_fetch_array($result)) 
 //$row = mysqli_fetch_array($result);
   { echo "your password is ". $row['Password1'];

   }
   else
echo "the account does exist";
?>
<br>


</html>