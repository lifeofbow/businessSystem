<?php

class MyDashboardController extends BaseController  {

	protected $layout = "layouts.main";

	public function __construct() {
		parent::__construct();
	}

	/**
	 *
     */
	public function getIndex()
	{
		$this->layout->nest('content','mydashboard.index');
	}

	/**
	 * @return mixed
	 */
	public function getMytest()
	{
		$this->layout->nest('content','mydashboard.index2');
	}



	public function getTestdata(){

		//$temp= DB::select('select count(*) as count from customer');
		//return $temp[1]->count;
//		$email = DB::table('customer')->where('LastName', 'Martin')->value('customerId');
		$email = DB::select('select CustomerId as count from customer');
		for($i=0,$j=count($email);$i<$j;$i++){
			$array[]=$email[$i]->count;
		}
//		dd($array);
     	return $array;
//		return "a";
	}


}