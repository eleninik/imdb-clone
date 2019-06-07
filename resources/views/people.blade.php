<style>
body {
    background-color: #f5f5f5;
}
.movies--list {
    display: flex;
}
.movie--card {
    flex-direction: row;
    margin-left: 15px;
    margin-right: 15px;
}
.movie--card:first-child {
    margin-left: 0;
}
.movie--card:last-child {
    margin-right: 0;
}
.movie--card img {
    width: 100%;
    height: auto;
}
.row.contrast-bg {
    background-color: #4a4a4a;
    padding-bottom: 150px;
}
.sidebar {
    padding-top: 15px;
    padding-bottom: 100px;
    background-color: #303030;
    flex-direction: row;
}
.flex-center.container {
    margin-top: -100px;
    background-color: #ffffff;
}
img {
    width: 100%;
    height: auto;
}
.sidebar--watchlists {
    margin-top: 15px;
    padding-top: 15px;
    border-top: 2px solid #000;
    border-bottom: 2px solid #000;
    padding-bottom: 15px;
    margin-bottom: 15px;
}
.sidebar--watchlist--card {
    background-color: #424242;
    display: flex;
    margin-bottom: 10px;
}
.sidebar--watchlist--card-img {
    width: 50px;
    height 50px;
    background-color: #c4c4c4;
}
.sidebar--watchlist--card-text {
    margin-left: 15px;
}
.container {
    padding-left: 0 !important;
    padding-right: 0 !important;
}
</style>

@extends('layouts.app')

@section('content')
    <div class="row contrast-bg">
        <div class="container">
            <section class="hero">
                <h1>Known for...</h1>
                <div class="movies--list">
                <div class="movie--card">
                    <img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMjI3Mjk5MTUxOV5BMl5BanBnXkFtZTcwNTMyNzY3OQ@@._V1_SX300.jpg">
                </div>
                <div class="movie--card">
                    <img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMjI3Mjk5MTUxOV5BMl5BanBnXkFtZTcwNTMyNzY3OQ@@._V1_SX300.jpg">
                </div>
                <div class="movie--card">
                    <img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMjI3Mjk5MTUxOV5BMl5BanBnXkFtZTcwNTMyNzY3OQ@@._V1_SX300.jpg">
                </div>
                <div class="movie--card">
                    <img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMjI3Mjk5MTUxOV5BMl5BanBnXkFtZTcwNTMyNzY3OQ@@._V1_SX300.jpg">
                </div>
                <div class="movie--card">
                    <img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMjI3Mjk5MTUxOV5BMl5BanBnXkFtZTcwNTMyNzY3OQ@@._V1_SX300.jpg">
                </div>
                </div>
            </section>
        </div>
    </div>
        <div class="flex-center container">
            <div class="col-md-4 sidebar">
                <div class="people--image">
                    <img src="https://image.tmdb.org/t/p/original/akweMz59qsSoPUJYe7QpjAc2rQp.jpg">
                </div>
                <div class="people--sidebar-bio">
                    <p>Born:</p>
                    <p>1901-01-01</p>
                    <p>Known for:</p>
                    <p>Acting, directing</p>
                </div>
                <div class="sidebar--watchlists">
                <p>Lists:</p>
                <p>Appears on people lists</p>
                    <div class="sidebar--watchlist--card">
                        <div class="sidebar--watchlist--card-img">

                        </div>
                        <div class="sidebar--watchlist--card-text">
                            <p>My awesome list!!</p>
                            <p>Contains 238 people</p>
                        </div>
                    </div>
                    <div class="sidebar--watchlist--card">
                        <div class="sidebar--watchlist--card-img">

                        </div>
                        <div class="sidebar--watchlist--card-text">
                            <p>My awesome list!!</p>
                            <p>Contains 238 people</p>
                        </div>
                    </div>
                    <div class="sidebar--watchlist--card">
                        <div class="sidebar--watchlist--card-img">

                        </div>
                        <div class="sidebar--watchlist--card-text">
                            <p>My awesome list!!</p>
                            <p>Contains 238 people</p>
                        </div>
                    </div>
                    <div class="sidebar--watchlist--card">
                        <div class="sidebar--watchlist--card-img">

                        </div>
                        <div class="sidebar--watchlist--card-text">
                            <p>My awesome list!!</p>
                            <p>Contains 238 people</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar--buttons">
                    <p>Add to list</p>
                </div>
            </div>

            <div class="col-md-8 content">
                <h1>Dwayne Johnson</h1>
                <p>Biography</p>
                <p>Dwayne Douglas Johnson (born May 2, 1972), also known by his ring name The Rock, is an American and Canadian actor, producer and semi-retired professional wrestler, signed with WWE. </p>
                <h2>Filmography</h2>
                <div class="collapsable-list">
                    <h3>Acting</h3>
                    <ul>
                        <li>
                            <p>2017</p>
                            <p>Jumanjii: Welcome to the Jungle</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
@endsection
