<html>
<?php
session_start();
include("config.php");
$table=$_SESSION['table'];
$f=$_GET['userid'];

$sql1="Delete from $table where id=$f   ";

if($result=$conn->query($sql1))
{
    echo "the Record has been deleted ";
}

?>
<button><a href="Customer_flight.php">Return</a></button>
</html>
