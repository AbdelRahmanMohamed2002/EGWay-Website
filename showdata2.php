<title>update status</title>
<?php
 include('header.php');
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "flights";
 session_start();
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['submit'])) {
  $sql="UPDATE user_details set status1='" . $_POST['status']  . "' WHERE Id='" .  $_GET['userid'] . "'";
 
    mysqli_query($conn,$sql);
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM user_details WHERE Id='" .  $_GET['userid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title> enable/disable users</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
 
</div>

 
status:<br>
<select class="form-select" aria-label=".form-select-lg example" name="status" id="status" >
  <option value="1"> enable </option>
  <option value="0"> disable </option>
 <br>
 <br>
<input type="submit" name="submit" value="Submit" class="buttom">
</form>
<button><a href="qualitycontrol.php">view users</button>
<?php include ('footer.php');?>