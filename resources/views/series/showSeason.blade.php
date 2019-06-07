@extends('layouts.app')

@section('content')
    <div class="container">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
      @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
      @endif
        <div>
        <h2 class="gold">Series: {{$series['title']}} | Season: {{$season['season_number']}} </h2>
        </div>           
        
        <div>
        @foreach ($episodes as $episode)
            <div class="media">
                <div class="media-left">
                    <a href="/series/{{$series['id']}}/seasons/{{$season['season_number']}}/episodes/{{$episode['episode_number']}}">
                    <img class="media-object" src="{{$episode['thumbnail']}}" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <a href="/series/{{$series['id']}}/seasons/{{$season['season_number']}}/episodes/{{$episode['episode_number']}}">
                        <h4 class="gold media-heading">{{$episode['title']}} | Episode: {{$episode['episode_number']}}</h4>
                    </a>
                    <p class="white">{{$episode['plot']}}</p>
                 
                </div>
            </div>
        @endforeach
        </div>

          
@endsection
