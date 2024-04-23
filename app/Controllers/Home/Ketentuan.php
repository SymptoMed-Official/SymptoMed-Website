<?php

namespace App\Controllers\Home;

class Ketentuan extends \App\Controllers\BaseController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $this->data['site_title'] = 'SymptoMed, your personal healthcare solution!';
    $this->data['site_desc'] = 'SymptoMed merupakan sebuah aplikasi mobile yang bertujuan untuk mendukung pelayanan kesehatan masyarakat Indonesia secara merata, mudah, mandiri serta akurat menggunakan pendekatan kecerdasan buatan (Artificial Intelligence/AI).';
    return view('themes/modern/home/ketentuan', $this->data);
  }
};
