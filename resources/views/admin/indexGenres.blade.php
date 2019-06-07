<style>
  input {
    margin: 20px;
  }
  
  form>button {
    margin-top: 10px;
  }

  .border {
    height: 10px;
    width: 100%;
    border-bottom: 1px solid black;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .upper-container, .upper-container>table {
    width: 50%;
  }

  .flex-row {
    display: flex;
    flex-wrap: wrap;
    
  }

  .flex-row>table {
    width: 40%;
    margin-left: 0;
    
  }

  .flex-row>table:nth-child(2) {
    margin-left: 10px;
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

    <div class="container">
      <div class="container upper-container">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
            </tr>
          </thead>
          <tbody>
          @forelse($genres as $genre)
            <tr>
              <td>{{$genre['id']}}</td>
              <td>{{$genre['name']}}</td>
            </tr>
            @empty
            <tr>
              <td colspan="7">No Genres</td>
            </tr>
            @endforelse
          </tbody>
        </table>
        <form action="/admin/genres/{{$genre['id']}}" method="post">
          {{csrf_field()}}
          <select name="genre_id[]" data-placeholder="Select Genres..." multiple class="chosen-select">
            @foreach ($genres as $genre)
            <option value="{{$genre['id']}}">{{$genre['name']}}</option>
            @endforeach
          </select>
          <input name="_method" type="hidden" value="DELETE">
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </div>

<div class="border">
</div>

      <form method="post" action="/admin/genres/attach">
        {{csrf_field()}}
        <select name="genre_id[]" data-placeholder="Select Genres..." multiple class="chosen-select">
          @foreach ($genres as $genre)
          <option value="{{$genre['id']}}">{{$genre['name']}}</option>
          @endforeach
        </select>
        <select name="movie_id" class="select selectpicker">
          <option selected="selected" value="">Select a Movie....</option>
          @foreach ($movies as $movie)
            <option value="{{$movie['id']}}">{{$movie['title']}}</option>      
          @endforeach
        </select>
        <select name="series_id" class="select selectpicker">
          <option selected="selected" value="">Select a Series....</option>
          @foreach ($series as $serie)
            <option value="{{$serie['id']}}">{{$serie['title']}}</option>
          @endforeach
        </select>
        
        <div class="row">
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-top:20px">Add Genre to Title</button>
          </div>
        </div>
      </form>

  <div class="container flex-row">

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Movie</th>
          <th>Genre</th>
          <th colspan="3">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse($genreMovies as $genreMovie)
        <tr>
          <td>{{$genreMovie['title']}}</td>
          <td>{{$genreMovie['genres']->implode('name', ',')}}</td>
          <td>
            <form action="/admin/genres/detach" method="post">
              {{csrf_field()}}
              <input name="genres" type="hidden" value="{{$genreMovie['genres']->implode('id', ',')}}">
              <input name="movie" type="hidden" value="{{$genreMovie['id']}}">
              <button class="btn btn-danger" type="submit">Detach all genres</button>
            </form>
          </td>
        </tr> 
        @empty
        <tr>
          <td colspan="7">No Genres</td>
        </tr>
        @endforelse
      </tbody>
    </table>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Series</th>
          <th>Genre</th>
          <th colspan="3">Action</th>
        </tr>
      </thead>
      <tbody>
      @forelse($genreSeries as $genreSeries)
        <tr>
          <td>{{$genreSeries['title']}}</td>
          <td>{{$genreSeries['genres']->implode('name', ',')}}</td>
          <td>
            <form action="/admin/genres/detach" method="post">
              {{csrf_field()}}
              <input name="genres" type="hidden" value="{{$genreSeries['genres']->implode('id', ',')}}">
              <input name="series" type="hidden" value="{{$genreSeries['id']}}">
              <button class="btn btn-danger" type="submit">Detach all genres</button>
            </form>
          </td>
        </tr> 
      @empty
        <tr>
          <td colspan="7">No Genres</td>
        </tr>
      @endforelse
      </tbody>
    </table>
  
  </div>
</div>    
@endsection
