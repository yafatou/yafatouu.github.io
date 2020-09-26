<?php

$name  = $_POST['name'];
$phone  = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


include("dbconnect.php");

$reg = "INSERT INTO contactus (name, phone, email, subject, message) VALUES ('$name', '$phone', '$email', '$subject', '$message')";

if(mysqli_query($con, $reg)){

		echo "Message Successfully Sent!";


}else {

	echo "Error: " . $reg . "<br>" . mysqli_error($con);
}


 ?>
