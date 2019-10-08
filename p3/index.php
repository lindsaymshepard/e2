<?php require 'index-controller.php'; ?>
<!doctype html>
<html lang='en'>

<head>

    <title>Rock, Paper, Scissors Game Simulator</title>
    <meta charset='utf-8'> 

</head>    

<body>

    <h1>Rock, Paper, Scissors Game Simulator</h1>
 
    <h2>Instructions</h2>
    <ul>
       <li>Player A chooses Rock, Paper, or Scissors.</li>
       <li>Player B is played by the computer</li>
       <li>A tie is declared if both players throw the same move.</li>
       <li>Rock beats Scissors, Scissors beats Paper, Paper beats Rock.</li>
    </ul>   

    <h2>Play!</h2>
     <form method= 'GET' action= 'process.php'>

            <input id="rock" type='radio' value='0'  name='choice'>
            <label for ='rock'> Rock </label>

            <input id="paper" type='radio' value='1' name='choice'>
            <label for ='paper'> Paper </label>

            <input id="scissors" type='radio' value='2' name='choice'>
            <label for ='scissors'> Scissors </label>

            <button type='submit'> Choose...</button>
    </form>

    <?php if($showResults) { ?>
    <ul>
        <li>You chose: <?php echo $results['choice a']; ?> </li>
        <li>Player B chose: <?php echo $results['choice b']; ?></li>
        <li><?=$results['winner']?></li>
      </ul>
    <?php } ?>

</body>

</html>