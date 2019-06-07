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
                    @foreach ($people as $person)
                        <div class="card">
                        @if($person['photo'] == null)
                        <img src="{{ asset('images/silhouette.jpg') }}" alt="Card image cap">
                        @else   
                        <img src="http://image.tmdb.org/t/p/w185/{{$person['photo']}}" alt="Card image cap">
                        @endif
                        <a href="/admin/people/{{$person['id']}}"><h4 class="card-text"> {{$person['firstname']}} {{$person['lastname']}} </h4></a>
                        <a href="/admin/people/{{$person['id']}}/edit" class="btn btn-warning">Edit</a>
                        <form action="/admin/people/{{$person['id']}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>


          
@endsection
