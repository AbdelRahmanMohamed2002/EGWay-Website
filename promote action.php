<style>
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color: DodgerBlue;
}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "web project";
 session_start();
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['submit'])) {
  $sql="UPDATE user set Usertype='" . $_POST['promote']  . "' WHERE id='" .  $_GET['userid'] . "'";
 
    mysqli_query($conn,$sql);
$message = "Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM user WHERE id='" .  $_GET['userid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Promote Employee</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo "<script type='text/javascript'>alert('$message');</script>"; } ?>
</div>
<div style="padding-bottom:5px;">
 
</div>

 
Promote<br>
<select name="promote" id="promote" >
  <option value="2">Promote </option>
 <br>
 <br>
<input type="submit" name="submit" value="Submit" class="buttom">
</form>
