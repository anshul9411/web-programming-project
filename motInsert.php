<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="motivation"; // Database name 
$tbl_name="reg"; // Table name 

$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

$sql1="INSERT INTO $tbl_name (name,gender,age,email,password,number) VALUES('$name','$gender','$age,'$email','$password','$number')";

$result=mysqli_query($con,$sql1);


if($result==TRUE)
{	

	echo "<font text color='green' align='center'><b>Records updated Successfully!!!-Thank you.&nbsp </b>
	\n <a href='motivation.html'> <font text color='blue' size='5'>Click Here</a>"; 

}
else 
{ echo $sql1;
//header("location:../Pages/Fail.html");
die;
}

?>