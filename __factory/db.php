<?php

/**
* Database Connections 
*/
class DBconnect
{

	protected $host;
	protected $user;
	protected $pass;
	protected $db;
	
	function __construct()
	{
		# code...
		$this->host = 'localhost';
		$this->user = 'id3602735_catss';
		$this->pass = 'idorliberty12';
		$this->db = 'id3602735_catss';
	}

	public function iConnect()
	{
		$iConnect = mysqli_connect(
			$this->host,
			$this->user,
			$this->pass,
			$this->database
		);

		if(!$iConnect){
			$msg = array(
				'status' => 'error',
				'message' => 'Fail to initilize connections !'
			);
			return DBconnect::toJson($msg);
		}else{
			return $iConnect;
		}
		
	}

	// convert results to json
	public function toJson($data)
	{
		header("Access-Control-Allow-Origin: *");
		header('Content-Type: application/json');
		
		echo json_encode($data);
	}
}
?>