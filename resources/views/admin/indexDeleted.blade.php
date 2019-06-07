@extends('layouts.app')

@section('content')
    <div class="container">
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
          <h2>Movies</h2>
      <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Deleted at</th>
          <th colspan="3">Action</th>
        </tr>
      </thead>
      <tbody>
          
      @forelse($deletedMovies as $deleted)
      <tr>
        <td>{{$deleted['id']}}</td>
        <td><a href="/admin/movies/{{$deleted['id']}}">{{$deleted['title']}}</a></td>
        <td>{{$deleted['deleted_at']}}</td>
        <td>
          <form action="/admin/deleted/movies/{{$deleted['id']}}" method="post">
            {{csrf_field()}}
            
            <button class="btn btn-warning" type="submit">Restore</button>
          </form>
        </td>
      </tr>
      @empty
        <tr>
          <td colspan="7">No Deleted Movies</td>
        </tr>
        @endforelse
    
      </tbody>
    </table>
  </div>
     
  <div class="container">
      <h2>Series</h2>
  <table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Deleted at</th>
      <th colspan="3">Action</th>
    </tr>
  </thead>
  <tbody>
      
  @forelse($deletedSeries as $deleted)
  <tr>
    <td>{{$deleted['id']}}</td>
    <td><a href="/admin/series/{{$deleted['id']}}">{{$deleted['title']}}</a></td>
    <td>{{$deleted['deleted_at']}}</td>
    <td>
      <form action="/admin/deleted/series/{{$deleted['id']}}" method="post">
        {{csrf_field()}}
        
        <button class="btn btn-warning" type="submit">Restore</button>
      </form>
    </td>
    
  </tr>
  @empty
    <tr>
      <td colspan="7">No Deleted Series</td>
    </tr>
    
    @endforelse

  </tbody>
</table>
</div>

<div class="container">
    <h2>Seasons</h2>
<table class="table table-striped">
<thead>
  <tr>
    <th>ID</th>
    <th>Season Number</th>
    <th>Deleted at</th>
    <th colspan="3">Action</th>
  </tr>
</thead>
<tbody>
    
@forelse($deletedSeasons as $deleted)
<tr>
  <td>{{$deleted['id']}}</td>
  <td><a href="/admin/series/{{$deleted['id']}}">{{$deleted['season_number']}}</a></td>
  <td>{{$deleted['deleted_at']}}</td>
  <td>
    <form action="/admin/deleted/series/seasons/{{$deleted['id']}}" method="post">
      {{csrf_field()}}
      
      <button class="btn btn-warning" type="submit">Restore</button>
    </form>
  </td>
  
</tr>

@empty
  <tr>
    <td colspan="7">No Deleted Seasons</td>
  </tr>
  
  @endforelse

</tbody>
</table>
</div>

<div class="container">
    <h2>Episodes</h2>
    {{--  <form action="/admin/deleted/series/episodes/restore" method="post">
      {{csrf_field()}}
      
      <button class="btn btn-warning" type="submit">Restore All Episodes</button>
    </form>  --}}
<table class="table table-striped">
<thead>
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Deleted at</th>
    <th colspan="3">Action</th>
  </tr>
</thead>
<tbody>
    
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td>
        <form action="/admin/deleted/series/episodes/restore" method="post">
          {{csrf_field()}}
          
          <button class="btn btn-warning" type="submit">Restore All</button>
        </form>
    </td>
  </tr>
@forelse($deletedEpisodes as $deleted)
<tr>
  <td>{{$deleted['id']}}</td>
  <td><a href="/admin/series/{{$deleted['id']}}">{{$deleted['title']}}</a></td>
  <td>{{$deleted['deleted_at']}}</td>
  <td>
    <form action="/admin/deleted/series/episodes/{{$deleted['id']}}" method="post">
      {{csrf_field()}}
      
      <button class="btn btn-warning" type="submit">Restore</button>
    </form>
  </td>
  
</tr>
@empty
  <tr>
    <td colspan="7">No Deleted Episodes</td>
  </tr>
  
  @endforelse

</tbody>
</table>
</div>

<div class="container">
    <h2>Users</h2>
<table class="table table-striped">
<thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Type</th>
    <th>Member Since</th>
    <th>Deleted at</th>
    <th colspan="3">Action</th>
  </tr>
</thead>
<tbody>
    
@forelse($deletedUsers as $deleted)
<tr>
  <td>{{$deleted['id']}}</td>
  <td><a href="/admin/users/{{$deleted['id']}}">{{$deleted['name']}}</a></td>
  <td>{{$deleted['email']}}</td>
  <td>{{$deleted['type']}}</td>
  <td>{{$deleted['created_at']}}</td>
  <td>{{$deleted['deleted_at']}}</td>
  <td>
    <form action="/admin/deleted/users/{{$deleted['id']}}" method="post">
      {{csrf_field()}}
      
      <button class="btn btn-warning" type="submit">Restore</button>
    </form>
  </td>
</tr>
@empty
  <tr>
    <td colspan="7">No Deleted Users</td>
  </tr>
  @endforelse

</tbody>
</table>
</div>
@endsection
