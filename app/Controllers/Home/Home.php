<?php

namespace App\Controllers\Home;

class Home extends \App\Controllers\BaseController
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		// $response = $this->callApiPublic([
		// 	'method' => 'GET',
		// 	'path' => $this->urlAPI . '/home',
		// ])
		// ->getBody();
		// $this->data['api'] = json_decode($response, true);
		$this->data['site_title'] = 'SymptoMed, your personal healthcare solution!';
		$this->data['site_desc'] = 'SymptoMed merupakan sebuah aplikasi mobile yang bertujuan untuk mendukung pelayanan kesehatan masyarakat Indonesia secara merata, mudah, mandiri serta akurat menggunakan pendekatan kecerdasan buatan (Artificial Intelligence/AI).';
		return view('themes/modern/home/index', $this->data);
	}
};
