@extends('templates.master')

@section('title')
    Game Details
@endsection

@section('content')
    
    <div class="details-container">
        <h2>Game Details</h2>
        <div>
              Game Round:  {{ $details['id'] }}
        </div>
        <div>
              What was the play?  {{ $details['title'] }}
        </div>
        <div>
              Results:  {{ $details['history'] }}
        </div>
    </div>
<br>
    <a href="/history">Go back to history</a>

@endsection 