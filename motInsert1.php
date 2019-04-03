<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','motivation');

		if($mysqli->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
		}
		
		$query = "INSERT INTO reg VALUES 
('$name','$gender','$age','$email','$password','$number')";
		$insert_row = $mysqli->query($query);
		if($insert_row){
		  header("location:successreg.php");
		}
		else{
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	?>