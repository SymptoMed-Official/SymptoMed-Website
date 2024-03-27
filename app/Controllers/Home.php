<?php 
namespace App\Controllers;

class Home extends BaseController
{
	public function __construct() 
	{
		parent::__construct();
	}
	public function index()
	{
		$this->data ['site_title'] = 'SymptoMed, your personal healthcare solution!';
		return view('themes/modern/landing-page/public/index', $this->data);
	}

	//--------------------------------------------------------------------

}
