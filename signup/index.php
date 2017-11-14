<?php
// require engine 
require ("../__factory/engine.php");

// decode json 
$data = json_decode(file_get_contents('php://input'), true);

// recieved users information from json
$token = $data['token'];
$name = $data['name'];
$email = $data['email'];
$password = $data['password'];

// save users to database 
$register_user = new SignupUser($token);
$register_user->save($name, $email, $password);
?>