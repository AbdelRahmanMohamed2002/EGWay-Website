<?php
session_start();
    if (isset($_POST['submit'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $DB = "flights";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $DB);
// Check connection
        if (!$conn)
            die("Connection failed: ".mysqli_connect_error());

        $in1 = $_POST['ratenum'];
        $in2 = $_POST['reviewBox'];
        $in3=$_SESSION['trip'];
        $in4=$_SESSION['EMAIL'];
        
        $insertion =
        "INSERT INTO Ratings(`email`,`Rate`, `Review`,`trip`)
         VALUES ('$in4','$in1','$in2','$in3')";

        if ($conn->query($insertion) == TRUE) {
            echo "<h2>Rating sent ✓<h2>";
        }
        else {
            $error = $conn->error;
            echo "Error: ".$insertion . "<br>" . $error;
        }
        $conn->close();
    }
    else if (isset($_POST['edit'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $DB = "flights";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $DB);
// Check connection
        if (!$conn)
            die("Connection failed: ".mysqli_connect_error());
            $in4=$_SESSION['EMAIL'];
        $in1 = $_POST['ratenum'];
        $in2 = $_POST['reviewBox'];
        $in3=$_SESSION['trip'];


        $insertion =
        "UPDATE Ratings SET Rate = '$in1', Review = '$in2'
        WHERE Ratings.email = '$in4'";

        if ($conn->query($insertion) == TRUE) {
            echo "<h2>Rating sent ✓<h2>";
            header('Location: http://localhost/project/main_user.php');
        }
        else {
            $error = $conn->error;
            echo "Error: ".$insertion . "<br>" . $error;
        }
        $conn->close();
    }

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Star Rating Form | CodingNepal</title>
    <link rel="stylesheet" href="starstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>

      <h2>
        <span id="m">5</span>
        <span>:</span>
        <span id="s">00</span>
        Time left in which you can modify your rating...
      </h2>

  <body>
      <div class="container">
        <div class="post">
          <div class="text">Thanks for rating us!</div>
          <div class="edit">EDIT</div>
        </div>
        <div class="star-widget" id="rating">
            <input type="radio" name="rate" id="rate-5" value="5" onclick="checkRate()">
            <label for="rate-5" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-4" value="4" onclick="checkRate()">
            <label for="rate-4" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-3" value="3" onclick="checkRate()">
            <label for="rate-3" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-2" value="2" onclick="checkRate()">
            <label for="rate-2" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-1" value="1" onclick="checkRate()">
            <label for="rate-1" class="fas fa-star"></label>

            <form action="RateDB.php" method="post">
              <header></header>
              <div class="textarea">
                <input value="5" name="ratenum" id="ratenum" ></input>
                <textarea cols="30" placeholder="Describe your experience.." name="reviewBox" ></textarea>
              </div>
              <div class="btn">
                <button type="submit" name="edit" onclick="RateDB.php">Post</button>
              </div>
            </form>

        </div>
      </div>
    <script>
      var s=60;
      var m=4;

      var time= setInterval(function() {timer()}, 1000);
      function timer(){
        s--;
        if(s==-1){
          m--;
          s=59;
          if(m==-1){
            m=0;
            s=0;
            clearInterval(time);
            alert("Time's up, you cannot edit your rating anymore.");
            
            //window.location.href =" http://localhost/project/main_user.php";

          }
      }
      document.getElementById("m").innerHTML = m;
      document.getElementById("s").innerHTML = s;
      
            }

//Aftter rating is done, preview thank you text and edit button
      const btn = document.querySelector("button");
      const post = document.querySelector(".post");
      const widget = document.querySelector(".star-widget");
      const editBtn = document.querySelector(".edit");

      widget.style.display = "none";
      post.style.display = "block";
      editBtn.onclick = ()=>{
        widget.style.display = "block";
        post.style.display = "none";
      }

      btn.onclick = ()=>{
        widget.style.display = "none";
        post.style.display = "block";
        editBtn.onclick = ()=>{
          widget.style.display = "block";
          post.style.display = "none";
        }

      }
    </script>

  </body>
</html>
