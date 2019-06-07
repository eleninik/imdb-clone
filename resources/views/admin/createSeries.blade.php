@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Add a Series</h2>
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
      <form method="post" action="/admin/series">
        {{csrf_field()}}
          <div class="row">
            <div class="form-group col-md-4">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title">
                <label for="year">Year:</label>
                <input type="text" class="form-control" name="year">
                <label for="age_rating">Age Rating:</label>
                <input type="text" class="form-control" name="age_rating">
                <label for="production_country_id">Production Country Id:</label>
                <input type="text" class="form-control" name="production_country_id">
                <label for="awards">Awards:</label>
                <input type="text" class="form-control" name="awards">
            </div>
            <div class="form-group col-md-4">
                <label for="poster">Poster:</label>
                <input type="text" class="form-control" name="poster">
                <label for="backdrop">Backdrop:</label>
                <input type="text" class="form-control" name="backdrop">
                <label for="backdrop">Trailer:</label>
                <input type="text" class="form-control" name="trailer">
                <label for="studio_id">Studio Id:</label>
                <input type="text" class="form-control" name="studio_id">
                <label for="media_website">Website:</label>
                <input type="text" class="form-control" name="media_website">
            </div>
          </div>
          <div class="row">
              <div class="form-group col-md-8">
                <label for="full_plot">Plot:</label>
                <textarea type="text" class="form-control" name="plot" rows="8" col="50"></textarea>
              </div>
              <div class="form-group col-md-4">
              </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4">
              <button type="submit" class="btn btn-success" style="margin-left:38px">Add Series</button>
            </div>
          </div>
        </form>
    </div>
    
@endsection
