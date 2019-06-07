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

        <div class="album text-muted">
            <div class="container">
                <div class="row">
                    <div class="card">
                    <h2>{{$user['name']}}</h2>
                    <h4 class="card-text"> {{$user['email']}} </h4>
                    <p class="card-text"> {{$user['type']}} </p>
                </div>
                    
                </div>
            </div>
        </div>


          
@endsection
