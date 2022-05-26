
<?php 
session_start();
include('connectdatabase.php'); 
include('header.php'); 
include('nav.php');
// $con=mysqli_connect("localhost","root","","flights");
// if(isset($_POST['submit']))
// {

// $date=$_POST['date'];
// $returnaf= $_POST['returnafterthan7'];
// $returnless= $_POST['returnlessthan7'];
// $dat= $_POST['dat'];
// $Time= $_POST['Time'];
// $Tim= $_POST['Tim'];
// $Adults= $_POST['Adults'];
// $child= $_POST['child'];
// $infant= $_POST['infant'];
// $class= $_POST['class'];
// $From= $_POST['From'];
// $query="INSERT INTO `user_flight_details` ( `DepartureDate`, `returnlessthan7`, `returnafterthan7`, `ReturnDate`, `DepartureTime`, `ReturnTime`, `NumberofAdults`, `NumberofChildren`, `NumberofInfants`, `Class`, `from1`, `to1`) 
//  VALUES ('$date', '$returnless', '$returnaf', '$dat', '$Time', '$Tim', '$Adults', '$child', '$infant', '$class', '$From',)";
// $qurey_run=mysqli_query($con,$query);
// $sq="select* from user_flight_details";
// $r1=$con->query($sq);
// }

?>

 
<div class="container">
<?php

?>
<?php 
if(!isset($_SESSION['cart'])){
	$_SESSION['cart'] = 0;
}
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
?>
	<div class="row">
	  <table class="table">
	  	<tr>
	  		<th>S.NO</th>
	  		<th>Item Name</th>
	  		<th>Price</th>
	  	</tr>
		<?php
		$total = 0;
		$i=1;
		 foreach ($cartitems as $key=>$id) {
			$sql = "SELECT * FROM trip WHERE id = '$id'";
			$res=$connection->query($sql);
			$r = mysqli_fetch_assoc($res);
			if($r === null){
				die();
			}
		?>	  	*($r1['Adults']+$r1['infant']+$r1['child'])
	  	<tr>
	  		<td><?php echo $i; ?></td>
	  		<td><a href="delcart.php?remove=<?php echo $key; ?>">Remove</a> <?php echo $r['name']; ?></td>
	  		<td>$<?php echo $r['price'] ?></td>
	  	</tr>
		<?php 
			$total = $total + $r['price'];
			$i++; 
			} 
		?>
		<tr>
			<td><strong>Total Price</strong></td>
			<td><strong>$<?php echo $total; ?></strong></td>
			<td><a href="checkout.php" class="btn btn-info">Checkout</a></td>
		</tr>
	  </table>
	  
	</div>
 
</div>
 
<?php include('footer.php') ?>