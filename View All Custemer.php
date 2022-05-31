<style>
table, th, td {
  border: 1px solid black;
}

</style>
<?php
include "qcmenu.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web project";
session_start();

$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM user WHERE `Usertype`='3'";
$result = mysqli_query($conn,$query);
 

?>
<html>
<form method="post" action="">
<table class="table table-bordered">
<thead>
<tr>

	<th> Email</th>
	<th>First Name</th>
	<th>Last Name</th>
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
</tr>
<?php
 
}
?>
</table>
 
</form>

</body>
</html>
</html>