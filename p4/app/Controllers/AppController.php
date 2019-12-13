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
        $history = $this->app->db()->all('history');

        dump($history);

        return $this->app->view('history', ['history' => $history]);
    }

    public function details() 
    {
        return $this->app->view('details');
    }
}
