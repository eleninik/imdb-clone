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
      <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Type</th>
          <th>Member Since</th>
          <th colspan="3">Action</th>
          <th colspan="3">Update</th>
        </tr>
      </thead>
      <tbody>
      @forelse($users as $user)
        <tr>
          <td>{{$user['id']}}</td>
          <td><a href="/admin/users/{{$user['id']}}">{{$user['name']}}</a></td>
          <td>{{$user['email']}}</td>
          @if ($user['type'] === 'admin')
            <td> {{ $user['type']}}
            <form action="/admin/users/{{$user['id']}}/removeAdmin" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="post">
                <button class="btn btn-danger" type="submit">Remove Admin</button>
            </form>
            </td>
          @else
          <td>
          {{ $user['type']}}
            <form action="/admin/users/{{$user['id']}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="post">
                <button class="btn btn-success" type="submit">Make Admin</button>
            </form>
          </td>  
          @endif
          <td>{{$user['created_at']}}</td>
          <td>
          @if ((\Auth::user()->id) !== $user['id']))
            <form action="/admin/users/{{$user['id']}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            @endif
          </td>
          <td>
            <form action="/admin/users/{{$user['id']}}" method="get">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="get">
                <button class="btn btn-success" type="submit">Update</button>
            </form>
          </td>
        </tr>
        @empty
          <tr>
            <td colspan="7">No users</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

<hr>
<div class="container">

<h3> Add a new user </h3>
<form class="form-horizontal" method="POST" action="/admin/users/create">
  {{csrf_field()}}
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <label for="name" class="col-md-4 control-label">Name</label>
      <div class="col-md-6">
          <input id="name" type="text" class="form-control" name="name" required autofocus>
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
          <input id="username" type="text" class="form-control" name="username" required>
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
          <input id="email" type="email" class="form-control" name="email" required>
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
          <input id="password" type="password" class="form-control" name="password" required>
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
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
      </div>
  </div>

  <div class="row">
    <div class="form-group col-md-4">
      <button type="submit" class="btn btn-success" style="margin-left:15px">Add User</button>
    </div>
  </div>
</form>
</div>

@endsection
