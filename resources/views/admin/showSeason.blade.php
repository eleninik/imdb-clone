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
        <h2>Season: {{$season['season_number']}} </h2>
        </div>           
        
        <div>
        @foreach ($episodes as $episode)
            <div class="media">
                <div class="media-left">
                    <a href="/admin/series/seasons/episodes/{{$episode['episode_number']}}">
                    <img class="media-object" src="{{$episode['thumbnail']}}" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <a href="/admin/series/{{$series['id']}}/seasons/{{$season['season_number']}}/episodes/{{$episode['episode_number']}}">
                        <h4 class="media-heading">{{$episode['title']}} | Episode: {{$episode['episode_number']}}</h4>
                    </a>
                    <p>{{$episode['plot']}}</p>
                    <div class="container">
                        <a href="/admin/series/{{$series['id']}}/{{$episode['id']}}/edit" class="btn btn-warning">Edit</a>
                    
                    <form action="/admin/series/episodes/{{$episode['id']}}" method="post">
                    {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

    </div>
@endsection
