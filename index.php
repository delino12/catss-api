<?php
// CATSS API
include ("__factory/engine.php");


if($_GET['cp'] && $_GET['token']){
	// get check params
	$token = $_GET['token'];
	$type = $_GET['cp'];

	$cats_engine = new CatssApi($token, $type);
	$cats_engine->run();

}else{
	die('fail to send request !');
}

?>