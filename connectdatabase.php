<?php
$connection = mysqli_connect('localhost', 'root', '','flights');
if (!$connection){
    die("Database Connection Failed" );
}
$sql="select * from trip";
$result=$connection->query($sql);
if (!$result){
    die("Database Selection Failed" . mysqli_error($connection));
}