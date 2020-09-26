<?php

$servername = "localhost";
$username 	= "root";
$password 	= "mysql";
$dbname		  = "schooldb";

$con = mysqli_connect($servername,$username,$password,$dbname);

if (!$con) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  exit;

}else{

	//echo "Connected successfully";
}



?>
