<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
include "qcmenu.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web project";
session_start();
$conn =  mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT * FROM user where Usertype= 3";
$result = mysqli_query($conn,$query);
 

?>
<html>
<form method="post" action="qualitycontrol.php">
<table class="table table-hover">
<thead>
<tr>
    <th>ID</th>
    <th> Email</th>
    <th>First Name</th>
    <th>last name</th>
    <th>status</th>
    <th>enable/disable</th>



</tr>
</thead>

<h1>Users accounts</h1>
</div>




</body>
</html>
<?php
 $i=0;
while($row = mysqli_fetch_array($result)) 
{

?>
<?php
if($row['enable']==0)
{
  ?>
<tr class="danger">
<td><?= $row['id']; ?></td>
    <td><?= $row['Email']; ?></td>
    <td><?= $row['First Name']; ?></td>
    <td><?=  $row['Last Name']; ?></td>
    <td><?= $row['enable']; ?></td>
    <td> <button> <a href="UpdateAction.php?userid=<?php echo $row["id"]; ?>">status</a></td>
    <?php
}
    if($row['enable']==1)
{
  ?>
    <tr class="success">
    <td><?= $row['id']; ?></td>
    <td><?= $row['Email']; ?></td>
    <td><?= $row['First Name']; ?></td>
    <td><?=  $row['Last Name']; ?></td>
    <td><?= $row['enable']; ?></td>
    <td> 
    <button> <a href="UpdateAction.php?userid=<?php echo $row["id"]; ?>">status</a></td>
</td>

</tr>
<?php
$i++;
}
}
?>
</table>
</form>
</body>
</html>