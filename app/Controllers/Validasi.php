<?php

namespace App\Controllers;

class Validasi extends BaseController
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    //GET From API
    $response = $this->callApiPublic([
      'method' => 'GET',
      'path' => $this->urlAPI . '/cover', //ganti validasi
    ])
      ->getBody();
    $this->data['api'] = json_decode($response, true);
    $this->view('validasi', $this->data);
  }
}
