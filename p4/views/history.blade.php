@extends('templates.master')

@section('title')
    Game History
@endsection

@section('content')
    
    <h2>Game History</h2>

    /*game history content*/

<ul>
@foreach($history as $history)
    <li>{{ $history['title'] }}</li>
@endforeach
</ul>


@endsection