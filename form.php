<?php
			//Run when the button is hit
				if(isset($_POST['Register'])) {
				
					$_SESSION['UserID'] = $row['user_id'];
					$_SESSION['Email'] = $row['email'];
					$_SESSION['IsBacker'] = $row['isBacker'];
					$_SESSION['IsJapanese'] = $row['isJapanese'];
					$_SESSION['DateStamp'] = $row['dateSubmit'];
					
			//Assign variables to form fieldset
			
					$Email = $_POST['Email'];
					$IsBacker = $_POST['IsBacker'];
					$IsJapanese = $_POST['IsJapanese'];
					
			//Puts form info into the table
			
					$sql = $conn->query("INSERT INTO newslettersubs (email, isBacker, isJapanese) 
						Values ('$Email', '$IsBacker', '$IsJapanese')");
						
			//Redirect: For now, until I make a page, it just takes you home.
			
					header('Location: index.html');
				}
		?>