
<style>
    .container {
  padding: 16px;
}

/* Full-width input fields */
input[type=email], input[type=password],input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=email]:focus, input[type=password]:focus,input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.signinbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.signinbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<html>
    
    <body>
<form action="signin12.php" method="post"  onsubmit="return SIG()" >
  <div class="container">
    <h1>Signin</h1>
    <hr>

    <label for="email1"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>
    <label for="psw1"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <button type="submit" class="signinbtn" name="submit" >Signin</button>
  </div>
    <div class="container signin">
    <p> Dont have an account? <a href="register.php">Register </a>.</p>
    <p>  <a href="forgetpassword.php">Forget Password </a></p>
  </div>
</form>


<?php
  
//     if(isset($_POST['submit']))
//     {

    
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "flights";
// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
//   $Email=$_POST['email'];
//   $Password=$_POST['psw'];

//   $query = "SELECT * FROM user_details WHERE Email='$Email' AND Password1='$Password'";
//   $result = mysqli_query($conn,$query);
//   session_start();
//   while ($row = $result->fetch_assoc())
//   {

  
  
//   if($row['userType']=='1')
//   {
//     echo"<html><h1><a href='AdminHome.php'>AdminHome</a></html></h1>";
//   }
// else if($row['userType']=='2')
//   {
//     echo"<h1><a href='customerservice.php'>CustomerHome</a></h1>";
//   }
//   else if($row['userType']=='3')
//   {
//     echo"<html><h1><a href='QualityControlHome.php'>QualityControlHome</h1></html></a>";
//   }
//   else if($row['userType']=='4'&&$row['status1']=='0')
//   {
//    echo "<script>alert('the account is not activited');</script>";
//   }
//   else if($row['userType']=='4'&&$row['status1']=='1')
//   {
//     echo"<h1><a href='qualitycontrol.php'>UserHome</a></h1>";
//   }

//   else
//   echo "not registerd";
// }
//   }
  
?> 

  

</body>
</html>
