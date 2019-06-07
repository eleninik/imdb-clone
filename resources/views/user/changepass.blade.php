@extends('layouts.app') 
@section('content')
@include('user.profilenav')

@if(Auth::user()->name === $user["name"])

<div class="change">
    @if ($message = Session::get('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif 
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    <h2>Change Password</h2>
    
    <form action="changepw" method="POST">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">

        <label for="currentPassword">Current password: </label>
        <input name="currentPassword" type="password"></input>

        <label for="newPassword">New password: </label>
        <input name="newPassword" type="password"></input>

        <button type="submit">Submit</button>
    </form>

    @else
    <h2>You can't view this page if you're not logged in!</h2>
    @endif
</div>

@endsection