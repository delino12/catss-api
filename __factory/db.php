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

		// # code...
		// $this->host = 'localhost';
		// $this->user = 'root';
		// $this->pass = '';
		// $this->db = 'catss_api';
	}

	public function iConnect()
	{
		$iConnect = mysqli_connect(
			$this->host,
			$this->user,
			$this->pass,
			$this->db
		);

		if(!$iConnect){
			$msg = array(
				'status' => 'error',
				'message' => 'error connecting to host server'
			);
			return DBconnect::toJson($msg);
		}else{
			return $iConnect;
		}
		
	}


	public function toJson($data){
		header("Access-Control-Allow-Origin: *");
		header('Content-Type: application/json');
		echo json_encode($data);
	}
}
?>