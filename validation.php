<?php

session_start();

$con = mysqli_connect('localhost', 'root', 'mysql');

mysqli_select_db($con, 'schooldb');

$name = $_POST['user'];
$pass = $_POST['password'];


$s = "SELECT * FROM login WHERE name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	header('location:payment.html');
} else {
	header('location:payment.html');
}

?>
