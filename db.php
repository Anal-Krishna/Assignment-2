<?php
$servername = "172.31.22.43";
$username = "Sam200552821";
$password = "V1iXjpugew";
$dbname = "Sam200552821";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>