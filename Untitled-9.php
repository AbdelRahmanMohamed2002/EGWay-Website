<html>
    <head>
    <style>
        html {
	height: 100%;
}
body {
	position: relative;
	min-height: 100%;
	color: #555555;
	background-color: #FFFFFF;
	margin: 0;
	padding-bottom: 100px; /* Same height as footer */
}
h1, h2, h3, h4, h5 {
	color: #394352;
}
.content-wrapper {
	width: 1050px;
	margin: 0 auto;
}
header {
	border-bottom: 1px solid #EEEEEE;
}
header .content-wrapper {
	display: flex;
}
header h1 {
	display: flex;
	flex-grow: 1;
	flex-basis: 0;
	font-size: 20px;
	margin: 0;
	padding: 24px 0;
}
    </style>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $DB="CompanyDB";

        $conn = mysqli_connect($servername,$username,$password,$DB);

        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        CREATE TABLE `trip` (
            `id` int(11) NOT NULL,
            `name` varchar(200) NOT NULL,
            `price` decimal(7,2) NOT NULL,
            `quantity` int(11) NOT NULL,
            `img` text NOT NULL,
            PRIMARY KEY (`id`)
        );
        
        INSERT INTO `trip` (`id`, 'name', `price`, `img`) VALUES
        (1, 'Hurghada', '3000', 'Hurghada.jpg'),
        (2, 'Sharm El-Sheikh', '3500', 'Sharm El-Sheikh.jpg'),
        (3, 'Dahab', '4000', 'Dahab.jpg'),
        (4, 'Ain El-Sokhna', '2500', 'Ain El-Sokhna.jpg'),
        (5, 'Alexandria', '3000', 'Alexandria.jpg');     
        ?>
    </body>
</html>