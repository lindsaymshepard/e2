<?php

$moves = ['rock', 'paper', 'scissors'];

$moveIndexA = rand(0, 2);
$moveIndexB = rand(0, 2);

$moveA = $moves[$moveIndexA];
$moveB = $moves[$moveIndexB];

if (strcmp($moveA, $moveB) == 0) {
    $winner = 'Tie';
} elseif (
    ($moveA == 'rock' && $moveB == 'paper') ||
    ($moveA == 'paper' && $moveB == 'scissors') ||
    ($moveA == 'scissors' && $moveB == 'rock')) {
    $winner = 'Player B'; 
} else {
    $winner = 'Player A';
}