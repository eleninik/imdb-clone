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
                    @foreach ($series as $series)
                        <div class="card">
                        <img style="width: 100%" src="http://image.tmdb.org/t/p/w185/{{$series['poster']}}"  alt="Card image cap">
                        <a href="/admin/series/{{$series['id']}}"><h3 style="text-align: center"> {{$series['title']}} </h3></a>
                        <a href="{{action('Admin\AdminSeriesController@editSeries', $series['id'])}}" class="btn btn-warning">Edit</a>
                        <form action="/admin/series/{{$series['id']}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button style ="width: 100%" class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>

    </div>
          
@endsection
