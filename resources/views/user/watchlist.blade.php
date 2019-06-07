
<h1 class="wl-header"> Watchlist </h1>
    <div class="wl-flex">
        <ul class="watch"> 
            <li>T</li>
            <li>o</li>
            <br>
            <li>w</li>
            <li>a</li>
            <li>t</li>
            <li>c</li>
            <li>h</li>
        </ul>
        <div class="watchlist">
        @foreach ($moviesToWatch as $movie)
        <div class="poster-button">
            <img class="wl-poster" src="http://image.tmdb.org/t/p/w185/{{$movie->movies->implode('poster', ',')}}">
            <a href="/movies/{{$movie->movies->implode('id', ',')}}"><h2 class="wl-title">{{$movie->movies->implode('title', ',')}}</h2></a>                
                    <form action="/watchlist/watched" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="type" value="movie">
                        <input type="hidden" name="item_id" value="{{$movie->movies->implode('id', ',')}}">
                        <button class="seen" type=submit>
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </button>
                    </form>

                <form action="/watchlist/delete" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="item_id" value="{{$movie->movies->implode('id', ',')}}">
                    <input type="hidden" name="type" value="movie">
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="remove" type="submit"> 
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </form>
        </div>    
        @endforeach
        
        @foreach ($seriesToWatch as $series)
        <div class="poster-button">
            <img class="wl-poster" src="http://image.tmdb.org/t/p/w185/{{$series->series->implode('poster', ',')}}">
            <a href="/series/{{$series->series->implode('id', ',')}}"><h2 class="wl-title">{{$series->series->implode('title', ',')}}</h2></a>
            <form action="/watchlist/watched" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="type" value="series">
                <input type="hidden" name="item_id" value="{{$series->series->implode('id', ',')}}">
                <button class="seen" type=submit>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </button>
            </form>

            <form action="/watchlist/delete/" method="post">
                {{csrf_field()}}
                <input type="hidden" name="item_id" value="{{$series->series->implode('id', ',')}}">
                <input type="hidden" name="type" value="series">
                <input name="_method" type="hidden" value="DELETE">
                <button class="remove" type="submit"> 
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        @endforeach
    </div>
</div>

    <div class="wl-flex">        
        <ul class="watch">
            <li>h</li> 
            <li>a</li> 
            <li>s</li> 
            <br>
            <li>S</li>
            <li>e</li>
            <li>e</li>
            <li>n</li>
        </ul>

        <div class="watchlist">
        @foreach ($watchedMovies as $movie)
        <div class="poster-button">
            <img class ="wl-poster poster-seen" src="http://image.tmdb.org/t/p/w185/{{$movie->movies->implode('poster', ',')}}">
            <a href="/movies/{{$movie->movies->implode('id', ',')}}"><h2 class="wl-title">{{$movie->movies->implode('title', ',')}}</h2></a>

            <form action="/watchlist/delete" method="post">
                {{csrf_field()}}
                <input type="hidden" name="item_id" value="{{$movie->movies->implode('id', ',')}}">
                <input type="hidden" name="type" value="movie">
                <input name="_method" type="hidden" value="DELETE">
                <button class="remove" type="submit"> 
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </form>
            <i class="fa fa-check"aria-hidden="true"></i>    
        </div>
        @endforeach

        @foreach ($watchedSeries as $series) 
        <div class="poster-button">
            <img class ="wl-poster poster-seen" src="http://image.tmdb.org/t/p/w185/{{$series->series->implode('poster', ',')}}">
            <a href="/series/{{$series->series->implode('id', ',')}}"><h2 class="wl-title">{{$series->series->implode('title', ',')}}</h2></a>

            <form action="/watchlist/delete" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="item_id" value="{{$series->series->implode('id', ',')}}">
                    <input type="hidden" name="type" value="series">
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="remove" type="submit">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
            </form>
            <i class="fa fa-check"aria-hidden="true"></i>    
        </div>
        @endforeach
        </div>
    </div>
