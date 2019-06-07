@extends('layouts.app')

@section('content')

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

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 class="admin-header text-center">Admin Dashboard</h4></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Movies <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="/admin/movies">View all Movies</a></li>
                            <li><a href="/admin/movies/create">Add new Movie</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Series <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="/admin/series">View all Series</a></li>
                            <li><a href="/admin/series/create">Add new Series</a></li>
                            <li><a href="/admin/series/seasons/create">Add new Season</a></li>
                            <li><a href="/admin/series/seasons/episodes/create">Add new Episode</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            People <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="/admin/people">View all People</a></li>
                            <li><a href="/admin/people/create">Add new Person</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Users <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="admin/users">View all Users</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Genres <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="admin/genres">View Genres</a></li>
                            <li><a href="admin/genres/create">Add Genres</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Production Countries <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="admin/productioncountries">View Production Countries</a></li>
                            <li><a href="admin/productioncountries/create">Add Production Countries</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Studios <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="admin/studios">View Studios</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Restore Deleted Titles <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="admin/deleted">View all Eradicated Objects</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Reviews/Comments <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="admin/reviews">Approve/Delete reviews</a></li>
                            <li><a href="admin/comments">Delete comments</a></li>

                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Featured <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="admin/featured">Handle featured movies and series</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Seed From TMDB <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="api/apiseed">Seed with upcoming, now playing and popular movies</a></li>
                        </ul>
                    </div>

                    
                </div>

                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
    

@endsection
