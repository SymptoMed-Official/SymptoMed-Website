<?php
namespace App\Controllers;

class Cover extends BaseController
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
            'path' => $this->urlAPI . '/cover',
        ])
        ->getBody();
        $this->data['api'] = json_decode($response, true);
        $this->view('cover', $this->data);
    }
    public function post() 
    {   
        $response = $this->callApi([
            'method' => 'POST', 
            'path' => $this->urlAdminAPI . '/cover', 
            'form_params' => $_POST
        ])
        ->getBody();
        $this->data['api'] = json_decode($response, true);
        redirect()->to(base_url('cover'));
    }
}