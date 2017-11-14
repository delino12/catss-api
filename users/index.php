<?php
header("Access-Control-Allow-Origin: *");
// set request access
require ("../__factory/engine.php");

// request data
if($_GET['token']){
	$token = $_GET['token'];

	$register_user = new SignupUser($token);
	$register_user->loadUsers();
}
?>


