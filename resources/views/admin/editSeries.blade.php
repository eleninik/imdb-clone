@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Edit Series</h2>
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
      <form method="post" action="/admin/series/{{$series['id']}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PUT">
          <div class="row">
            <div class="form-group col-md-4">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value="{{$series['title']}}">
                <label for="year">Year:</label>
                <input type="text" class="form-control" name="year" value="{{$series['year']}}">
                <label for="age_rating">Age Rating:</label>
                <input type="text" class="form-control" name="age_rating" value="{{$series['age_rating']}}">
                <label for="production_country_id">Production Country Id:</label>
                <input type="text" class="form-control" name="production_country_id" value="{{$series['production_country_id']}}">
                <label for="awards">Awards:</label>
                <input type="text" class="form-control" name="awards" value="{{$series['awards']}}">
            </div>
            <div class="form-group col-md-4">
                <label for="poster">Poster:</label>
                <input type="text" class="form-control" name="poster" value="{{$series['poster']}}">
                <label for="backdrop">Backdrop:</label>
                <input type="text" class="form-control" name="backdrop" value="{{$series['backdrop']}}">
                <label for="trailer">Trailer:</label>
                <input type="text" class="form-control" name="trailer" value="{{$series['trailer']}}">
                <label for="studio_id">Studio Id:</label>
                <input type="text" class="form-control" name="studio_id" value="{{$series['studio_id']}}">
                <label for="media_website">Website:</label>
                <input type="text" class="form-control" name="media_website" value="{{$series['media_website']}}">
            </div>
          </div>
          <div class="row">
              <div class="form-group col-md-8">
                <label for="full_plot">Plot:</label>
                <textarea type="text" class="form-control" name="plot" rows="8" col="50">{{$series['plot']}}</textarea>
              </div>
              <div class="form-group col-md-4">
              </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4">
              <button type="submit" class="btn btn-success" style="margin-left:38px">Update Series</button>
            </div>
          </div>
        </form>
    </div>
    
@endsection
