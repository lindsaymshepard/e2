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
        
        return $this->app->view('history', ['history' => $history]);
    }
    
    public function details() 
    {
        $id = $_GET['id'];

        $history = $this->app->db()->all('history');

        for ($i = 0; $i < count($history); $i++) {
            if ($id == $history[$i]['id']) {
                $details = $history[$i];
            }
        }

        return $this->app->view('details', ['details' => $details]);
    }

    public function play()
    {
        // Moves list
        $moves = ['rock', 'paper', 'scissors'];

        // Gets moves
        $playerMove = $_GET['choice'];
        $randomMove = $moves[rand(0, 2)];

        // Gets state (tie, lost or won)
        if (strcmp($playerMove, $randomMove) == 0) {
            $winner = 'tie';
        } elseif (
            ($playerMove == 'rock' && $randomMove == 'paper') ||
            ($playerMove == 'paper' && $randomMove == 'scissors') ||
            ($playerMove == 'scissors' && $randomMove == 'rock')) {
            $winner = 'lost'; 
        } else {
            $winner = 'won';
        }

        $history = [
            'title' => $playerMove . ' vs ' . $randomMove,
            'history' => $winner,
        ];

        // Saves history into the DB
        $this->app->db()->insert('history', $history);

        return $winner;
    }
}
