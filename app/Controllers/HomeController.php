<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $this->render('home', ['title' => APP_NAME]);
    }

    public function test()
    {
        $this->render('test', ['title' => APP_NAME]);
    }
}