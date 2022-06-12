<style>
table, th, td {
  border: 1px solid black;
}

</style>
<?php


include "qcmenu.php";
include('header.php');
//include('menubar.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flights";


// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT * FROM user_details where userType= 4";
$result = mysqli_query($conn,$query);
 

?>
<html>
	<title>view users</title>
<form method="post" action="qualitycontrol.php">
<table class="table table-bordered">
<thead>
<tr>
<th> ID</th>
	<th> Email</th>
	<th>First Name</th>
	<th>last name</th>
	<th>Personal_Photo</th>
	<th>ID_Photo</th>
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
<tr>
<td><?= $row['Id']; ?></td>
	<td><?= $row['Email']; ?></td>
	<td><?= $row['First_Name']; ?></td>
	<td><?=  $row['Last_Name']; ?></td>
	<td><img src="photos/<?= $row['Personal_Photo']; ?>" alt=Personal_Photo1 width=100 height=100></td>
	<td><img src="photos/<?= $row['ID_Photo']; ?>" alt=ID_Photo1 width=100 height=100></td>
	<td><?php if($row['status1']==1)
	echo "accepted";
	else
	echo "pending";?></td>
  
	<td> 
    <button> <a href="showdata2.php?userid=<?php echo $row["Id"]; ?>">status</a></td>
   <!-- <form method="post" action="qualitycontrol.php">
  <button type ="submit" value= "true" name="submit" id="submit" >enable</button>
  <button type ="submit" value= "false" name="submit" id="submit" >disable</button>
  </form>   -->
</td>
  
	 
</tr>
<?php
// $x=$_POST['submit'];
// $y=$row['Email'];
// $sq="update user_details set status=$x  where Email=$y";

// $res=mysqli_query($conn,$sq);
$i++;

}
?>
</table>
</form>
</body>
</html>
