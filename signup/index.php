<?php
// require engine 
require ("../__factory/engine.php");

// decode json 
$data = json_decode(file_get_contents('php://input'), true);

// save users to database 
$register_user = new SignupUser();
$register_user->save($data);
// $register_user->mirrow($data);
?>