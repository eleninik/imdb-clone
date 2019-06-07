@extends('layouts.app') 
@section('content')
@include('user.profilenav')

<main>
@if(Auth::user()->name === $user["name"])
<div class="upload">
    <h2>Select profile picture</h2>
        <img class="upload-pic" src="{{ $user['profile_picture'] }}" alt="current profile picture">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.
				<ul>
				<br>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif @if ($message = Session::get('success'))
			<div class="alert alert-success alert-block">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>{{ $message }}</strong>
			</div>
			@endif
			<form action="upload" enctype="multipart/form-data" method="POST">
				{{ csrf_field() }}
				<label class="label-image" for="image">Upload photo:</label>
					<div class="upload-button">
					<input type="file" name="image"/>
					<button type="submit">
						<i class="fas fa-cloud-upload-alt"></i>
					</button>	
				</div>
			</form>
</div>
@else
<h2>You can't view this page if you're not logged in!</h2>
@endif
</div>
</main>
@endsection