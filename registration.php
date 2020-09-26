<?php

// session_start();
//
// header('location:signin.html');



$name  = $_POST['user'];
$pass  = $_POST['password'];
$vpass = $_POST['vpass'];
$email = $_POST['email'];
$verify = 1;

// echo $name . 'br';
// echo $pass . 'br';
// echo $vpass . 'br';
// echo $email . 'br';


include("dbconnect.php");

$reg = "INSERT INTO users (username, password, email, verified) VALUES ('$name', '$pass', '$email', '$verify')";

if(mysqli_query($con, $reg)){

		echo "Registration Successful! Please sign in ";

}else {

	echo "Error: " . $reg . "<br>" . mysqli_error($con);
}




// if($pass == $vpass){
//
// $s = "SELECT * FROM users WHERE username='$name' AND password='$pass' ";
//
// $result = mysqli_query($con, $s);
//
// $num = mysqli_num_rows($result);
//
// 	if ($num == 1) {
// 		echo "Username Already taken";
//
// 	}elseif($num < 1){
//
// 		$reg = "INSERT INTO users (username, password, email) VALUES ($name, $pass, $email)";
//
// 		mysqli_query($con, $reg);
//
// 		echo "Registration Successful";
//
// 	}else {
//
// echo "Password doesn't match. Please try again";
//
// }

//}





?>
