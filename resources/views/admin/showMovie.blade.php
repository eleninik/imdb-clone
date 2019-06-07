<style>

.form {
    display: flex;
    flex: 1;
}

.flex {
    display: flex;
}

.poster{
    margin-right: 15px;
}


</style>

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

      <div class="jumbotron jumbotron-fluid flex">
        <img src="http://image.tmdb.org/t/p/w185/{{$movie->poster}}" alt="Card image cap" class="poster">
            <div>
            <h1 class="card-text"> {{$movie->title}} </h1>
            <p class="card-text"> {{$movie->short_plot}} </p>
            <p class="card-text"> {{$movie->genres->implode('name', ', ')}} </p>
        </div>
      </div>

      <div class="jumbotron jumbotron-fluid">
<h1> Cast </h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope ="col">Profession</th>
                        <th scope ="col">Name</th>
                        <th scope ="col">Role</th>
                    </tr>
                </thead>


                <tbody>
                  <tr>
                @forelse ($directors as $director)
                    <th scope="row"> Director </th> 
                    <td>{{$director->people->implode('firstname', ',')}} {{$director->people->implode('lastname', ',')}}</td>
                    <td></td>
                  </tr>
                    @empty
                      <tr>
                        <td colspan="7">No Director!</td>
                      </tr>
                @endforelse  
                <tr>  
                @forelse ($writers as $writer)
                    <th scope="row"> Writer </th> 
                    <td> {{$writer->people->implode('firstname', ',')}} {{$writer->people->implode('lastname', ',')}} </td>
                    <td></td>
                </tr>  
                @empty
                  <tr>
                    <td colspan="7">No Writer!</td>
                  </tr>
                @endforelse 
                <tr>
                @forelse ($actors as $actor)
                    <th scope="row"> Actor/Actress </th>
                    <td> {{$actor->people->implode('firstname', ',')}} {{$actor->people->implode('lastname', ',')}} </td>
                    <td> {{$actor->role}} </td>
                </tr>  
                @empty
                  <tr>
                    <td colspan="7">No Actors!</td>
                  </tr>
                @endforelse       
                </tbody>
                      </table>
                </div>
            </div>
        </div>                

    <div class="container">
    <div class="jumbotron jumbotron-fluid">
        <h3> Add people to movie: </h3>
            <form id="aa-find-actors-container" class="form-inline mx-auto aa-input-container" action="/admin/movie/{{$movie['id']}}/attachPeople" method="post">
                {{csrf_field()}}
                <input type="hidden" name="cast_id" value="{{$movie['id']}}">
                <input type="hidden" name="cast_type" value="movie">  
                <div class="form">
                    <input id="aa-find-actors" type="search" class="form-control aa-input-search" placeholder="Search for people" name="people_id" autocomplete="off">        
                    <select name="profession_id" class="profession">
                        <option>Select profession</option>
                        <option value="1">Actor</option>
                        <option value="2">Writer</option>
                        <option value="3">Director</option>
                    </select>   
                        <input type="text" class="form-control" name="role" placeholder="Type in role name">
                    <button type="submit" class="btn btn-success" style="margin-left:38px">Add person to movie</button>
                </div>
            </form>
        </div>

        <div class="jumbotron jumbotron-fluid">
        <h3> Delete people from movie: </h3>
        <form method="post" action="/admin/movie/{{$movie['id']}}/deletePeople">
            {{csrf_field()}}
            <input type="hidden" name="cast_id" value="{{$movie['id']}}">
            <input type="hidden" name="cast_type" value="movie">  
            <select name="people_id[]" data-placeholder="Select People..." multiple class="chosen-select">
            @foreach ($directors as $director)
            <option value="{{$director->people->implode('id', ',')}}">Director: {{$director->people->implode('firstname', ',')}} {{$director->people->implode('lastname', ',')}}</option>
            @endforeach

            @foreach ($writers as $writer)
            <option value="{{$writer->people->implode('id', ',')}}">Writer: {{$writer->people->implode('firstname', ',')}} {{$writer->people->implode('lastname', ',')}}</option>
            @endforeach

            @foreach ($actors as $actor)
            <option value="{{$actor->people->implode('id', ',')}}">{{$actor->people->implode('firstname', ',')}} {{$actor->people->implode('lastname', ',')}} as {{$actor->role}}</option>
            @endforeach
            </select>
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
        </form>    
    </div>
</div>
@endsection
