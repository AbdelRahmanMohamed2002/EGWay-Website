<?php
session_start();
?>
<html>
	<head>
    <title>Quality control</title>
		<style>
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

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
	</head>
	<body>
    <div class="topnav">
			<?php
            echo "Welcome ".$_SESSION['EMAIL'];
            ?>
            <br>
         
 <a href="qc2.php">QControl Home Page</a>
   <div class="dropdown">
  <button class="dropbtn">Custemer Service</button>
  <div class="dropdown-content">
    <a href="View All Custemer.php">View All</a>
    <a href="enable.php">Enable And Disable Accounts</a>
    <a href="promote_Custemer.php">Promote Custemer Service to Quality Contro</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Ratings</button>

  <div class="dropdown-content">
  <div class="dropdown">
  <button class="dropbtn">Rating Reports</button>
  <div class="dropdown-content">
  <a href="View_all_rating.php">View All</a>
    
   
  </div>
</div>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Comments</button>
  <div class="dropdown-content">
    <a href="ViewAllComments.php">View All Comments</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Users</button>
  <div class="dropdown-content">
    <a href="qualitycontrol.php">View All Users</a>
  </div>
</div>
<div class="dropdown">
<form action="main page.php" ><button class="dropbtn" type="submit"  class="button"> Home</button></form>
</div>
</div>
</body>
