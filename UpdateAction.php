<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "flights";
 session_start();
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['submit'])) {
  $sql="UPDATE user_details set userType='" . $_POST['status']  . "' WHERE id='" .  $_GET['userid'] . "'";
 
    mysqli_query($conn,$sql);
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM user_details WHERE id='" .  $_GET['userid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
 
</div>

 
status:<br>
<select class="form-select" aria-label=".form-select-lg example" name="status" id="status" >
  <option value="2"> customer service </option>
  <option value="3">quality control  </option>
 <br>
 <br>
<input type="submit" name="submit" value="Submit" class="buttom">
</form>