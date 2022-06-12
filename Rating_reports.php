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
$coun1=0;

$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM ratings";
$result = mysqli_query($conn,$query);
 

?>