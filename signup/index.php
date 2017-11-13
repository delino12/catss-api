<?php
// set request access
require ("../__factory/engine.php");

// request data
$token = $_REQUEST['token'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$register_user = new SignupUser($token);
$register_user->save($name, $email, $password);
?>


