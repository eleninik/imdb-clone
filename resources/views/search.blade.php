<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<!-- Styles -->
	<style>
		body {
			font-family: sans-serif;
		}

		.algolia-autocomplete {
			width: 100%;
		}

		.algolia-autocomplete .aa-input,
		.algolia-autocomplete .aa-hint {
			width: 100%;
		}

		.algolia-autocomplete .aa-hint {
			color: #999;
		}

		.algolia-autocomplete .aa-dropdown-menu {
			width: 100%;
			background-color: #fff;
			border: 1px solid #999;
			border-top: none;
		}

		.aa-suggestions-category {
			background-color: lightgrey;
			font-weight: bold;
		}

		.algolia-autocomplete .aa-dropdown-menu .aa-suggestion {
			cursor: pointer;
			padding: 5px 4px;
		}

		.algolia-autocomplete .aa-dropdown-menu .aa-suggestion.aa-cursor {
			background-color: #B2D7FF;
		}

		.algolia-autocomplete .aa-dropdown-menu .aa-suggestion em {
			font-weight: bold;
			font-style: normal;
		}

		.suggestion-thumbnail {
			height: 75px;
			width: 50px;
		}
	</style>
</head>

<body>

	<!-- HTML Markup -->
	<form action="/results" method="get" class="aa-input-container" id="aa-input-container">
		<input type="search" id="aa-search-input" class="aa-input-search" placeholder="Search for something..." name="search" autocomplete="off"
		/>
		<p>Search for: </p>

		<input id="filterMovies" class="radio" type="radio" name="radio" value="movies" />
		<label for="filterMovies">Movies</label>

		<input id="filterSeries" class="radio" type="radio" name="radio" value="series" />
		<label for="filterSeries">Series</label>

		<input id="filterPeople" class="radio" type="radio" name="radio" value="people" />
		<label for="filterPeople">People</label>

		<input id="filterEverything" class="radio" type="radio" name="radio" value="everything" checked />
		<label for="filterEverything">Everything</label>

		<input type="submit" value="🔎">
	</form>

	<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
	<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
	<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.js"></script>

	<!-- Initialize autocomplete menu -->
	<script src="js/amdb-autocomplete.js"></script>

	<footer>
		<a href="https://www.algolia.com">
			<img src="images/search-by-algolia" alt="Search by Algolia" />
		</a>
	</footer>
</body>

</html>