@extends('layouts.app') 
@section('content')
@include('user.profilenav')

<div class="change">
@if(Auth::user()->name === $user["name"])

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

    <h2>Delete Account</h2>
    <strong>Warning! A deleted account cannot be recovered.</strong>
    <br>
    <br>
    <form action="delete" method="POST">

        {{ csrf_field() }}
        <input name="_method" type="hidden" value="DELETE">

        <label for="currentPassword">Current password: </label>
        <input name="currentPassword" type="password"></input>

        <button class="delete" type="submit">Delete  <i class="fas fa-frown"></i>

</button>

    </form>

@else
<h2>You can't view this page if you're not logged in!</h2>
@endif
</div>

@endsection