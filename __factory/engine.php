<?php

/**
* CATSS API
*/
class CatssApi
{
	
	function __construct()
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

		return $this->toJson($pairs_box);
	}


	public function toJson($data)
	{
		header('Content-Type: application/json');
		echo json_encode($data);
	}
}

?>