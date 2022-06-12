<?php

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

        $in1 = $_POST['email'];
        $in2 = $_POST['commentBox'];
        $insertion = 
        "INSERT INTO `comments`(`User Email`, `Comment`) VALUES ('$in1','$in2')";

        if ($conn->query($insertion) == TRUE) {
            echo "New record created successfully";
        }
        else {
            $error = $conn->error;
            echo "Error: ".$insertion . "<br>" . $error;
        }

        $conn->close();
    }

?>
<html><form action="main_user.php"> <button type="submit"> Return</butto>
</form></html>