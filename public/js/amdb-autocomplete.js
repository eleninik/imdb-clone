// here we define all the variables we're going to need
var client = algoliasearch("RJU9ONUUDM", "64c2c49e5a1be4817ecb7a3afbc93f8b"); // this is the APPNAME and PUBLIC API KEY for our Algolia client
var movies = client.initIndex('movies');
var series = client.initIndex('series');
var people = client.initIndex('people');
var filterMovies = document.getElementById('filterMovies');
var filterSeries = document.getElementById('filterSeries');
var filterPeople = document.getElementById('filterPeople');
var filterEverything = document.getElementById('filterEverything');
var amdbAutocomplete;

// this function defines which index or indexes to search through and how to present the results 
function filter() {
    if (filterMovies.selected) {
        return autocomplete('#aa-search-input', {}, [
            {
                source: autocomplete.sources.hits(movies, { hitsPerPage: 3 }),
                displayKey: 'title',
                templates: {
                    header: '<div class="aa-suggestions-category">Movies</div>',
                    empty: '<span>empty</span>',
                    suggestion: function (suggestion) {
                        return '<span>' +
                            '<img class="suggestion-thumbnail" src="http://image.tmdb.org/t/p/w185/' + suggestion.poster + '" />' +
                            '<a href="/movies/'+suggestion.id+'">'+suggestion._highlightResult.title.value+'</a>' +
                            '</span>';
                    }
                }
            }]);
    }

    else if (filterSeries.selected) {
        return autocomplete('#aa-search-input', {}, [
            {
                source: autocomplete.sources.hits(series, { hitsPerPage: 3 }),
                displayKey: 'title',
                templates: {
                    header: '<div class="aa-suggestions-category">Series</div>',
                    empty: '<span>empty</span>',
                    suggestion: function (suggestion) {
                        return '<span>' +
                            '<img class="suggestion-thumbnail" src="http://image.tmdb.org/t/p/w185/' + suggestion.poster + '" />' +
                            '<a href="/series/'+suggestion.id+'">'+suggestion._highlightResult.title.value+'</a>' +
                            '</span>';
                    }
                }
            }]);
    }

    else if (filterPeople.selected) {
        return autocomplete('#aa-search-input', {}, [
            {
                source: autocomplete.sources.hits(people, { hitsPerPage: 3 }),
                displayKey: 'name',
                templates: {
                    header: '<div class="aa-suggestions-category">People</div>',
                    empty: '<span>empty</span>',
                    suggestion: function (suggestion) {
                        return '<span>' +
                            '<img class="suggestion-thumbnail" src="http://image.tmdb.org/t/p/w185/' + suggestion.photo + '" />' +
                            '<a href="/people/'+suggestion.id+'">'+suggestion._highlightResult.firstname.value+ ' ' +suggestion._highlightResult.lastname.value+'</a>' +
                            '</span>';
                    }
                }
            }]);
    }

    else if (filterEverything.selected) {

        return autocomplete('#aa-search-input', {}, [
            {
                source: autocomplete.sources.hits(movies, { hitsPerPage: 2 }),
                displayKey: 'title',
                templates: {
                    header: '<div class="aa-suggestions-category">Movies</div>',
                    empty: '<span>empty</span>',
                    suggestion: function (suggestion) {
                        return '<span>' +
                            '<img class="suggestion-thumbnail" src="http://image.tmdb.org/t/p/w185/' + suggestion.poster + '" />' +
                            '<a href="/movies/'+suggestion.id+'">'+suggestion._highlightResult.title.value+'</a>' +
                            '</span>';
                    }
                }
            },
            {

                source: autocomplete.sources.hits(series, { hitsPerPage: 2 }),
                displayKey: 'title',
                templates: {
                    header: '<div class="aa-suggestions-category">Series</div>',
                    suggestion: function (suggestion) {
                        return '<span>' +
                            '<img class="suggestion-thumbnail" src="http://image.tmdb.org/t/p/w185/' + suggestion.poster + '" />' +
                            '<a href="/series/'+suggestion.id+'">'+suggestion._highlightResult.title.value+'</a>' +
                            '</span>';
                    }
                }
            },
            {
                source: autocomplete.sources.hits(people, { hitsPerPage: 2 }),
                displayKey: function(suggestion) {return suggestion.firstname + suggestion.lastname},
                templates: {
                    header: '<div class="aa-suggestions-category">People</div>',
                    suggestion: function (suggestion) {
                        return '<span>' +
                            '<img class="suggestion-thumbnail" src="http://image.tmdb.org/t/p/w185/' + suggestion.photo + '" />' +
                            '<a href="/people/'+suggestion.id+'">'+suggestion._highlightResult.firstname.value+ ' ' +suggestion._highlightResult.lastname.value+'</a>' +
                            '</span>';
                    }
                }
            }
        ]);

    }

    else {
        alert('Something went terribly wrong! - Please refresh the page.');
    }
}

// this is the secondary search that finds actors for our forms
autocomplete('#aa-find-actors', {}, [
    {
        source: autocomplete.sources.hits(people, { hitsPerPage: 3 }),
        displayKey: function(suggestion) {return suggestion.firstname + ' ' + suggestion.lastname + ', '+ ' ' + suggestion.id},
        templates: {
            header: '<div class="aa-suggestions-category">people</div>',
            empty: '<span>Found nothing</span>',
            suggestion: function (suggestion) {
                return '<span>' +
                    '<img class="suggestion-thumbnail" src="http://image.tmdb.org/t/p/w185/' + suggestion.photo + '" />' +
                    suggestion._highlightResult.firstname.value + " " + suggestion._highlightResult.lastname.value + " " +"id:" + " " + suggestion.id +
                    '</span>';
            }
        }
    }]);

// this new filter should hopefully work at least as well
document.querySelector("select[name='filter']").onchange = function () {
    if (amdbAutocomplete != undefined) {
        amdbAutocomplete.autocomplete.destroy();
    }
    amdbAutocomplete = filter();
}


window.onload = filter();