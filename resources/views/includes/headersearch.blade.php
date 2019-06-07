<form id="aa-input-container" class="aa-input-container" action="/results">

	<div class="header--searchbox">
		<input id="aa-search-input" type="search" class="aa-input-search" placeholder="Search...." name="search" autocomplete="off">
		
	</div>
	
	<div class="filter-box">

		<select name="filter" class="chosen-search">
			<option selected id="filterEverything" value="everything">Everything</option>
			<option id="filterMovies" value="movies">Movies</option>
			<option id="filterSeries" value="series">Series</option>
			<option id="filterPeople" value="people">People</option>
		</select>
		<span class="input-group-btn">
			<button class="btn btn-secondary search-btn" type="submit"><i class="fas fa-search"></i></button>
		</span>
	</div>


</form>