<html>
<body>
 <style>
section{ 
  display: block;
  background-color:darkblue;
color:white;
  width:80%;
  height:110%;
  padding:70px 70px 70px 70px;
  margin:20px 20px 20px 20px;
font-size:20px;

}
 div
{
padding:15px;
align-items:center;
}
form{
padding:15px;
align-items:center;


}
.button{
background-color:white;
border:none;
text-decoration:none;
color:black;
padding:10px 32px;
text-align:center;
display:inline-block;
font-size:16px;
margin:10px 2px;
border-radius:20px 5px;
transition-duration: 0.4s;
}
.button:hover
{
background-color:white; 
  color: blue;
}
a{
color:white;
}

</style>
<section >
<center>
<p> Apply Form</p>
</center>
<hr style="background:white;width:25%;">
<form action="sharm.php" method="POST">
<div>
<input type="radio" id="Round Trip" name="Trip" value="Round Trip" required>
  <label for="Round Trip">Round Trip</label>
  <input type="radio" id="One Way" name="Trip" value="One Way">
  <label for="One Way">One Way</label>
 
  <input type="radio" id="returnlessthan7" name="Trip" value="returnlessthan7" required>
  <label for="Round Trip">return less than 7</label>
  <input type="radio" id="returnafterthan7" name="Trip" value="returnafterthan7">
  <label for="returnafterthan7">return after than 7</label>
 </div>
<div>
<label for="Departure Date">Departure Date: </label>
<input type="date" id="date" name="date" value="date" required>
</div>


<div>
<label for="Departure Date">Return Date: </label>
<input type="date" id="dat" name="dat" value="dat" required>
</div>
<div>
<label for="Departure Time" >Departure Time: </label>
<input type="time" id="Time" name="Time" value="Time" >
</div>
<div>
<label for="return Time">Return Time:  </label>
<input type="time" id="Tim" name="Tim" value="Tim" required>
</div>
<div>
<label for="Adults: " >Adults: </label> 
<select name="Adults" id="Adults" >
  <option value="1">1 Adult</option>
  <option value="2">2  Adult</option>
  <option value="3">3  Adult</option>
  <option value="4">4  Adult</option>
  <option value="5">5  Adult</option>
  </select>
</div>
<div>
<label for="child: " >child: </label> 
<select name="child" id="child">
  <option value="0">0 child(ren)</option>
  <option value="1">1 child(ren)</option>
  <option value="2">2 child(ren)</option>
  <option value="3">3 child(ren)</option>
  <option value="4">4 child(ren)</option>
  </select>
<label for="child " >2-11 year </label> 
</div>
<div>
<label for="infant(s): " >infant: </label> 
<select name="infant" id="infant">
  <option value="0">0 infant(s) </option>
  <option value="1">1 infant(s) </option>
  <option value="2">2 infant(s) </option>
  <option value="3">3 infant(s) </option>
  <option value="4">4 infant(s) </option>
  </select>
<label for="child " >0-2 year </label> 
</div>
<div>
<label for="class" >class: </label> 
<select name="class" id="class">
  <option value="1">Business </option>
  <option value="2"> Best Fare</option>
  </select>
</div>
<div>
<label for="From" >From: </label>
<select name="From" id="From">
  <option value="1"> Sharm El Sheikh </option>
  <option value="2"> luxor</option>
  </select>

</div>
<div>
<a href="https://www.egyptair.com/en/Documents/ConditionsOfCarriage.pdf">Condition of Carriage</a>
</div>
<div>
<a href="visa code.php" class="button">book</a>
<input type="submit" name="save" value="submit" class="button" >
</div>
</form>
</section>

 <?php
 $con=mysqli_connect("localhost","root","","flights");
if(isset($_POST['save']))

{
$way= $_POST ['Trip'];
$date=$_POST['date'];
$dat= $_POST['dat'];
$Time= $_POST['Time'];
$Tim= $_POST['Tim'];
$Adults= $_POST['Adults'];
$child= $_POST['child'];
$infant= $_POST['infant'];
$class= $_POST['class'];
$From= $_POST['From'];

$sql = " INSERT INTO `hurda`(`way`, `date`,  `dat`, `Time`, `Tim`, `Adults`, `child`, `infant`, `class`, `From1`,`id`) VALUES ('$way','$date','$dat','$Time','$Tim','$Adults','$child','$infant','$class','$From','')";

$run=mysqli_query($con, $sql) or die(mysqli_error($con));
if ($run) {
echo "<script>alert('the data inserted succes');</script>";
}
else
{
echo "Error: " . $sql . "" . mysqli_error($con);
}
mysqli_close($con);
}
?>
</body>
</html>