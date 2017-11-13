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
			return "Error connecting to database";
		}else{
			return $iConnect;
		}
		
	}
}
?>