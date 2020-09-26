<?php

$first_name  = $_POST['first_name'];
$last_name   = $_POST['last_name'];
$grade       = $_POST['grade'];
$email       = $_POST['email'];
$area_code   = $_POST['area_code'];
$phone       = $_POST['phone'];
$school      = $_POST['school'];


include("dbconnect.php");

$reg = "INSERT INTO pay (name, lname, class, email, areacode, phone, school) VALUES ('$first_name', '$last_name', '$grade', '$email', '$area_code', '$phone', '$school')";

header("Location: paypage.php");

 ?>
