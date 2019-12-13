@extends('templates.master')

@section('title')
{{ $app->config('app.name') }}

@endsection

@section('content')

<!DOCTYPE html>
<html lang='en'>

<head>

    <title>Rock, Paper, Scissors Game Simulator</title>
    <meta charset='utf-8'> 

</head>    

<body>

<header>
    <a href="/">Home</a>
    <a href="/history">History</a>
</header>

    <h1>Rock, Paper, Scissors Game Simulator</h1>
 
    <h2>Instructions</h2>
    <ul>
       <li>Player A chooses Rock, Paper, or Scissors.</li>
       <li>Player B is played by the computer</li>
       <li>A tie is declared if both players throw the same move.</li>
       <li>Rock beats Scissors, Scissors beats Paper, Paper beats Rock.</li>
    </ul>   

    <h2>Play!</h2>
     <form method= 'GET' action='play' id="form">

            <input id="rock" type='radio' value='rock'  name='choice'>
            <label for ='rock'> Rock </label>

            <input id="paper" type='radio' value='paper' name='choice'>
            <label for ='paper'> Paper </label>

            <input id="scissors" type='radio' value='scissors' name='choice'>
            <label for ='scissors'> Scissors </label>

            <button type='submit'> Choose...</button>
    </form>

    <div id="result"></div>

    <script>
        document.getElementById('form').addEventListener('submit', (event) => {
            event.preventDefault();

            // Gets choice
            let choice;
            const choices = document.getElementsByName('choice');
            for (let i = 0; i < choices.length; i++) {
                if (choices[i].checked) {
                    choice = choices[i].value;
                }
            }

            // Sends choice/play to the server
            fetch('/play?choice=' + choice)
                // .then((response) => {
                .then((res) => res.text())
                .then((response) => {

                const resultContainer = document.getElementById('result');
                let message;

                switch (response) {
                    case 'won': message = 'You won!'; break;
                    case 'lost': message = 'You lost...'; break;
                    case 'tie': message = 'It\'s a tie'; break;
                }

                resultContainer.innerHTML = message;
            });
        })
    </script>


</body>

</html>
</form>

@endsection