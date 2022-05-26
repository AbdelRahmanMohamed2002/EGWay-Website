<?php 
session_start();
include('connectdatabase.php');
include('header.php');
include('nav.php');
 
$sql = "SELECT * FROM trip";
$res=$connection->query($sql);
?>
 
<div class="container">
<?php if(isset($_GET['status']) & !empty($_GET['status'])){ 
			if($_GET['status'] == 'success'){
				echo "<div class=\"alert alert-success\" role=\"alert\">Item Successfully Added to Cart</div>";
			}elseif ($_GET['status'] == 'incart') {
				echo "<div class=\"alert alert-info\" role=\"alert\">Item is Already Exists in Cart</div>";
			}elseif ($_GET['status'] == 'failed') {
				echo "<div class=\"alert alert-danger\" role=\"alert\">Failed to Add item, try to Add Again</div>";
			}
	}
?>
	<div class="row">
    <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src=hurghada2.jpg alt=name="hurghada2" >
	      <div class="caption">
	        
		  <p><a href="airplaneform.php?id=1 ?>" class="btn btn-primary" role="button">register a ticket</a></p> 
	        <p><a href="addtocart.php?id=1 ?>" class="btn btn-primary" role="button">Add to Cart</a></p>
	      </div>
	    </div>
	  </div>

      <div class="row">
    <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src=sharm.jpg alt=name="sharm" >
	      <div class="caption">
	        
	        
	        <p><a href="addtocart.php?id=2 ?>" class="btn btn-primary" role="button">Add to cart</a></p>
	      </div>
	    </div>
	  </div>
	</div>
    <div class="row">
    <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src=luxor.jpg alt=name="luxor" >
	      <div class="caption">

	        <p><a href="addtocart.php?id=3 ?>" class="btn btn-primary" role="button">Add to cart</a></p>
	      </div>
	    </div>
	  </div>
	</div>
</div>
 
<?php include('footer.php'); ?>