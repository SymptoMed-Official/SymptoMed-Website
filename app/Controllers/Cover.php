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
        $this->data['actionURL'] = $this->urlAdminAPI . '/cover';
        $this->view('cover', $this->data);
    }
    public function post()
    {
        //get from form data (front end)
        $response = $this->callApi([
            'method' => 'POST',
            'path' => $this->urlAdminAPI . '/cover',
            'form_params' => $_POST
        ])
            ->getBody();
        $cover = $this->request->getFile('cover');
        if (!$cover->isValid()) {
            throw new \RuntimeException($cover->getErrorString() . '(' . $cover->getError() . ')');
        }

        $coverName = $cover->getName();
        $cover->move('public/images/foto', $coverName);
        $this->data['api'] = json_decode($response, true);
        $this->data['message'] = $this->data['api']['message'];
        $this->view('cover', $this->data);
    }
}
