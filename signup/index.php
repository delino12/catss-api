<?php
// set request access
header("Access-Control-Allow-Origin: *");

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];



echo 'Your Name: '.$name. '<br /> Your Email:' .$email. '<br /> Your password: '.$password;

?>


