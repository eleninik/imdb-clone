@extends('layouts.app') 

@section('content')
<div class="container">
	<div class="row">
		<h1 class="gold">Results for {{ $query }} in {{ $filter }}</h1>
	</div>

	<hr class="row">
	@if($filter === "everything")

		<div class="row">
			<h2 class="gold">Movies</h2>
		</div>
		
		<div class="row">
			<div class="list-group">
				@foreach($movieResults["hits"] as $movieResult)
				<a href="/movies/{{ $movieResult['id'] }}" class="result list-group-item list-group-item-action flex-column align-items-start">
		
					<div class="d-flex w-100">
						<h5 class="gold result-title">{{ $movieResult["title"] }}</h5>
						<span>&nbsp;| {{ $movieResult["year"] }}
							<i class="far fa-calendar-alt"></i>&nbsp;</span>
						<span>|
							@foreach($ratings as $rating) 
								@if($rating["id"] === $movieResult["id"])
										{{ $rating["score"] }}
								@endif
							@endforeach
							<i class="fas fa-star"></i>
						</span>
					</div>
		
					<div class="d-flex">
						<img class="result-thumbnail" src="http://image.tmdb.org/t/p/w185/{{ $movieResult['poster'] }}" alt="Missing movie poster">
						<p class="white ml-2">{{ $movieResult["short_plot"] }}</p>
					</div>
				</a>
				@endforeach
			</div>
		</div>
		<hr class="row">
		<div class="row">
			<h2 class="gold">Series</h2>
		</div>
		
		<div class="row">
			<div class="list-group">
				@foreach($seriesResults["hits"] as $seriesResult)
				<a href="/series/{{ $seriesResult['id'] }}" class="result list-group-item list-group-item-action flex-column align-items-start">
		
					<div class="d-flex w-100">
						<h5 class="result-title gold">{{ $seriesResult["title"] }}</h5>
						<span>&nbsp;| {{ $seriesResult["year"] }}
							<i class="far fa-calendar-alt"></i>&nbsp;</span>
						<span>| 
							@foreach($ratings as $rating)
								@if($rating["id"] === $seriesResult["id"])
										{{ $rating["score"] }}
								@endif
							@endforeach
							<i class="fas fa-star"></i>
						</span>
					</div>
		
					<div class="d-flex">
						<img class="result-thumbnail" src="http://image.tmdb.org/t/p/w185/{{ $seriesResult['poster'] }}" alt="Missing series poster">
						<p class="white ml-2">{{ $seriesResult["plot"] }}</p>
					</div>
				</a>
				@endforeach
			</div>
		</div>

		<hr class="row">

		<div class="row">
			<h2 class="gold">People</h2>
		</div>
		
		<div class="row">
			<div class="list-group">

			@foreach($peopleResults["hits"] as $peopleResult)
			<a href="/people/{{ $peopleResult['id'] }}" class="result list-group-item list-group-item-action flex-column align-items-start">
		
					<div class="d-flex w-100">
						<h5 class="gold result-title">{{ $peopleResult["firstname"].'&nbsp;'.$peopleResult["lastname"] }}</h5>
						<span>&nbsp;| {{ $peopleResult["born"] }}
								<i class="far fa-calendar-alt"></i>&nbsp;</span>
						<span>
					</div>
		
					<div class="d-flex">
						<img class="result-thumbnail" src="http://image.tmdb.org/t/p/w185/{{ $peopleResult['photo'] }}" alt="">
						<p class="white ml-2">{{ $peopleResult["bio"] }}</p>
					</div>
			</a>
			@endforeach
		
			</div>
		</div>

		<hr class="row">

	@elseif($filter === "movies")
		<div class="row">
				<div class="list-group">
					@foreach($results as $result)
					<a href="/movies/{{ $result['id'] }}" class="result list-group-item list-group-item-action flex-column align-items-start">
			
						<div class="d-flex w-100">
							<h5 class="gold result-title">{{ $result["title"] }}</h5>
							<span>&nbsp;| {{ $result["year"] }}
								<i class="far fa-calendar-alt"></i>&nbsp;</span>
							<span>| 
								@foreach($ratings as $rating)
									@if($rating["id"] === $result["id"])
											{{ $rating["score"] }}
									@endif
								@endforeach
								<i class="fas fa-star"></i>
							</span>
						</div>
			
						<div class="d-flex">
							<img class="result-thumbnail" src="http://image.tmdb.org/t/p/w185/{{ $result['poster'] }}" alt="Missing movie poster">
							<p class="white ml-2">{{ $result["short_plot"] }}</p>
						</div>
					</a>
					@endforeach
				</div>
		</div>
		<hr class="row">
	@elseif($filter === "series")
		<div class="row">
			<div class="list-group">
				@foreach($results as $result)
				<a href="/series/{{ $result['id'] }}" class="result list-group-item list-group-item-action flex-column align-items-start">
		
					<div class="d-flex w-100">
						<h5 class="gold result-title">{{ $result["title"] }}</h5>
						<span>&nbsp;| {{ $result["year"] }}
							<i class="far fa-calendar-alt"></i>&nbsp;</span>
						<span>|
							@foreach($ratings as $rating) 
								@if($rating["id"] === $result["id"])
										{{ $rating["score"] }}
								@endif
							@endforeach
							<i class="fas fa-star"></i>
						</span>
					</div>
		
					<div class="d-flex">
						<img class="result-thumbnail" src="http://image.tmdb.org/t/p/w185/{{ $result['poster'] }}" alt="Missing series poster">
						<p class="white ml-2">{{ $result["plot"] }}</p>
					</div>
				</a>
				@endforeach
			</div>
		</div>

		<hr class="row">
	@elseif($filter === "people")

		<div class="row">
				<div class="list-group">

				@foreach($results as $result)
				<a href="/people/{{ $result['id'] }}" class="result list-group-item list-group-item-action flex-column align-items-start">
			
						<div class="d-flex w-100">
							<h5 class="gold result-title">{{ $result["firstname"].'&nbsp;'.$result["lastname"] }}</h5>
							<span>&nbsp;| {{ $result["born"] }}
									<i class="far fa-calendar-alt"></i>&nbsp;</span>
							<span>
						</div>
			
						<div class="d-flex">
							<img class="result-thumbnail" src="http://image.tmdb.org/t/p/w185/{{ $result['photo'] }}" alt="">
							<p class="white ml-2">{{ $result["bio"] }}</p>
						</div>
				</a>
				@endforeach
			
				</div>
		</div>
		<hr class="row">

	@endif
</div>
@endsection
