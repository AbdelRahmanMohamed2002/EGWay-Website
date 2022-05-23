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
<form action=".php" method="post" >
  <div class="container">
    <h1>Signin</h1>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <button type="submit" class="signinbtn" name="submit">Signin</button>
  </div>
    <div class="container signin">
    <p> Dont have an account? <a href="register.php">Register </a>.</p>
    <p>  <a href="forgetpassword.php">Forget Password </a></p>
  </div>
</form>
<?php

?>
</body>
</html>