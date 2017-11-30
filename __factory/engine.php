<?php
require ("db.php");

/**
* CATSS API
*/
class CatssApi
{
	protected $token;
	protected $type;

	function __construct($token, $type)
	{
		$this->token = $token;
		$this->type = $type;	
	}

	// this runs the api
	public function run()
	{
		if($this->token !== '6b971eac2f876685b4ff2d07ffeb545c41B756F2DCAC80BFD910D1BED0633974'){
			$data = array(
				'status' => 'Error incorrect token value ',
				'message' => 'invalid request details'
			);

			return $this->toJson($data);
		}else{
			if($this->type == 'pairs'){
				return $this->toJson(CatssApi::getPairs());
			}elseif ($this->type == 'acct_bal') {
				# code...
				return $this->toJson(CatssApi::getAcctBal());
			}elseif ($this->type == 'news') {
				# code...
				return $this->toJson(CatssApi::news());
			}elseif ($this->type == 'stock_bal') {
				# code...
				return $this->toJson(CatssApi::stockBalance());
			}elseif ($this->type == 'trans_info') {
				# code...
				return $this->toJson(CatssApi::transactions());
			}elseif ($this->type == 'index_news') {
				# code...
				return $this->toJson(CatssApi::stockIndex());
			}elseif ($this->type == 'basic_info') {
				# code...
				return $this->toJson(CatssApi::basicInformation());
			}
		}
	}

	// load all equities
	public function getPairs()
	{
		# code...
		$stocks = array(
			'CAPOIL', 'DANGFLOUR', 'DIAMONDBNK', 'FCMB', 'FIDELITYBK',
			'FLOURMILL', 'GOLDBREW', 'GUARANTY', 'GUINNESS', 'JAPAULOIL',
			'JBERGER', 'LASACO', 'NNFM', 'NESTLE', 'OANDO',
			'SKYEBANK', 'STANBIC', 'STERLNBANK', 'TOTAL', 'UNILEVER',
			'TRANSEXPR', 'ZENITHBANK',
		);

		$pairs_box = [];
		$total = count($stocks);
		$sn = 0 ;
		for ($i = 0; $i < $total; $i++) {
			# code...
			$sn = $sn + 1;
            $data = array(
                "id" => $sn,
                "name" => $stocks[$i],
                "start_price" => number_format(1.20 + rand(1, 9), 2),
                "close_price" => number_format(2.10 + rand(0, 9), 2),
                "old_start_price" => number_format(1.20 + rand(1, 9), 2),
                "old_close_price" => number_format(2.10 + rand(0, 9), 2),
                "status" => 'open',
                "traffic" => 'high',
                "start_time" => '8:59:AM',
                "close_time" => '13:59:PM',
                "timing" => date("M D ' y ") 
            );
            array_push($pairs_box, $data);
		}

		return $pairs_box;
	}

	// get user account balance
	public function getAcctBal()
	{

		$data = array(
			'user_id' => 1,
			'account_id' => '17XC209838',
			'account_balance' => 10000000.00
		);

		return $data;
	}

	// news updates
	public function news()
	{
		
		$stocks = array(
			'CAPOIL', 'DANGFLOUR', 'DIAMONDBNK', 'FCMB', 'FIDELITYBK',
			'FLOURMILL', 'NESTLE', 'OANDO',
			'SKYEBANK', 'STANBIC', 'STERLNBANK', 'TOTAL', 'UNILEVER',
			'TRANSEXPR', 'ZENITHBANK',
		);

		$pairs_box = [];
		$total = count($stocks);
		for ($i = 0; $i < $total; $i++) {
			
			$data = array(
				'title' => $stocks[$i],
				'body' => 'Welcome to catss news live',
				'date' => '1 min ago'
			);

			array_push($pairs_box, $data);
		}
 
		return $pairs_box;
	}

	// user stock balance
	public function stockBalance()
	{
		$stocks = array(
			'CAPOIL', 'DANGFLOUR', 'DIAMONDBNK', 'FCMB', 'FIDELITYBK',
			'FLOURMILL', 'NESTLE', 'OANDO',
			'SKYEBANK', 'STANBIC', 'STERLNBANK', 'TOTAL', 'UNILEVER',
			'TRANSEXPR', 'ZENITHBANK',
		);

		$pairs_box = [];
		$total = count($stocks);
		for ($i = 0; $i < $total; $i++) {
			
			$data = array(
				'name' => $stocks[$i],
				'qty' => 800 + rand(1, 9) + rand(111, 999),
				'price' => 1.03. + rand(1, 9)
			);

			array_push($pairs_box, $data);
		}
 
		return $pairs_box;
	}

	// transactions
	public function transactions()
	{
		$stocks = array(
			'DIAMONDBNK', 'FCMB',
			'FLOURMILL', 'STANBIC'
		);

		$pairs_box = [];
		$total = count($stocks);
		for ($i = 0; $i < $total; $i++) {
			
			$data = array(
				"stock_name" => $stocks[$i],
				"stock_unit" => "8.10",
				"stock_qty" => "40,000",
				"stock_trade" => "buy",
				"stock_amount" => "324,000.00",
				"stock_date" => "1 day ago"
			);

			array_push($pairs_box, $data);
		}

		return $pairs_box;
	}

	// stock price and closing index
	public function stockIndex(){
		# code...
		$stocks = array(
			'CAPOIL', 'DANGFLOUR', 'DIAMONDBNK', 'FCMB', 'FIDELITYBK',
			'FLOURMILL', 'GOLDBREW', 'GUARANTY', 'GUINNESS', 'JAPAULOIL',
			'JBERGER', 'LASACO', 'NNFM', 'NESTLE', 'OANDO',
			'SKYEBANK', 'STANBIC', 'STERLNBANK', 'TOTAL', 'UNILEVER',
			'TRANSEXPR', 'ZENITHBANK',
		);


		$pairs_box = [];
		$total = count($stocks);
		for ($i = 0; $i < $total; $i++) {
			
			$data = array(
				'id' => $i,
				'pairs' => $stocks[$i],
				'open' => 1.20 + rand(1, 9),
				'close' => 2.10 + rand(0, 9)
			);

			array_push($pairs_box, $data);
		}

		return $pairs_box;
	}

	// user basic information
	public function basicInformation()
	{
		$info_box = [];

		$informations = array(
			'id' => '1',
			'name' => 'Sammuel Bernard',
			'email' => 'ekpotosammuel@gmail.com',
			'gender' => 'male',
			'address' => '16a Carodoso street off akinsanya lane Olodi-Apapa Lagos ',
			'phone' => '08127160258',
			'state' => 'Lagos State',
			'avatar' => '458848899040.jpg'
		);

		array_push($info_box, $informations);

		return $info_box;
	}

	// convert results to json
	public function toJson($data)
	{
		header("Access-Control-Allow-Origin: *");
		header('Content-Type: application/json');
		
		echo json_encode($data);
	}
}

/**
* Register User
*/
class SignupUser extends DBconnect
{
	protected $plug;

	public function __construct()
	{
		parent::__construct();
		$this->plug = DBconnect::iConnect();
	}

	// flash back users data
	public function mirrow($data)
	{
		$token    = $data['token'];
		$name     = $data['name'];
		$email    = $data['email'];
		$password = $data['password'];

		$flash_data = array(
			'token' => $token,
			'name'	=> $name,
			'email'	=> $email,
			'date'	=> date("M D Y' h:i a")
		);
		$this->toJson($flash_data);
	}

	// flash back save data
	public function save($data)
	{
		// recieved users information from json
		$token    = $data['token'];
		$name     = $data['name'];
		$email    = $data['email'];
		$password = $data['password'];

		if($token !== '6b971eac2f876685b4ff2d07ffeb545c41B756F2DCAC80BFD910D1BED0633974'){
			$data = array(
				'status' 	=> 'error',
				'message' 	=> 'Error incorrect access token',
				'data'		=> [
					'token' 	=> $token,
					'name'		=> $name,
					'email'		=> $email
				]
			);
			return $this->toJson($data);
		}else{

			# code...
			$status = 'active';

			# query
			$query = " INSERT INTO users (name, email, password, status, date) ";
			$query .= " VALUES('".$name."', '".$email."', ";
			$query .= " '".$password."', '".$status."', '".time()."') ";


			$query_run = mysqli_query($this->plug, $query);
			if(!$query_run){
				$error_msg = "Fail to run query ".mysqli_error($this->plug);
				$msg = array(
					'status' => 'error',
					'message' => $error_msg
				);
			}else{
				$msg = array(
					'status' => 'success',
					'message' => 'user signup successful'
				);
			}

			return $this->toJson($msg);
		}
	}

	// load all users 
	public function loadUsers()
	{
		$query = " SELECT * FROM users ";
		$query_run = mysqli_query($this->plug, $query);
		if(!$query_run){
			$msg = array(
				'status' => 'error',
				'message' => 'Fail to run fetch users query '
			);
		}else{

			if(!mysqli_num_rows($query_run)){
				$msg = array(
					'status' => 'success',
					'message' => 'No users has signed up yet'
				);
			}else{
				$users_box = [];
				while($results = mysqli_fetch_array($query_run)){
					$data = array(
						'id' => $results['id'],
						'name' => $results['name'],
						'email' => $results['email'],
						'status' => $results['status'],
						'date'	=>	date("M D Y' h:i a", $results['date'])
					);
					array_push($users_box, $data);
				}

				$msg = array(
					'status' => 'success',
					'users' => $users_box
				);
				return CatssApi::toJson($msg);
			}
			return CatssApi::toJson($msg);
		}
		return CatssApi::toJson($msg);
	}

	public function toJson($data){
		header("Access-Control-Allow-Origin: *");
		header('Content-Type: application/json');
		echo json_encode($data);
	}
}

/**
* Register User
*/
class LoginUser extends DBconnect
{
	protected $plug;

	function __construct()
	{
		parent::__construct();
		$this->plug = DBconnect::iConnect();
	}

	public function login($data)
	{
		// recieved users information from json
		$token = $data['token'];
		$email = $data['email'];
		$password = $data['password'];

		if($token !== '6b971eac2f876685b4ff2d07ffeb545c41B756F2DCAC80BFD910D1BED0633974'){
			$data = array(
				'status' => 'error',
				'message' => 'Error incorrect access token'
			);
			return $this->toJson($data);
		}else{


			// do login 
			$query = " SELECT * FROM `users` WHERE(email ='".$email."' AND password ='".$password."') ";

			// run query
			$query_run = mysqli_query($this->plug, $query);
			if(!$query_run){
				$error_msg = "Fail to run query ".mysqli_error($this->plug);
				$msg = array(
					'status' => 'error',
					'message' => $error_msg
				);
			}else{
				if(!mysqli_num_rows($query_run)){
					$msg = array(
						'status' => 'error',
						'message' => 'invalid login credentials'
					);
				}else{
				
					while ($results = mysqli_fetch_array($query_run)) {
						# code...
						$msg = array(
							'id' => $results['id'],
							'email' => $results['email'],
							'state' => true
						);
					}
					return $this->toJson($msg);
				}
				return $this->toJson($msg);
			}
			return $this->toJson($msg);
		}
	}


	public function loadUsers()
	{
		$query = " SELECT * FROM users ";
		$query_run = mysqli_query($this->plug, $query);
		if(!$query_run){
			$msg = array(
				'status' => 'error',
				'message' => 'Fail to run fetch users query '
			);
		}else{

			if(!mysqli_num_rows($query_run)){
				$msg = array(
					'status' => 'success',
					'message' => 'No users has signed up yet'
				);
			}else{
				$users_box = [];
				while($results = mysqli_fetch_array($query_run)){
					$data = array(
						'id' => $results['id'],
						'name' => $results['name'],
						'email' => $results['email'],
						'status' => $results['status'],
						'date'	=> $results['date']
					);
					array_push($users_box, $data);
				}

				$msg = array(
					'status' => 'success',
					'users' => $users_box
				);
				return CatssApi::toJson($msg);
			}
			return CatssApi::toJson($msg);
		}
		return CatssApi::toJson($msg);
	}

	public function toJson($data){
		header("Access-Control-Allow-Origin: *");
		header('Content-Type: application/json');
		echo json_encode($data);
	}
}

?>