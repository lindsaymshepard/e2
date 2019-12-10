<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        return $this->app->view('index');
    }

    public function history() 
    {
        return $this->app->view('history');
    }

    public function details() 
    {
        return $this->app->view('details');
    }
}
