<html>
<head>
    <link rel="stylesheet" href="visa.css">
</head>
<body>
    <center>
       
        <section class="container">
            
                <div class="card">
                    <div class="card-inner">
                        <div class="back" id="back">
                            <img src="map.png" class="map-img" />
                            <div class="bar">

                            </div>
                            <div class="row card-cvv">
                                <div>
                                    <img src="pattern.png" />
                                </div>
                                <input type="text" maxlength="3" placeholder="000" pattern="[0-9]{3}" />
                            </div>
                            <div class="row card-text">
                                <p>please enter the cvv number. Dont worry this number not stored in database  </p>
                            </div>
                            <div class="row signature">
                                <p>CUSTOMER SIGNATURE</p>
                                <img src="visa.png" width="80px" />
                            </div>
                            <div><button class="btn" onclick="fro()">swap card</button></div>
                        </div>
                        <div class="front" id="front">
                            <img src="map.png" class="map-img" />
                            <div class="row">
                                <img src=" chip.png" width="60px">
                                <img src=" visa.png" width="80px">
                            </div>
                            <div class="tex">
                                <p>
                                    enter the card number
                                </p>
                            </div>

                            <div class="row card-num">

                                <input type="text" maxlength="4" placeholder="####" class="we" pattern="[0-9]{3}" />
                                <input type="text" maxlength="4" placeholder="####" class="we" pattern="[0-9]{3}" />
                                <input type="text" maxlength="4" placeholder="####" class="we" pattern="[0-9]{3}" />
                                <input type="text" maxlength="4" placeholder="####" class="we" pattern="[0-9]{3}" />
                            </div>
                            <div class="row card-holder">
                                <p> CARD HOLDER</p>
                                <p> VALID TILL</p>
                            </div>
                            <div class="row card-num">

                                <input type="text" maxlength="20" placeholder="please fill your name" class="name" pattern="[a-z]{3}" />
                                <input type="text" maxlength="4" placeholder="mm/yy" class="day" pattern="[0-9]{3}" />

                            </div>
                            <div><button class="btn" onclick="fr()">swap card </button></div>
                        </div>


                    </div>
            
        </section>
    </center>
    <center>
         
    </center>
    <script>
        function fro() {

            document.getElementById("back").style.display = "none";
            document.getElementById("front").style.display = "block";

        }
        function fr() {

            document.getElementById("back").style.display = "block";
            document.getElementById("front").style.display = "none";

        }
    </script>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flights";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT (SELECT SUM((Adults*500+infant*200+child*400)) FROM `hurda` WHERE id=1)+(SELECT SUM((Adults*500+infant*200+child*400)) FROM `sharm` WHERE id=1)
+(SELECT SUM((Adults*500+infant*200+child*400)) FROM `luxor` WHERE id=1) as total; ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  "  the total price = ". $row["total"]." <br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
</body>
</html>
