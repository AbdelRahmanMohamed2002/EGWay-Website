

<?php
// session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flights";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $Email=$_POST['email'];
  $Password=$_POST['psw'];

  $query = "SELECT * FROM user_details WHERE Email='$Email' AND Password1='$Password'";
  $result = mysqli_query($conn,$query);
  session_start();
  while ($row = $result->fetch_assoc())
  {

  
  
  if($row['userType']=='1')
  {
   
    
    $_SESSION['EMAIL']=$Email;
    $_SESSION['psw']=$Password;
  }
else if($row['userType']=='2')
  {
    header('Location: http://localhost/project/customerservice.php');
    $_SESSION['EMAIL']=$Email;
    $_SESSION['psw']=$Password;
  }
  else if($row['userType']=='3')
  { header('Location: http://localhost/project/qc2.php');
   
    // echo"<html><h1><a href='qc2.php'>QualityControlHome</h1></html></a>";
    $_SESSION['EMAIL']=$Email;
    $_SESSION['psw']=$Password;
  }
  else if($row['userType']=='4'&&$row['status1']=='0')
  {
   echo "<script>alert('the account is not activited');</script>";
  }
  else if($row['userType']=='4'&&$row['status1']=='1')
  {$_SESSION['EMAIL']=$Email;
    $_SESSION['psw']=$Password;
    //echo"<h1><a href='main_user.php'>airplaneform</a></h1>";
    header('Location: http://localhost/project/main_user.php');
  }
  // else if($row['userType']=='4'&&$row['status1']=='1'&&$_GET['pic']=='1')
  // {$_SESSION['EMAIL']=$Email;
  //   $_SESSION['psw']=$Password;
  //   echo"<h1><a href='luxor.php'>airplaneform</a></h1>";
  // }
  // else if($row['userType']=='4'&&$row['status1']=='1'&&$_GET['pic']=='2')
  // {$_SESSION['EMAIL']=$Email;
  //   $_SESSION['psw']=$Password;
  //   echo"<h1><a href='sharm.php'>airplaneform</a></h1>";
  // }
  // else if($row['userType']=='4'&&$row['status1']=='1'&&$_GET['pic']=='3')
  // {$_SESSION['EMAIL']=$Email;
  //   $_SESSION['psw']=$Password;
  //   echo"<h1><a href='hurda.php'>airplaneform</a></h1>";
  // }

  else
  echo "not registerd";
}
?> 
