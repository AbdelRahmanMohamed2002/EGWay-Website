
<html>
<head>
    <link rel="stylesheet" href="visa.css">
</head>
<body>
    <center>
       
        <section class="container">
            <form>
                <div class="card">
                    <div class="card-inner">
                        <div class="back" id="back">
                            <img src="C:\Users\dell\Videos\visa card\images\map.jpg" class="map-img" />
                            <div class="bar">

                            </div>
                            <div class="row card-cvv">
                                <div>
                                    <img src="pattern.jpg" />
                                </div>
                                <input type="text" maxlength="3" placeholder="000" pattern="[0-9]{3}" required>
                            </div>
                            <div class="row card-text">
                                <p>please enter the cvv number. Dont worry this number not stored in database  </p>
                            </div>
                            <div class="row signature">
                                <p>CUSTOMER SIGNATURE</p>
                                <img src="visa.jpg" width="80px" />
                            </div>
                            <div><button class="btn" onclick="fro()">swap card</button></div>
                        </div>
                        <div class="front" id="front">
                            <img src="map.jpg" class="map-img" />
                            <div class="row">
                                <img src="chip.png" width="60px">
                                <img src="visa.jpg" width="80px">
                            </div>
                            <div class="tex">
                                <p>
                                    enter the card number
                                </p>
                            </div>

                            <div class="row card-num">

                                <input type="text" maxlength="4" placeholder="####" class="we" pattern="[0-9]{3}" required>
                                <input type="text" maxlength="4" placeholder="####" class="we" pattern="[0-9]{3}" required>
                                <input type="text" maxlength="4" placeholder="####" class="we" pattern="[0-9]{3}" required>
                                <input type="text" maxlength="4" placeholder="####" class="we" pattern="[0-9]{3}" required>
                            </div>
                            <div class="row card-holder">
                                <p> CARD HOLDER</p>
                                <p> VALID TILL</p>
                            </div>
                            <div class="row card-num">

                                <input type="text" maxlength="20" placeholder="please fill your name" class="name" pattern="[0-9]{3}" />
                                <input type="text" maxlength="6" placeholder="mm/yy" class="day" pattern="[0-9]{3}" />

                            </div>
                            <div><button class="btn" onclick="fr()">swap card </button></div>
                        </div>


                    </div>
            </form>
        </section>

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
</body>
</html>