<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home Page';
        return $this->smartyView('home', $data);
    }
}