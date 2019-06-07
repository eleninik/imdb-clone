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
        <h2>Series: {{$series['title']}} | Season: {{$season['season_number']}} </h2>
        </div>           
        
        <div>
        
            <div class="media">
                <div class="media-top"> 
                    <img class="media-object" src="{{$episode['thumbnail']}}" alt="...">
                    </a>
                </div>
                <div class="media-body">
                        <h4 class="media-heading">{{$episode['title']}} | Episode: {{$episode['episode_number']}} | Runtime: {{$episode['runtime']}} | Released: {{$episode['released']}}</h4>
                    <p>{{$episode['plot']}}</p>
                </div>
            </div>            
        
        </div>

    </div>   
@endsection
