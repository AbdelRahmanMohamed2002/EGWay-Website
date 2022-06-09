<?php
session_start();
?>
<html>
	<head>
    <title>Customer service</title>
		<style>

body {
  background-image: url('customer.jpg');
}

.topnav{
    background-color: black;
    color: white;
    font-size: 17px;
    padding: 14px 16px;
}
.topnav a{
    background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.topnav a:hover{
    background-color: green;
    color: white;
}
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.headbutton a:hover {background-color: #ddd;}

.dropdown:hover .headbutton {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
	</head>
	<body>
    <div class="topnav">
			<?php
            echo "Welcome ".$_SESSION['EMAIL'];
            ?>
            <br>
         
 
   <div class="dropdown">
 <form action="Customer_service.php"> <button class="dropbtn">Custemer Service</button></form>
  
</div>
<div class="dropdown">
 <form action="customer_flights.php"> <button class="dropbtn">Search</button></form>

  <div class="dropdown-content">
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Comments</button>
  
</div>
<div class="dropdown">
  <button class="dropbtn">Edit</button>
  </div>
<div class="dropdown">
<form action="main page.php" ><button class="dropbtn" type="submit"  class="button"> Home</button></form>
</div>
</div>
</body>
