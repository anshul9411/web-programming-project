<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','motivation');

		if($mysqli->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
		}
		
		$query = "INSERT INTO payment VALUES 
('$ccname','$ccnumber','$month','$year','$cvv','$amt')";
		$insert_row = $mysqli->query($query);
		if($insert_row){
		  header("location:successreg1.php");
		}
		else{
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	?>