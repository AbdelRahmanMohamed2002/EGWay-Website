<?php
session_start();
$_SESSION['trip']=$_GET['trip'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Star Rating Form | CodingNepal</title>
    <link rel="stylesheet" href="starstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
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
            <div class="inputs">
              <input type="email" name="email" placeholder="Enter your Email"></input>
            </div>
            <div class="textarea">
              <br>
              <input value="5" name="ratenum" id="ratenum" ></input>
              <textarea cols="30" placeholder="Describe your experience.." name="reviewBox" ></textarea>
            </div>
            <div class="btn">
              <button type="submit" name="submit" onclick="RateDB.php">Post</button>
            </div>
          </form>

      </div>
    </div>
    <script>
    var rating = 0;
    ratenum = document.getElementById("ratenum");
      function checkRate(){
        var stars = document.getElementsByName("rate");
        var len = stars.length;
        for(i=0; i<len; i++){
          if(stars[i].checked)
            rating = stars[i].value;
            ratenum.value = rating;
        }
      }

    </script>

  </body>
</html>
