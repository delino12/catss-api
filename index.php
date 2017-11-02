<?php
// CATSS API
include ("__factory/engine.php");


if($_GET['cq'] && $_GET['token']){
	// get check params
	$token = $_GET['token'];
	$type = $_GET['cq'];

	$cats_engine = new CatssApi($token, $type);
	$cats_engine->run();

}else{
	die('fail to send request !');
}

?>