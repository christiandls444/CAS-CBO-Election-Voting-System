<?php
	$conn = new mysqli('localhost', 'root', '', 'espa');

	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>
