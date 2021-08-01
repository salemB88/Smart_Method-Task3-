<?php

	$host="localhost";
	$user="root";
	$pass="";
	$db="train-tasks";
	
	
	$connection=@mysqli_connect($host, $user, $pass ,$db);




	if(isset($_POST['Save'])){
		$motor1=$_POST['motor1'];
$motor2=$_POST['motor2'];
$motor3=$_POST['motor3'];
$motor4=$_POST['motor4'];
$motor5=$_POST['motor5'];
$motor6=$_POST['motor6'];

		$sql_query_insert="INSERT INTO motors (motor1, motor2, motor3, motor4, motor5, motor6, status)
		VALUES (10,10,10,10,10,10,false)";		
		mysqli_query($connection, $sql_query_insert);

	} else if(isset($_POST['Run'])){
	$sql_query_insert="INSERT INTO motors (motor1, motor2, motor3, motor4, motor5, motor6, status)
	VALUES (10,10,10,10,10,10,true)";	
			mysqli_query($connection, $sql_query_insert);	
}elseif(isset($_POST['left'])){
 $sql_query_insert="INSERT INTO direction (direction)
VALUES ('left')";		
mysqli_query($connection, $sql_query_insert);
}elseif(isset($_POST['right'])){
	$sql_query_insert="INSERT INTO direction (direction)
	VALUES ('right')";		
	mysqli_query($connection, $sql_query_insert);
} elseif(isset($_POST['backward'])){
	$sql_query_insert="INSERT INTO direction (direction)
	VALUES ('backward')";		
	mysqli_query($connection, $sql_query_insert);
} elseif(isset($_POST['forward'])){
	$sql_query_insert="INSERT INTO direction (direction)
	VALUES ('forward')";		
	mysqli_query($connection, $sql_query_insert);
} elseif(isset($_POST['stop'])){
	$sql_query_insert="INSERT INTO direction (direction)
	VALUES ('stop')";		
	mysqli_query($connection, $sql_query_insert);
} else 
echo "Error database conecction";
?>