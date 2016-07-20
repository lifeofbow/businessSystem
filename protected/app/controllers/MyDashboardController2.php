<?php

class MyDashboardController2 extends BaseController  {

	protected $layout = "layouts.main";

	public function __construct() {
		parent::__construct();
	}

	public function getIndex()
	{
		$this->layout->nest('content','mydashboard.index2');
	}

}