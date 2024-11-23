<?php

$servername = "localhost";
$username = "TakaHeyAdmin";
$password = "BlueFeather24";
$dbname = "webproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check the connection
if ($conn->connect_error) {
	die("Connection Busted: " . $conn->connect_error);
}

?>