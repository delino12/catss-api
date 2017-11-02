<?php
// CATSS API
require ("__factory/engine.php");


if($_GET['cp'] && $_GET['token']){
	// get check params
	$token = $_GET['token'];
	$type = $_GET['cp'];

	$cats_engine = new CatssApi($token, $type);
	$cats_engine->run();

}else{
	header("Access-Control-Allow-Origin: *");
	header('Content-Type: application/json');
	echo json_encode($data);
}

?>