@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Edit User</h2>
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
<form class="form-horizontal" method="POST" action="/admin/users/{{$user['id']}}/update">
  {{csrf_field()}}
  <input name="_method" type="hidden" value="PUT">

  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <label for="name" class="col-md-4 control-label">Name</label>
      <div class="col-md-6">
          <input id="name" type="text" class="form-control" name="name" value="{{$user['name']}}" required autofocus>
          @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
      </div>
  </div>

  <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
      <label for="username" class="col-md-4 control-label">User Name</label>
      <div class="col-md-6">
          <input id="username" type="text" class="form-control" name="username" value="{{$user['username']}}" required>
          @if ($errors->has('username'))
              <span class="help-block">
                  <strong>{{ $errors->first('username') }}</strong>
              </span>
          @endif
      </div>
  </div>

  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <label for="email" class="col-md-4 control-label">E-Mail Address</label>
      <div class="col-md-6">
          <input id="email" type="email" class="form-control" name="email" value="{{$user['email']}}" required>
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
      </div>
  </div>

  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <label for="password" class="col-md-4 control-label">Password</label>

      <div class="col-md-6">
          <input id="password" type="password" class="form-control" name="password" value="{{$user['password']}}" required>
          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
      </div>
  </div>

  <div class="form-group">
      <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

      <div class="col-md-6">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{$user['password']}}" required>
      </div>
  </div>

  <div class="row">
    <div class="form-group col-md-4">
      <button type="submit" class="btn btn-success" style="margin-left:15px">Update User</button>
    </div>
  </div>
</form>
</div>

@endsection