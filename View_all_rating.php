<?php
?>
<style>
table, th, td {
  border: 1px solid black;

}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php
include "qcmenu.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flights";


$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM ratings";
$result = mysqli_query($conn,$query);
 

?>
<html>
<form method="post" action="">
<table class="table table-hover">
<thead>
<tr>
    
	<th> Email</th>
	<th>ratings</th>
    <th>Review</th>
    <th>Trip</th>
</tr>
</thead>
<?php
 
while($row = mysqli_fetch_array($result)) 
{
    
?>
<tr>
	<td><?= $row['email']; ?></td>
	<td><?= $row['Rate']; ?></td>
    <td><?= $row['Review']; ?></td>
    <td><?= $row['trip']; ?></td>
</tr>
<?php
 
}
?>
</table>
 
</form>

</body>
</html>
</html>