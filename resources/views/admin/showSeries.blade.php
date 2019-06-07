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

        <div class="album text-muted">
            <div class="container">
                <div class="row">
                        <div class="card">
                        <img src= {{$series['poster']}} alt="Card image cap">
                        <h4 class="card-text"> {{$series['title']}} </h4>
                        <p class="card-text"> {{$series['plot']}} </p>
                        <h3>Directors:</h3> 
                        @foreach ($directors as $director)
                            <p>{{$director->people->implode('firstname', ',')}} {{$director->people->implode('lastname', ',')}}</p>
                        @endforeach
                        <h3>Writers:</h3> 
                        @foreach ($writers as $writer)
                            <p>{{$writer->people->implode('firstname', ',')}} {{$writer->people->implode('lastname', ',')}}</p>
                        @endforeach
                        <h3>Actors:</h3>
                        @foreach ($actors as $actor)
                            <p>{{$actor->people->implode('firstname', ',')}} {{$actor->people->implode('lastname', ',')}} as {{$actor['role']}}</p>
                        @endforeach
                        </div>
                    
                </div>
            </div>
        </div>

        @foreach ($season as $season)
            <div class="container">
                    <a href="/admin/series/{{$series['id']}}/seasons/{{$season['season_number']}}"><h4 class="card-text">Season: {{$season['season_number']}} </h4></a>
                    <form action="/admin/series/{{$series['id']}}/seasons/{{$season['id']}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete Season</button>
                    </form>
            </div>
        @endforeach

        <p> Add people to {{$series['name']}}: </p>
        <div class="connectPeople">
        <form id="aa-find-actors-container" class="form-inline mx-auto aa-input-container" action="/admin/series/{{$series['id']}}/connectpeople" method="post">
            {{csrf_field()}}
            <input type="hidden" name="cast_id" value="{{$series['id']}}">
            <input type="hidden" name="cast_type" value="series">  

                <input id="aa-find-actors" type="search" class="form-control aa-input-search" placeholder="Search for people" name="people_id" autocomplete="off">        
                <select name="profession_id" class="profession">
                    <option>Select profession</option>
                    <option value="1">Actor</option>
                    <option value="2">Writer</option>
                    <option value="3">Director</option>
                </select>   
                    <input type="text" class="form-control" name="role" placeholder="Role name">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Add</button>
        </div>
        </form>

        </div>
@endsection
