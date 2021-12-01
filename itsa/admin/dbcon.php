<?php
	$conn = new mysqli('localhost', 'root', '', 'itsa');

	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>
