<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	
   <h3>EGWay</h3>
	<h5>FAQs: <br>
		Q: How do I send a message to the support team? <br>
		A: Please click the button Below.
	</h5>
	<div class="box">
		<a class="button" id="contactusbtn" href="#divOne">Contact Us</a>
	</div>
	<div class="overlay" id="divOne" href="#" >
		<div class="wrapper" id="wrap">
			<h2>Send us a message!</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container" >
					<form id="popupform" action="" method="post">
						<label>Email</label>
						<input placeholder="Your Email" type="text" id="email" name="email">
						<label>Message</label> 
						<textarea placeholder="Write your message here" type="text"></textarea>
						<input type="submit" value="Submit" id="submitbtn">
					</form>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>
<script>
	$(document).ready(function(){
			$(document).keyup(function(e) {
			// ESCAPE key pressed
				if (e.keyCode == 27) {
					$("#divOne").hide();
				};
			});
		$("#contactusbtn").click(function(){
			$("#divOne").show();
		});
		$("#submitbtn").click(function (){
			<?php
				if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
					echo "valid address";
				}
				else {
					?>
					<div>

					<div class="alert alert-warning">
					This is a Warning alert!

					</div>
					<?php
				}
			?>
		});
	});
</script>