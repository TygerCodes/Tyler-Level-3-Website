<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>

beans
    <center>
		<?php

	$servername = "localhost";
	$username = "TakaHeyAdmin";
	$password = "BlueFeather24";
	$dbname = "newslettersubs";

	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "newslettersubs");
	
	// Check the connection
	if ($conn === false){
		echo "Rugh-roh";
	} else{
		echo "Okay dokey!";
	}

	$email = $_REQUEST['email'];
	$isJapanese = $_REQUEST['isJapanese'];
	$isBacker = $_REQUEST['isBacker'];

	$sql = ("INSERT INTO newslettersubs  VALUES ('$Email', '$IsBacker', '$IsJapanese')");
	
        
        // Turns off the connection.
        mysqli_close($conn);

?>
</center>
</body>

</html>