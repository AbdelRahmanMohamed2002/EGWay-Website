<?php
session_start();
$table=$_SESSION['table'];
$f1=$_GET['userid'];
 $con=mysqli_connect("localhost","root","","flights");
if($con)
{
  $email=$_SESSION['EMAIL'];
$way= $_POST ['Trip'];
$date=$_POST['date'];
$dat= $_POST['dat'];
$Time= $_POST['Time'];
$Tim= $_POST['Tim'];
$Adults= $_POST['Adults'];
$child= $_POST['child'];
$infant= $_POST['infant'];
$class= $_POST['class'];
$From= $_POST['From'];


$sql = "UPDATE $table SET `way` = '$way',`date` = '$date',`dat` = '$dat',`Time`='$Time',`Tim` = '$Tim',`Adults` = '$Adults',`child`='$child',`infant`='$infant',`class`='$class',`From1`='$From' WHERE `id` = $f1"; 

$run=mysqli_query($con, $sql) or die(mysqli_error($con));
if ($run) {
echo "<script>alert('the data updated successfully');</script>";
}
else
{
echo "Error: " . $sql . "" . mysqli_error($con);
}
mysqli_close($con);

}
else
"<script>alert('the data was not updated successfully');</script>";
?>
<html><form action=Customer_flights.php><button type="submit"> Return</button></form>;
</html>