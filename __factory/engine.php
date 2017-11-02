<?php

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
			}
		}
	}

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
		for ($i = 0; $i < $total; $i++) {
			
			$data = array(
				'equity' => $stocks[$i],
				'open_price' => 1.20 + rand(1, 9),
				'close_price' => 2.10 + rand(0, 9),
				'status' => 'open',
				'traffic' => 'high',
				'open_time' => '12:59:AM',
				'close_time' => '10:59:PM',
				'timing' => time()
			);

			array_push($pairs_box, $data);
		}

		return $pairs_box;
	}

	public function getAcctBal()
	{

		$data = array(
			'user_id' => 1,
			'account_id' => '17XC209838',
			'account_balance' => 10000000.00
		);

		return $data;
	}

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

	public function toJson($data)
	{
		header("Access-Control-Allow-Origin: *");
		header('Content-Type: application/json');
		
		echo json_encode($data);
	}
}

?>