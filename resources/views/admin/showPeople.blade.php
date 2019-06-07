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
                        <img src= {{$people['photo']}} alt="Card image cap">
                        <h4 class="card-text"> {{$people['firstname']}} {{$people['lastname']}} </h4>
                        <p class="card-text"> {{$people['bio']}} </p>

                        <p class="card-text"> Known for: @foreach($movies as $movie) {{$movie->movies->implode('title', ', ')}} @endforeach</p>

                        </div>
                </div>
            </div>
        </div>


          
@endsection
