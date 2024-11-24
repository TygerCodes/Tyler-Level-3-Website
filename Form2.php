<?php

	$servername = "localhost";
	$username = "TakaHeyAdmin";
	$password = "BlueFeather24";
	$dbname = "newslettersubs";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check the connection
	if ($conn->connect_error) {
		die("Connection Busted: " . $conn->connect_error);
	}

	$email = $_REQUEST['email'];
	$isJapanese = $_REQUEST['isJapanese'];
	$isBacker = $_REQUEST['isBacker'];

	$sql = ("INSERT INTO newslettersubs VALUES ('$Email', '$IsBacker', '$IsJapanese')");
	
	if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 

            echo nl2br("\n$email\n $isJapanese\n $isBacker");
        } else{
			
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        // Turns off the connection.
        mysqli_close($conn);

?>