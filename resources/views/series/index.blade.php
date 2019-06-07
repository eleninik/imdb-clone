@extends('layouts.app')

@section('content')
<div class="container my-2">
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



<div class="row">
    @foreach ($series as $serie)
    <div class="col-md-6 p-1 mt-2">

        <div class="row">

            <img class="col" src="http://image.tmdb.org/t/p/w185/{{ $serie['poster'] }}" alt="Missing series poster">

            <div class="col">

                <div class="row">

                    <div class="col">
                        <h3 class="title">
                            <a class="gold" href="/series/{{ $serie['id'] }}">{{ $serie['title'] }}</a>
                        </h3>
                        <span>
                            <h6 class="white subtitle">
                                <span>{{ $serie["released"] }}
                                    <i class="far fa-calendar-alt"></i>
                                </span> |
                                <span>
                                    @foreach($ratings as $rating)
                                        @if($rating["id"] === $serie["id"])
                                            {{ $rating["score"] }}
                                        @endif
                                    @endforeach
                                    <i class="fas fa-star"></i>
                                </span> |
                                <span>
                                    @foreach($serie["genres"] as $genre)
                                        {{ $genre["name"].' ' }}
                                    @endforeach
                                </span>
                            </h6>
                        </span>
                    </div>

                </div>

                <div class="row plot">
                    <span class="white col">{{ $serie["plot"] }}</span>
                </div>

            </div>

        </div>

    </div>
    @endforeach
</div>

</div>
@endsection
