<?php

session_start();

$moves = ['rock', 'paper', 'scissors'];

$moveIndexA = $_GET['choice'];
$moveIndexB = rand(0, 2);

$moveA = $moves[$moveIndexA];
$moveB = $moves[$moveIndexB];

if (strcmp($moveA, $moveB) == 0) {
    $winner = 'Tie :|';
} elseif (
    ($moveA == 'rock' && $moveB == 'paper') ||
    ($moveA == 'paper' && $moveB == 'scissors') ||
    ($moveA == 'scissors' && $moveB == 'rock')) {
    $winner = 'You Lost :('; 
} else {
    $winner = 'You Won!';
}

$results = [
    'winner' => $winner,
    'choice a' => $moveA,
    'choice b' => $moveB
];

$_SESSION['results'] = $results;

header('Location: index.php');
