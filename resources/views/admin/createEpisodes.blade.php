@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Add a Episode</h2>
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


    <form method="post" action="/admin/series/seasons/episodes">
        {{csrf_field()}}
        <select name="season_id" class="select selectpicker">
            <option>Select a Series....</option>
            @foreach ($series as $series)
                @foreach ($series->seasons as $season)    
                    <option value="{{$season->id}}">{{$series['title']}} | Season: {{$season['season_number']}}</option>
                @endforeach
            @endforeach
        </select>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title">
                <label for="released">Released:</label>
                <input type="text" class="form-control" name="released">
                <label for="runtime">Runtime:</label>
                <input type="text" class="form-control" name="runtime">
                <label for="episode_number">Episode Number:</label>
                <input type="text" class="form-control" name="episode_number">
                <label for="thumbnail">Thumbnail:</label>
                <input type="text" class="form-control" name="thumbnail">
            </div>
            <div class="form-group col-md-4">
                <div class="form-group col-md-8">
                    <label for="plot">Plot:</label>
                    <textarea type="text" class="form-control" name="plot" rows="8" col="50"></textarea>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Add Episode</button>
            </div>
        </div>
    </form>
    
</div>
@endsection
