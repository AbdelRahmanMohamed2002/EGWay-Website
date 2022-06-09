<head>
<style>
table, th, td {
  border: 1px solid black;
}

</style>
<?php
include "Menu.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web project";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$ID=$_POST['Id'];
$sql="SELECT * from 'flight' WHERE  'Flight ID'==$ID";
    $result = mysqli_query($conn,$sql);

    echo"<table>

    <tr>
    
        <th>First Name</th>
        <th>Email</th>
      
         
    </tr>";
while($row = mysqli_fetch_array($result)) 
{
    ?>
    <tr>

	<td><?= $row['Flight Departure City']; ?></td>
	<td><?=  $row['Flight Arrival City']; ?></td>
    </tr>
    <?php
}
?>