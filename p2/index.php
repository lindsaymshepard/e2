<?php require 'index-controller.php'; ?>
<!doctype html>
<html lang='en'>

<head>

    <title>Rock, Paper, Scissors Game Simulator</title>
    <meta charset='utf-8'> 

</head>    

<body>

    <h1>Rock, Paper, Scissors Game Simulator</h1>
 
    <h2>Mechanics</h2>
    <ul>
       <li>Player A and Player B choose Rock, Paper, or Scissors.</li>
       <li>A tie is declared if both players throw the same move.</li>
       <li>Rock beats Scissors, Scissors beats Paper, Paper beats Rock.</li>
    </ul>   

    <h2>Results</h2>
    <ul>
        <li>Player A: <?=$moveA?></li>
        <li>Player B: <?php echo $moveB; ?></li>
        <li>Winner: <?php echo $winner; ?></li>
     </ul>   

</body>

</html>