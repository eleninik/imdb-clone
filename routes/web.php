<?php

use Illuminate\Http\Request;
use App\Contracts\Search;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/', 'IndexController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/movies', 'MoviesController@index');
Route::get('/movies/{movie}', 'MoviesController@show');
Route::get('/series', 'SeriesController@index');
Route::get('/series/{series}', 'SeriesController@show');
Route::get('/series/{series}/seasons/{season}', 'SeriesController@showSeason');
Route::get('/series/{series}/seasons/{season}/episodes/{episode}', 'SeriesController@showEpisode');

Route::post('/rating', 'RatingController@store');
Route::post('/comment', 'CommentController@store');
Route::delete('/comment/delete/{id}', 'CommentController@destroy');
Route::post('/review', 'ReviewController@store');
Route::delete('/review/delete/{id}', 'ReviewController@delete');

Route::post('/watchlist/add', 'WatchlistController@store');
Route::post('/watchlist/watched', 'WatchlistController@watched');
Route::delete('/watchlist/delete', 'WatchlistController@destroy');

Route::get('/people/{id}', 'PeopleController@show');

Route::get('/search', function() {
    return view('search');
});
Route::get('/results', 'SearchController@results');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/user/profile/{username}', 'UserController@profile');
    Route::get('user/profile/{username}/pic', 'UserController@picture');
    Route::post('user/profile/{username}/upload', 'UploadController@uploadProfilePic');
    Route::get('user/profile/{username}/pw', 'UserController@password');
    Route::put('user/profile/{username}/changepw', 'ChangePasswordController@changePassword');
    Route::get('user/profile/{username}/deleteacc', 'UserController@deleteAcc');
    Route::delete('user/profile/{username}/delete', 'DeleteAccountController@deleteAccount');
});

Route::get('/studio/{id}', 'StudioController@show');

Route::get('/admin', function () {
    return view('admin');
})->middleware('admin');

//Movie Routes
Route::group(['middleware' => ['admin']], function() {
    Route::get('/admin/movies', 'Admin\AdminMovieController@index');
    Route::get('/admin/movies/create', 'Admin\AdminMovieController@create');
    Route::get('/admin/movies/{movie}', 'Admin\AdminMovieController@show');
    Route::post('/admin/movies', 'Admin\AdminMovieController@store');
    Route::get('/admin/movies/{movie}/edit', 'Admin\AdminMovieController@edit');
    Route::put('/admin/movies/{movie}', 'Admin\AdminMovieController@update');
    Route::delete('/admin/movies/{movie}', 'Admin\AdminMovieController@destroy');
});

//Series Routes
Route::group(['middleware' => ['admin']], function() {
    Route::get('/admin/series', 'Admin\AdminSeriesController@indexSeries');
    Route::get('/admin/series/create', 'Admin\AdminSeriesController@createSeries');
    Route::get('/admin/series/seasons/create', 'Admin\AdminSeriesController@createSeasons');
    Route::get('/admin/series/seasons/episodes/create', 'Admin\AdminSeriesController@createEpisodes');
    Route::get('/admin/series/{series}', 'Admin\AdminSeriesController@showSeries');
    Route::get('/admin/series/{series}/seasons/{season}', 'Admin\AdminSeriesController@showSeason');
    Route::get('/admin/series/{series}/seasons/{season}/episodes/{episode}', 'Admin\AdminSeriesController@showEpisode');
    Route::post('/admin/series', 'Admin\AdminSeriesController@storeSeries');
    Route::post('/admin/series/seasons', 'Admin\AdminSeriesController@storeSeasons');
    Route::post('/admin/series/seasons/episodes', 'Admin\AdminSeriesController@storeEpisodes');
    Route::get('/admin/series/{series}/edit', 'Admin\AdminSeriesController@editSeries');
    Route::get('/admin/series/{series}/{episode}/edit', 'Admin\AdminSeriesController@editEpisode');
    Route::put('/admin/series/{series}', 'Admin\AdminSeriesController@updateSeries');
    Route::put('/admin/series/episodes/{episode}', 'Admin\AdminSeriesController@updateEpisode');
    Route::delete('/admin/series/{series}', 'Admin\AdminSeriesController@destroySeries');
    Route::delete('/admin/series/{series}/seasons/{season}', 'Admin\AdminSeriesController@destroySeason');
    Route::delete('/admin/series/episodes/{episode}', 'Admin\AdminSeriesController@destroyEpisode');
});

//User Routes
Route::group(['middleware' => ['admin']], function() {
    Route::get('/admin/users', 'Admin\AdminUserController@index');
    Route::post('/admin/users/create', 'Admin\AdminUserController@store');
    Route::get('/admin/users/{user}', 'Admin\AdminUserController@show');
    Route::post('/admin/users/{user}', 'Admin\AdminUserController@update');
    Route::get('/admin/users/{user}', 'Admin\AdminUserController@edit');
    Route::put('/admin/users/{user}/update', 'Admin\AdminUserController@updateUser');
    Route::post('/admin/users/{user}/removeAdmin', 'Admin\AdminUserController@removeAdmin');
    Route::delete('/admin/users/{user}', 'Admin\AdminUserController@destroy');
});

//Soft Delete Routes
Route::group(['middleware' => ['admin']], function() {
    Route::get('/admin/deleted', 'Admin\AdminDeleteController@index');
    Route::post('/admin/deleted/movies/{id}', 'Admin\AdminDeleteController@restoreMovie');
    Route::post('/admin/deleted/series/{id}', 'Admin\AdminDeleteController@restoreSeries');
    Route::post('/admin/deleted/series/seasons/{id}', 'Admin\AdminDeleteController@restoreSeason');
    Route::post('/admin/deleted/series/episodes/restore', 'Admin\AdminDeleteController@restoreAllEpisodes');
    Route::post('/admin/deleted/series/episodes/{id}', 'Admin\AdminDeleteController@restoreEpisode');
    Route::post('/admin/deleted/users/{id}', 'Admin\AdminDeleteController@restoreUser');
    
});

//Genre Routes
Route::group(['middleware' => ['admin']], function() {
    Route::get('/admin/genres', 'Admin\AdminGenreController@index');
    Route::get('/admin/genres/create', 'Admin\AdminGenreController@create');
    Route::post('/admin/genres', 'Admin\AdminGenreController@store');
    Route::post('/admin/genres/attach', 'Admin\AdminGenreController@attach');
    Route::post('/admin/genres/detach', 'Admin\AdminGenreController@detach');
    Route::delete('/admin/genres/{genre}', 'Admin\AdminGenreController@destroy');
});

//People Routes
Route::group(['middleware' => ['admin']], function() {
    Route::get('/admin/people', 'Admin\AdminPeopleController@index');
    Route::get('/admin/people/create', 'Admin\AdminPeopleController@create');
    Route::get('/admin/people/{people}', 'Admin\AdminPeopleController@show');
    Route::post('/admin/people', 'Admin\AdminPeopleController@store');
    Route::get('/admin/people/{people}/edit', 'Admin\AdminPeopleController@edit');
    Route::put('/admin/people/{people}', 'Admin\AdminPeopleController@update');
    Route::delete('/admin/people/{people}', 'Admin\AdminPeopleController@destroy');
});

Route::group(['middleware' => ['admin']], function() {
Route::get('/admin/productioncountries', 'Admin\AdminProductionCountryController@index');
Route::get('/admin/productioncountries/create', 'Admin\AdminProductionCountryController@create');
Route::post('/admin/productioncountries', 'Admin\AdminProductionCountryController@store');
Route::post('/admin/productioncountries/attach', 'Admin\AdminProductionCountryController@attach');
Route::post('/admin/productioncountries/detach', 'Admin\AdminProductionCountryController@detach');
Route::delete('/admin/productioncountries/{productioncountry}', 'Admin\AdminProductionCountryController@destroy');
});

Route::group(['middleware' => ['admin']], function() {
Route::get('/admin/studios', 'Admin\AdminStudioController@index');
Route::post('/admin/studios', 'Admin\AdminStudioController@store');
Route::post('/admin/studios/attach', 'Admin\AdminStudioController@attach');
Route::post('/admin/studios/detach', 'Admin\AdminStudioController@detach');
Route::delete('/admin/studios/{id}', 'Admin\AdminStudioController@destroy');
});

Route::group(['middleware' => ['admin']], function() {  
Route::post('/admin/{model}/{id}/attachPeople', 'Admin\AdminPeopleController@attach');
Route::delete('/admin/{model}/{id}/deletePeople', 'Admin\AdminPeopleController@delete');
});

Route::group(['middleware' => ['admin']], function() {  
    Route::get('/admin/reviews', 'Admin\AdminReviewController@index');
    Route::post('/admin/reviews/{id}/approve', 'Admin\AdminReviewController@approve');
    Route::delete('/admin/reviews/{id}/delete', 'Admin\AdminReviewController@delete');
    Route::get('/admin/comments', 'Admin\AdminCommentController@index');
    Route::delete('/admin/comments/{id}/delete', 'Admin\AdminCommentController@delete');
});

Route::group(['middleware' => ['admin']], function() {  
    Route::get('/admin/featured', 'Admin\AdminFeaturedController@index');
    Route::post('/admin/featured/attach', 'Admin\AdminFeaturedController@attach');
    Route::delete('/admin/featured/delete', 'Admin\AdminFeaturedController@delete');
});