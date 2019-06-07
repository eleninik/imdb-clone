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
      <h1> Studios </h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
            </tr>
          </thead>
          <tbody>
          @forelse($studios as $studio)
            <tr>
              <td>{{$studio['id']}}</td>
              <td>{{$studio['name']}}</td>
            </tr>
            @empty
            <tr>
              <td colspan="7">No Studios</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>  

  <div class="container">
    <div class="jumbotron jumbotron-fluid">
        <h3> Add New Studio: </h3>
        <form method="post" action="/admin/studios" class="form-row align-items-center">
          {{csrf_field()}}
          <div style="display: flex">
                  <input type="text" class="form-control" name="name" placeholder="Type in Studio">
                  <button type="submit" class="btn btn-success">Add</button>
          </div>
        </form>
    </div>
  </div>
    
  <div class="container">
    <div class="jumbotron jumbotron-fluid">
        <h3> Delete Studio: </h3>
        <form action="/admin/studios/{{$studio['id']}}" method="post">
          {{csrf_field()}}
          <select name="studio_id[]" data-placeholder="Select Studios..." multiple class="chosen-select">
            @foreach ($studios as $studio)
            <option value="{{$studio['id']}}">{{$studio['name']}}</option>
            @endforeach
          </select>
          <input name="_method" type="hidden" value="DELETE">
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
  </div>




  <div class="container">
    <div class="jumbotron jumbotron-fluid">
    <h3> Connect Movie and Series to Studio: </h3>
      <form method="post" action="/admin/studios/attach" class="form-row align-items-center">
        {{csrf_field()}}
        <select name="studio_id[]" data-placeholder="Select Studios..." multiple class="chosen-select">
          @foreach ($studios as $studio)
          <option value="{{$studio['id']}}">{{$studio['name']}}</option>
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
          @foreach ($series as $series)
            <option value="{{$series['id']}}">{{$series['title']}}</option>
          @endforeach
        </select>
        
        <div class="row">
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-top:20px">Add Studios to Title</button>
          </div>
        </div>
      </form>
    </div>
  </div>    


  <div class="container">
      <h1> Detach Studios </h3>
      <div class="container flex-row">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Movie</th>
              <th>Studio</th>
              <th colspan="3">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse($studioMovies as $studioMovie)
            <tr>
              <td>{{$studioMovie['title']}}</td>
              <td>{{$studioMovie['studios']->implode('name', ',')}}</td>
              <td>
                <form action="/admin/studios/detach" method="post">
                  {{csrf_field()}}
                  <input name="studios" type="hidden" value="{{$studioMovie['studios']->implode('id', ',')}}">
                  <input name="movie" type="hidden" value="{{$studioMovie['id']}}">
                  <button class="btn btn-danger" type="submit">Detach</button>
                </form>
              </td>
            </tr> 
            @empty
            <tr>
              <td colspan="7">No Studios</td>
            </tr>
            @endforelse
          </tbody>
        </table>
    
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Series</th>
              <th>Studio</th>
              <th colspan="3">Action</th>
            </tr>
          </thead>
          <tbody>
          @forelse($studioSeries as $studioSeries)
            <tr>
              <td>{{$studioSeries['title']}}</td>
              <td>{{$studioSeries['studios']->implode('name', ',')}}</td>
              <td>
                <form action="/admin/studios/detach" method="post">
                  {{csrf_field()}}
                  <input name="studios" type="hidden" value="{{$studioSeries['studios']->implode('id', ',')}}">
                  <input name="series" type="hidden" value="{{$studioSeries['id']}}">
                  <button class="btn btn-danger" type="submit">Detach</button>
                </form>
              </td>
            </tr> 
          @empty
            <tr>
              <td colspan="7">No Studios</td>
            </tr>
          @endforelse
          </tbody>
        </table>
      </div>
    </div>
</div>    
@endsection