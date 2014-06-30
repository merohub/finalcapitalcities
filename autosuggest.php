<?php
   $db = new mysqli('mysql11.000webhost.com', 'a4377512_hitlar', '!webhost123', 'a4377512_login');
	
	if(!$db) {
	
		echo 'Could not connect to the database.';
	} else {
	
		if(isset($_POST['queryString'])) {
			$queryString = $db->real_escape_string($_POST['queryString']);
			
			if(strlen($queryString) >0) {

				$query = $db->query("SELECT word FROM words WHERE word LIKE '$queryString%' LIMIT 2");
				if($query) {
				echo '<ul>';
					while ($result = $query ->fetch_object()) {
	         			echo '<li onClick="fill(\''.addslashes($result->word).'\');">'.$result->word.'</li>';
	         		}
				echo '</ul>';
					
				} else {
					echo 'OOPS we had a problem :(';
				}
			} else {
			echo "not found";
			}
		} else {
			echo 'There should be no direct access to this script!';
		}
	}
?>