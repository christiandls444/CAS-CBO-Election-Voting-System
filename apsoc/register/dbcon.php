<?php
	$conn = new mysqli('localhost', 'root', '', 'apsoc');

	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>
