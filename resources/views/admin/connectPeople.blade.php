@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Add a Movie</h2>
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
      <form method="post" action="/placeholder">
        {{csrf_field()}}
          <div class="row">
            <div class="form-group col-md-4">
                <label for="movie">Movie:</label>
                <input type="text" class="form-control" name="movie">
             
                <form id="aa-find-actors-container" class="form-inline mx-auto aa-input-container">

                    <label for="aa-find-actors">Find an actor</label>
                    <input id="aa-find-actors" type="search" class="form-control aa-input-search" placeholder="Search..." name="search" autocomplete="off">
                
                </form>

            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-4">
              <button type="submit" class="btn btn-success" style="margin-left:38px">Send form</button>
            </div>
          </div>
        </form>
    </div>
    
@endsection
