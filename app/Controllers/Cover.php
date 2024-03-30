<?php
namespace App\Controllers;

// use App\Models\CoverModel;

class Cover extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        // $this->model = new CoverModel;
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
        return view('themes/modern/cover', $this->data);
    }
    public function post() 
    {   
        $response = $this->callApiPublic([
            'method' => 'POST', 
            'path' => $this->urlAPI . '/cover', 
            'form_params' => $_POST
        ])
        ->getBody();
        $this->data['api'] = json_decode($response, true);
        return view('themes/modern/cover', $this->data);
    }
}