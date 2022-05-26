
<style>
    .container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text],input[type=number] {
    
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.checkoutbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.checkoutbtn:hover {
  opacity:1;
}
</style>
<html>
    <head>

    </head>
    <body>
        <form  method ="post" onsubmit= "payment()" >
        <div class="container">
            <h1>Check out</h1>
            <hr>
<label for="visanumber">Visa Number</b></label>
<input type="text" size="40" placeholder="1111 1111 1111 1111" id="visanumber" name="visanumber" pattern="[0-9]{12}" required>
<br>
<label for="MM"><b>MM</b> </label>
<input type="text" size="1" placeholder="MM " id="MM" name="MM" pattern="[0-9]{2}" required>
<label for="YY"><b>YY</b> </label>
<input type="text" size="1" placeholder="YY " id="YY" name="YY" pattern="[0-9]{2}" required>
<br>
<label for="CVV"><b>CVV</b> </label>        
<input type="text" size="2" placeholder="XXX-X " id="CVV" name="CVV" pattern="[0-9]{4}" required>

<br>
<img src="CVV.png" width="300" height="300" alt="CVV">
<button type="submit" class="checkoutbtn"  id="submit11" name="submit11" >CheckOut</button>
</div>

</form>
<script>
function payment()
{
    alert("the payment  successed");
}
</script>
?>
</body>
</html>