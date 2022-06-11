<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<style>
a
{
text-decoration:none;
color:black;
}
</style>
<section>
<table class="table" id="mytable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Trip</th>
      <th scope="col">email</th>
      <th scope="col">price</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
    <tbody>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flights";
$a=$_SESSION['EMAIL'];
$conn = new mysqli($servername, $username, $password, $dbname);
 if(isset($a))
 {
  $delete=mysqli_query($conn,"DELETE FROM `sharm` WHERE `email`='$a'");
 }
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
$sql = " SELECT (SELECT SUM((Adults500+infant200+child*400)) FROM sharm WHERE email=$a) as total;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 echo " <tr><th>1</th>";
 echo "<td>sharm</td>";
 echo "<td>".$row['email']."</td>";
 echo "<td>".$row["total"]."</td>";
echo "<td><a href='cart.php?'>".$row['email']."delete </a> </tr>";

}
}
$conn->close(); 
  ?>
  
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flights";
$b=$_SESSION['EMAIL'];
$conn = new mysqli($servername, $username, $password, $dbname);
 if(isset($b))
 {
  $delete=mysqli_query($conn,"DELETE FROM `hurda` WHERE `email`='$b'");
 }
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
$sql = " SELECT (SELECT SUM((Adults500+infant200+child*400)) FROM hurda WHERE email=$b) as total;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 echo " <tr><th>2</th>";
 echo "<td>hurda</td>";
 echo "<td>".$row['email']."</td>";
 echo "<td>".$row["total"]."</td>";
echo "<td><a href='cart.php?'>".$row['email']."delete </a> </tr>";
}
}
$conn->close(); 
  ?>
   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flights";
$c=$_SESSION['EMAIL'];
$conn = new mysqli($servername, $username, $password, $dbname);
 if(isset($c))
 {
  $delete=mysqli_query($conn,"DELETE FROM `luxor` WHERE `email`='$c'");
 }
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = " SELECT (SELECT SUM((Adults500+infant200+child*400)) FROM luxor WHERE email=$c) as total;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 echo " <tr><th>1</th>";
 echo "<td>sharm</td>";
 echo "<td>".$row['email']."</td>";
 echo "<td>".$row["total"]."</td>";
echo "<td><a href='cart.php?'>".$row['email']."delete </a> </tr>";
}
}
$conn->close(); 
  ?>
  </tbody>
</table>
</section>
<section>
<center>
  <p>
<span>Total </span>
<span>100</span>
</p>
</section>
</center>
<section>
<center>
 <button  class="btn"><a href="visa.html"> GO TO THE CHECK OUT</a> </button> 
</section>
</center>
</body>
</html>