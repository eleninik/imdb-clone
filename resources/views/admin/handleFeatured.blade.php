@extends('layouts.app')
<style>
.buttons {
    display: flex;
}
</style>
@section('content')
<div class="container">
      <h2>Edit Movie</h2>
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

    <h1> Add Movies and Series </h1>
    <form method="post" action="/admin/featured/attach">
        {{csrf_field()}}
        <select name="featured_id" class="select selectpicker">
          <option selected="selected" value="">Select Category</option>
          @foreach ($featured as $feat)
          <option value="{{$feat['id']}}">{{$feat['name']}}</option>
          @endforeach
        </select>
        <select name="movie_id[]" data-placeholder="Select a movie" multiple class="chosen-select">
          @foreach ($movies as $movie)
            <option value="{{$movie['id']}}">{{$movie['title']}}</option>      
          @endforeach
        </select>
        <select name="series_id[]" data-placeholder="Select a series" multiple class="chosen-select">
          @foreach ($series as $serie)
            <option value="{{$serie['id']}}">{{$serie['title']}}</option>
          @endforeach
        </select>
      
        <div class="row">
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-top:20px">Add</button>
          </div>
        </div>
    </form>


      <h1> Coming soon </h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Movies</th>
              <th colspan="3">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse($comingSoonMovies as $movies)
            <tr>
              <td>{{$movies->movies['title']}}</td>
              <td><form action="/admin/featured/delete" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="movies_id" value="{{$movies->movies['id']}}">
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger" type="submit">Delete</button>
                  </form></td>
          </td>
            </tr>
            @empty
            <tr>
              <td colspan="7">No movies added</td>
            </tr>
            @endforelse
          </tbody>
        </table>
        
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Series</th>
              <th colspan="3">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse($comingSoonSeries as $series)
            <tr>
              <td>{{$series->series['title']}}</td>
              <td><form action="/admin/featured/delete" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="series_id" value="{{$series->series['id']}}">
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger" type="submit">Delete</button>
                  </form></td>
            </tr>
            @empty
            <tr>
              <td colspan="7">No series added</td>
            </tr>
            @endforelse
          </tbody>
        </table>

        <h1> Opening </h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Movies</th>
              <th colspan="3">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse($openingMovies as $movies)
            <tr>
              <td>{{$movies->movies['title']}}</td>
              <td><form action="/admin/featured/delete" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="movies_id" value="{{$movies->movies['id']}}">
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger" type="submit">Delete</button>
                  </form></td>
            </tr>
            @empty
            <tr>
              <td colspan="7">No movies added!</td>
            </tr>
            @endforelse
          </tbody>
        </table>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Series</th>
              <th colspan="3">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse($openingSeries as $series)
            <tr>
              <td>{{$series->series['title']}}</td>
              <td><form action="/admin/featured/delete" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="series_id" value="{{$series->series['id']}}">
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger" type="submit">Delete</button>
                  </form></td>
            </tr>
            @empty
            <tr>
              <td colspan="7">No series added!</td>
            </tr>
            @endforelse
          </tbody>
        </table>

        <h1> Now playing </h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Movies</th>
              <th colspan="3">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse($nowPlayingMovies as $movies)
            <tr>
              <td>{{$movies->movies['title']}}</td>
              <td><form action="/admin/featured/delete" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="movies_id" value="{{$movies->movies['id']}}">
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger" type="submit">Delete</button>
                  </form></td>
            </tr>
            @empty
            <tr>
              <td colspan="7">No movies added!</td>
            </tr>
            @endforelse
          </tbody>
        </table>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Series</th>
              <th colspan="3">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse($nowPlayingSeries as $series)
            <tr>
              <td>{{$series->series['title']}}</td>
               <td><form action="/admin/featured/delete" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="series_id" value="{{$series->series['id']}}">
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger" type="submit">Delete</button>
                  </form></td>
            </tr>
            @empty
            <tr>
              <td colspan="7">No series added!</td>
            </tr>
            @endforelse
          </tbody>
        </table>
    </div>

    @endsection
       