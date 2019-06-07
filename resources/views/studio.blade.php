 @extends('layouts.app') 
 @section('content')

<div class="container">

	<h2>{{ $studio["name"] }}</h2>

    <h3>Movies by {{ $studio["name"] }}</h3>
    <ul>
    @foreach($movies as $movie)
        <li><a href="/movies/{{ $movie['id'] }}">{{ $movie["title"] }}</a></li>
    @endforeach
    </ul>

    <h3>Series by {{ $studio["name"] }}</h3>
    <ul>
    @foreach($series as $serie)
        <li><a href="series/{{ $serie['id'] }}">{{ $serie["title"] }}</a></li>
    @endforeach
    </ul>

</div>

@endsection