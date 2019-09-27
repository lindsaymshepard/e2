<?php

$quarter_value= .25;

$coins = ['heads', 'tails'];

$moves = ['rock', 'paper', 'scissors']; /* rock paper scissor example */

$strawLengths = [2, 2, 2, 2, 2, 2, 1]; /* drawing straw example */

//$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9,];

$guesses = []; /*guessing game example */

// echo $moves[0];
// echo $moves[1];
// echo $moves[2];
// echo $moves[3];
// var_dump($moves);

// $randomNumber = rand(0, 2);

// var_dump($moves[$randomNumber]);

// $penny_value = .01;
// $nickel_value = .05;
// $dime_value = .10;
// $quarter_value = .25;

//  $coinValues = [
//     'pennies' => .01,
//     'nickels' => .05,
//     'dimes' => .10,
//     'quarters' => .25,
//     'halfDollars' => .5,
//  ];

// $coinCounts = [
//     'pennies' => 300,
//     'nickels' => 5,
//     'dimes' => 0,
//     'quarters' => 125,
//     'halfDollars' => 50,
// ];


// var_dump($coinValues);

// var_dump($coinValues['dimes']);
// var_dump ($coinCounts);

// asort($coinCounts);
// arsort($coinCounts);
// krsort($coinCounts);


// var_dump ($coinCounts);

// shuffle($cards);
// var_dump($cards);

// foreach($coinCounts as $coin => $count) {
//      var_dump('For '. $coin . ' you have: ' . $count);
// }

// $coins = [
//     'pennies' => [.01, 300],
//     'nickels' => [.05, 5],
//     'dimes' => [.10, 0],
//     'quarters' => [.25, 125],
//     'halfDollars' => [.50, 50],
// ];

// $total = 0;
// foreach ($coins as $coin => $info) {
//     $total = $total + ($info[1] * info[0]);
// }

//var_dump($total);

// $total = 0;
// foreach($coinCounts as $coin => $count) {
//     $total = $total + ($count * $coinValues[$coin]);
// }

$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//shuffle($cards);

// var_dump($cards);

// var_dump(array_pop($cards));

// var_dump($cards);

$player1Cards = array_splice($cards, 0, 5);

$player2Cards = $cards;

var_dump($player1Cards);

var_dump($player2Cards);

// $player2Cards = array_splice($cards, 6, 10);