@extends('layouts.app')
@include('layouts.errormessage')

@section('content')
<!-- Background movie image -->
<div class="top">
    <div class="movieImageContainer">
        <img class="img-fluid movieImage" src= "http://image.tmdb.org/t/p/w1280/{{$movie->backdrop}}"  alt="movie image">
    </div>

    <!-- Title and description of movie -->
    <section class="series-description">
        <div class="series-title-rating">    
        <h1 class="series-title gold"> {{$movie->title}}</h1>
        <div class="series-avarage">
        <input class="star" type="hidden" id="star-10" name="star" value="10" />
        <label class="star checked big" for="star-10"></label> {{$avarageRating}} <i class="fas fa-star"></i> <p>Votes: {{$votes}}</p>
        </div>
        </div>        

        <ul class="series-time">
        <li class="grey">Released in {{$movie['year']}}</li>
        <li class="white">|</li>
        <li class="grey">{{$movie['runtime']}} </li>
        <li class="white">|</li>
        @foreach($genres as $genre)
        <li class="grey">{{$genre->genres->name}}  </li>
        @endforeach
        <li class="white">|</li>
        @foreach($studios as $studio)
        <li class="grey">{{$studio->studios->name}}</li>
        @endforeach
        <li class="white">|</li>
        @foreach ($directors as $director)
        <li class="grey"><a class="gold" href="/people/{{$director->people->implode('id', ',')}}">{{$director->people->implode('firstname', ',')}} {{$director->people->implode('lastname', ',')}}</a></li>
        @endforeach
        <li class="white">|</li>
        <li class="grey">{{$movie['age_rating']}} </li>
        </ul>

        <p class="series-plot"> {{$movie->short_plot}} </p>


        <form action="/rating" method="post">
        {{ csrf_field() }}
            <input type="hidden" name="rateable_id" value="{{$movie->id}}" />
            <input type="hidden" name="model" value="movie" />
            <fieldset class="rating">
                <input class="star" type="submit" id="star-10" name="star" value="10" />
                <label class="star" for="star-10" ></label> 
                <input class="star" type="submit" id="star-9" name="star" value="9" />
                <label class="star" for="star-9" ></label> 
                <input class="star" type="submit" id="star-8" name="star" value="8" />
                <label class="star" for="star-8" ></label> 
                <input class="star" type="submit" id="star-7" name="star" value="7" />
                <label class="star" for="star-7" ></label> 
                <input class="star" type="submit" id="star-6" name="star" value="6" />
                <label class="star" for="star-6" ></label>
                <input class="star" type="submit" id="star-5" name="star" value="5" />
                <label class="star" for="star-5" ></label>
                <input class="star" type="submit" id="star-4" name="star" value="4" />
                <label class="star" for="star-4"></label>
                <input class="star" type="submit" id="star-3" name="star" value="3" />
                <label class="star" for="star-3"></label>
                <input class="star" type="submit" id="star-2" name="star" value="2" />
                <label class="star" for="star-2" ></label>
                <input class="star" type="submit" id="star-1" name="star" value="1" />
                <label class="star" for="star-1" title=" 1 "></label>
            </fieldset>
        </form>
        <div class="your-rating">
            @if (\Auth::user())
            @if(!$userRating['rating'])
                <p>Rate This!</p>
            @else
                <p> Your Rating: {{$userRating['rating']}}</p>
            @endif
            @endif
            @if (!\Auth::user())
                <p>{{$userRating}}</p>
            @endif
        </div>
    </section>
</div>
<!-- Main movie content -->
<section class="series-mainContent">
    <!-- Info about movie and watch lists -->
    <section class="seriesInfo">
        <!-- Movie poster-->
        <div class="together">
            <img class="moviePoster" src="http://image.tmdb.org/t/p/w185/{{$movie->poster}}" alt="movie poster">         
            
            <form action="/watchlist/add" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="item_id" value="{{$movie->id}}" />
                <input type="hidden" name="type" value="movie" />
                <button type="submit" class="series-addwatchlist"> Add to Watchlist </button>
            </form>
            
            <form action="
            mailto:someone@example.com?Subject=Check%20out%20this%20movie!
            &body=Hi,%20I%20think%20you'd%20really%20like%20this%20movie!
            %0Ahttp://dev.amdb.lndgrn.xyz/movies/{{ $movie['id'] }}
            " 
            method="post">
            <button type="submit" class="series-addwatchlist"> Recommend this to a friend </button>
            </form> 
        
    
            @if (\Auth::user())
                <button class="series-addwatchlist" type="button" class="hiddenbutton" data-toggle="collapse" data-target="#leave-review"> 
                    Add Your Review
                </button>
            @endif    
            
            <!-- Director, Writer, Rating -->
            <ul class="movieDataInfo">
            <div class="info-series">
            @foreach ($directors as $director)  
                    <li class="grey"> Director </li>
                    <li class="white"> {{$director->people->implode('firstname', ',')}} {{$director->people->implode('lastname', ',')}} </li>
                @endforeach
                @foreach ($writers as $writer)
                <li class="grey"> Writer </li>
                <li class="white"> {{$writer->people->implode('firstname', ',')}} {{$writer->people->implode('lastname', ',')}} </li>
                @endforeach
            </div>    
                <div class="awards">
                    <li class="grey"> Awards</li>
                    <li class="white"> {{$movie->awards}}</li>
                </div>    
            </ul>
        </div>    
    </section>
           
    <section class="trailerAndInfo">
        <!-- Movie trailer -->
        <iframe class="trailer" src="https://youtube.com/embed/{{$movie->trailer}}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            <!-- Cast -->
            <h3> Cast</h3>
            <section class="cast">
                @foreach ($actors as $actor)
                <div class="series-actor">
                    <img class="series-actorMini" src="http://image.tmdb.org/t/p/w185/{{$actor->people->implode('photo', ',')}}" alt="actor mini">
                    <h5><a href="/people/{{$actor->people->implode('id', ',')}}">{{$actor->people->implode('firstname', ',')}} {{$actor->people->implode('lastname', ',')}}</a> as {{$actor->role}}</h5>
                </div>       
                @endforeach
            </section>

            <section class="storyline">
                <button type="button" class="hiddenbutton" data-toggle="collapse" data-target="#storyline"><h3>Storyline</h3></button>
                <hr>
                <div id="storyline" class="collapse">
                    <p>{{$movie->full_plot}} </p>
                </div>
            </section>

            <section class="reviews">
            <h3> Reviews by users</h3>
            <hr>  
            @if (\Auth::user())
                <div id="leave-review" class="collapse"> 
                    <form class="form-review" action="/review" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="rateable_id" value="{{$movie->id}}" />
                        <input type="hidden" name="model" value="movie" />   
                            @if ($userRating == null)                      
                            <p> Rate this!</p>
                            <fieldset class="rating">
                            <input class="star" type="input" id="star-10" name="star" value="10" />
                            <label class="star" for="star-10" ></label> 
                            <input class="star" type="input" id="star-9" name="star" value="9" />
                            <label class="star" for="star-9" ></label> 
                            <input class="star" type="input" id="star-8" name="star" value="8" />
                            <label class="star" for="star-8" ></label> 
                            <input class="star" type="input" id="star-7" name="star" value="7" />
                            <label class="star" for="star-7" ></label> 
                            <input class="star" type="input" id="star-6" name="star" value="6" />
                            <label class="star" for="star-6" ></label>
                            <input class="star" type="input" id="star-5" name="star" value="5" />
                            <label class="star" for="star-5" ></label>
                            <input class="star" type="input" id="star-4" name="star" value="4" />
                            <label class="star" for="star-4"></label>
                            <input class="star" type="input" id="star-3" name="star" value="3" />
                            <label class="star" for="star-3"></label>
                            <input class="star" type="input" id="star-2" name="star" value="2" />
                            <label class="star" for="star-2" ></label>
                            <input class="star" type="input" id="star-1" name="star" value="1" />
                            <label class="star" for="star-1" title=" 1 "></label>
                        </fieldset>
                            @else 
                            <input type="hidden" name="star" value="{{$userRating->rating}}">
                                <p class="current-rating"> Your current rating: 
                            <label class="star checked" for="star-10"></label> {{$userRating->rating}} </p>
                            @endif
                            
                            <div class="form-group series-rating">
                                <input type="hidden" name="{{ \Auth::user()->name }}">
                                <input type="hidden" name="{{ \Auth::user()->id }}">
                                <input type="hidden" name="reviewable_id" value="{{$movie->id}}" />
                                <input type="hidden" name="model" value="movies" />  
                                <input class="form-title" type="text" id="title" name="title" placeholder="Title">
                                <textarea class="form-control" id="body" name="body" rows="3" placeholder="Text"></textarea>
                                <button class="share" type="submit">
                                    <i class="far fa-envelope"></i>
                                </button>
                            </div>
                           
                        </form>
                    </div>
                    @endif    

                @foreach ($reviews as $review)
                    <p class="review-info"> <img class="profil-mini-mini" src="{{$review->user['profile_picture']}}"> | Review by {{$review['user_name']}} | {{$review['created_at']}} | <i class="far fa-star small"></i> {{$review->rating['rating']}}/10</p> 
                        <div class="review-body">
                            <h5 class="title-review"> {{$review->title}} </h5>
                            <p class="body"> {{$review->body}} </p>
                        </div>
                    @if(\Auth::user())
                        @if ($review['user_id'] == \Auth::user()->id )
                        <form action="/review/delete/{{$review['id']}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="delete-review" type="submit"> Delete review!</button>
                        </form> 
                        @endif
                    @endif    
                    @if(\Auth::user())
                    <section class="comments">    
                        
                        <div id="comments"> 

                            <form action="/comment" method="post">
                                {{ csrf_field() }}
                                <div class="form-group series-rating">
                                    <input type="hidden" name="user_name" value="{{ \Auth::user()->user_name }}">
                                    <input type="hidden" name="user_id" value="{{ \Auth::user()->id }}">
                                    <input type="hidden" name="review_id" value="{{$review['id']}}">
                                    <div class="user-bubble">
                                        <img class="profil-mini" src="{{ \Auth::user()->profile_picture }}" alt=""> 
                                        <textarea class="form-control" id="body" name="body" rows="1" placeholder="Leave your comment"></textarea>
                                        <button class="nothing" type="submit"> 
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif

                
                    @foreach ($review->comments as $comment)
                        <div class="review-comment">
                            <div class="user-bubble">
                                <img class="profil-mini-mini" src="{{ $comment->user['profile_picture']}}"> 
                                    <div class="bubble">
                                    @if(\Auth::user())
                                        @if ($comment['user_id'] == \Auth::user()->id)
                                        <form action="/comment/delete/{{$comment['id']}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="remove-comment" type="submit"> Delete comment! </button>
                                        </form>
                                        @endif
                                    @endif                                            
                                        <h5 class="name"> {{$comment['user_name']}} | {{$comment->created_at}} </h5> 
                                    </div>
                            </div> 
                                <p> {{$comment['body']}} </p>
                        </div>    
                    @endforeach
                @endforeach
            </section>
    </section>
</section>
@endsection