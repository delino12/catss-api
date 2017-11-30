<?php

// reset DB
/**
* 
*/
class AppReset
{
	protected $host;
	protected $user;
	protected $pass;

	protected $plug;
	protected $status;

	// init the connection info
	public function __construct()
	{
		$this->host = "localhost";
		$this->user = "root";
		$this->pass = "";

		$this->status = false;
	}

	// create the connection
	public function iConnect()
	{
		$this->plug = mysqli_connect($this->host, $this->user, $this->pass);
		if(mysqli_connect_error()){
			return "Mysql Connection Fail !";
		}else{
			return $this->runInstall($this->plug);
		}
	}

	// reset the previous database
	public function runInstall($plug)
	{
		// run a check
		$query = ' SHOW DATABASES ';
		$execute = mysqli_query($plug, $query);
		if(!$execute){
			$msg = 'Fail to run Query Show Databases <br />'.mysqli_error($plug);
			echo $msg;
		}else{
			$status = "";
			while($databases = mysqli_fetch_array($execute)){
				if($databases[0] == 'catss_api'){
					echo 'Resetting app.......... <br />';
					echo 'Installing app.......... <br />';
					echo 'completed .......... <br />';
					return $this->dropDatabase($plug);
				}else{
					$status = "on";
				}
			}

			if($status == "on"){
				echo 'Installing app.......... <br />';
				return $this->createDatabase($plug);
			}
		}
	}

	// drop the database
	public function dropDatabase($plug)
	{
		$query = ' DROP DATABASE `catss_api` ';
		$execute = mysqli_query($plug, $query);
		if(!$execute){
			$msg = 'Fail to run Query Drop <b>catss_api</b> Database <br />'.mysqli_error($plug);
			echo $msg;
		}

		return $this->createDatabase($plug);
	}

	// create database
	public function createDatabase($plug){

		// database has been remove create new DB
		$query = ' CREATE DATABASE `catss_api` ';
		$execute = mysqli_query($plug, $query); 
		if(!$execute){
			$msg = 'Fail to run Query Create <b>catss_api</b> Database <br />'.mysqli_error($plug);
			echo $msg;
		}else{
			$db = 'catss_api';
			$this->addUsersTable($db);
		}
		
	}

	public function addUsersTable($db)
	{
		// init new connection with db
		$plug = mysqli_connect($this->host, $this->user, $this->pass, $db);

		// create all the neccessary table
		$query = ' CREATE TABLE `users` (
				  `id` int(11) AUTO_INCREMENT KEY,
				  `name` varchar(255) NOT NULL,
				  `email` varchar(255) NOT NULL,
				  `password` varchar(255) NOT NULL,
				  `status` varchar(255) NOT NULL,
				  `date` varchar(255) NOT NULL

				) ENGINE=InnoDB DEFAULT CHARSET=latin1';
		$execute = mysqli_query($plug, $query);

		if(!$execute){
			$msg = 'Fail to run Query Create <b>users</b> Database <br />'.mysqli_error($plug);
			echo $msg;
		}else{
			echo "Applications is ready !";
		}
	}
}

$reset_app = new AppReset();
$reset_app->iConnect();

?>