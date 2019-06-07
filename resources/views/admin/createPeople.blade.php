@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Add people</h2>
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
      <form method="post" action="/admin/people">
        {{csrf_field()}}
          <div class="row">
            <div class="form-group col-md-4">
                <label for="name">First name:</label>
                <input type="text" class="form-control" name="firstname">
                <label for="name">Last name:</label>
                <input type="text" class="form-control" name="lastname">
                <label for="born">Born:</label>
                <input type="text" class="form-control" name="born">
                <label for="awards">Awards:</label>
                <input type="text" class="form-control" name="awards">
                <label for="photo">Photo:</label>
                <input type="text" class="form-control" name="photo">
                <label for="bio">Bio:</label>
                <textarea type="text" class="form-control" name="bio" rows="4"></textarea>  
            </div>
    
          </div>
          <div class="row">
            <div class="form-group col-md-4">
              <button type="submit" class="btn btn-success" style="margin-left:38px">Add Person</button>
            </div>
          </div>
        </form>
    </div>
    
@endsection
