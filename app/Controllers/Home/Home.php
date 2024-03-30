<?php

namespace App\Controllers\Home;

class Home extends \App\Controllers\BaseController
{
	protected $urlAPI, $urlAdminAPI, $urlDoctorAPI;
	public function __construct()
	{
		parent::__construct();
		$this->urlAPI = 'https://symptomed-401211.et.r.appspot.com';
		$this->urlAdminAPI = 'https://symptomed-admin-api.herokuapp.com';
		$this->urlDoctorAPI = 'https://symptomed-doctor-api.herokuapp.com';
	}
	public function index()
	{
		$dataCallAPI = [
			'method' => 'GET',
			'path' => $this->urlAPI . '/article?type=all',
		];
		$response = $this->callApiPublic($dataCallAPI);
		$this->data['api'] = json_decode($response->getBody(), true);
		$this->data['site_title'] = 'SymptoMed, your personal healthcare solution!';
		$this->data['site_desc'] = 'SymptoMed merupakan sebuah aplikasi mobile yang bertujuan untuk mendukung pelayanan kesehatan masyarakat Indonesia secara merata, mudah, mandiri serta akurat menggunakan pendekatan kecerdasan buatan (Artificial Intelligence/AI).';
		return view('themes/modern/home/index', $this->data);
	}
};
