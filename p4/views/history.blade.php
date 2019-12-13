@extends('templates.master')

@section('title')
    Game History
@endsection

@section('content')
    
    <h2>Game History</h2>

<ul>
@foreach($history as $history)
    <li><a href="/details?id={{ $history['id'] }}">{{ $history['title'] }} ({{ $history['history'] }})</a></li>
@endforeach
</ul>


@endsection