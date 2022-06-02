<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php
include "qcmenu.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web project";
echo "Welcome ".$_SESSION['Name'];

$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM user WHERE `Usertype`='3'";
$result = mysqli_query($conn,$query);
 

?>
<html>
<form method="post" action="">
<table class="table table-hover">
<thead>
<tr>

	<th> Email</th>
	<th>First Name</th>
	<th>Last Name</th>
    <th>Promote</th>
</tr>
</thead>
<?php
while($row = mysqli_fetch_array($result)) 
{    
?>
<tr>
<td><?= $row['Email']; ?></td>
<td><?= $row['First Name']; ?></td>
<td><?=  $row['Last Name']; ?></td>
<td><button type="button" >Promote</button> </td>
</tr>
<?php
}
?>