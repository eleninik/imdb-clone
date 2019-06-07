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
                    @foreach ($movies as $movie)
                        <div class="card">
                        
                        <img style="width: 100%" src= "http://image.tmdb.org/t/p/w185/{{$movie['poster']}}" alt="Card image cap">

                        <a href="/admin/movies/{{$movie['id']}}"><h3 style="text-align: center"> {{$movie['title']}} </h3></a>
                        <a href="/admin/movies/{{$movie['id']}}/edit" class="btn btn-warning">Edit</a>
                        <form action="/admin/movies/{{$movie['id']}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button style="width: 100%;" class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>


    </div>    
@endsection
