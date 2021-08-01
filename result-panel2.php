<?php

	$host="localhost";
	$user="root";
	$pass="";
	$db="train-tasks";
	
	
	$connection=@mysqli_connect($host, $user, $pass ,$db);
	$sql_query_get="SELECT * FROM direction order by id DESC LIMIT 1";
	$resultQuery=mysqli_query($connection, 	$sql_query_get);

	$resultCheck=mysqli_num_rows($resultQuery);
if($resultCheck>0){

while($row =mysqli_fetch_assoc($resultQuery)){

    echo $row['id']. " , ".$row['direction']."<br>";

}

}else{
echo"Sorry, no result";

 } 


?>