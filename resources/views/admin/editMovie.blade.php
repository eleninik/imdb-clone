@extends('layouts.app')

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
      <form method="post" action="/admin/movies/{{$movie['id']}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PUT">
          <div class="row">
            <div class="form-group col-md-4">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value="{{$movie['title']}}">
                <label for="year">Year:</label>
                <input type="text" class="form-control" name="year" value="{{$movie['year']}}">
                <label for="age_rating">Age Rating:</label>
                <input type="text" class="form-control" name="age_rating" value="{{$movie['age_rating']}}">
                <label for="released">Released:</label>
                <input type="text" class="form-control" name="released" value="{{$movie['released']}}">
                <label for="runtime">Runtime:</label>
                <input type="text" class="form-control" name="runtime" value="{{$movie['runtime']}}">
                <label for="production_country_id">Production Country Id:</label>
                <input type="text" class="form-control" name="production_country_id" value="{{$movie['production_country_id']}}">
            </div>
            <div class="form-group col-md-4">
                <label for="awards">Awards:</label>
                <input type="text" class="form-control" name="awards" value="{{$movie['awards']}}">
                <label for="poster">Poster:</label>
                <input type="text" class="form-control" name="poster" value="{{$movie['poster']}}">
                <label for="backdrop">Backdrop:</label>
                <input type="text" class="form-control" name="backdrop" value="{{$movie['backdrop']}}">
                <label for="trailer">Trailer:</label>
                <input type="text" class="form-control" name="trailer" value="{{$movie['trailer']}}">
                <label for="studio_id">Studio Id:</label>
                <input type="text" class="form-control" name="studio_id" value="{{$movie['studio_id']}}">
                <label for="media_website">Website:</label>
                <input type="text" class="form-control" name="media_website" value="{{$movie['media_website']}}">
            </div>
          </div>
          <div class="row">
              <div class="form-group col-md-8">
                <label for="short_plot">Short Plot:</label>
                <textarea type="text" class="form-control" name="short_plot" rows="4">{{$movie['short_plot']}}</textarea>
                <label for="full_plot">Full Plot:</label>
                <textarea type="text" class="form-control" name="full_plot" rows="8" col="50">{{$movie['full_plot']}}</textarea>
              </div>
              <div class="form-group col-md-4">
              </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4">
              <button type="submit" class="btn btn-success" style="margin-left:38px">Update Movie</button>
            </div>
          </div>
        </form>
    </div>
    
@endsection
