<style>
  input {
    margin: 20px;
  }
  
  form>button {
    margin-top: 10px;
  }

  .border {
    height: 10px;
    width: 100%;
    border-bottom: 1px solid black;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .upper-container, .upper-container>table {
    width: 50%;
  }

  .flex-row {
    display: flex;
    flex-wrap: wrap;
    
  }

  .flex-row>table {
    width: 40%;
    margin-left: 0;
    
  }

  .flex-row>table:nth-child(2) {
    margin-left: 10px;
  }

</style>
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
      <div class="container upper-container">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Continent</th>
            </tr>
          </thead>
          <tbody>
          @forelse($productionCountries as $productionCountry)
            <tr>
              <td>{{$productionCountry['id']}}</td>
              <td>{{$productionCountry['country_name']}}</td>
              <td>{{$productionCountry['continent']}}</td>
            </tr>
            @empty
            <tr>
              <td colspan="7">No Production Countries</td>
            </tr>
            @endforelse
          </tbody>
        </table>
        <form action="/admin/productioncountries/{{$productionCountry['id']}}" method="post">
          {{csrf_field()}}
          <select name="production_country_id[]" data-placeholder="Select Production Country..." multiple class="chosen-select">
            @foreach ($productionCountries as $productionCountry)
            <option value="{{$productionCountry['id']}}">{{$productionCountry['country_name']}}</option>
            @endforeach
          </select>
          <input name="_method" type="hidden" value="DELETE">
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </div>

<div class="border">
</div>

      <form method="post" action="/admin/productioncountries/attach">
        {{csrf_field()}}
        <select name="production_country_id[]" data-placeholder="Select Genres..." multiple class="chosen-select">
          @foreach ($productionCountries as $productionCountry)
          <option value="{{$productionCountry['id']}}">{{$productionCountry['country_name']}}</option>
          @endforeach
        </select>
        <select name="movie_id" class="select selectpicker">
          <option selected="selected" value="">Select a Movie....</option>
          @foreach ($movies as $movie)
            <option value="{{$movie['id']}}">{{$movie['title']}}</option>      
          @endforeach
        </select>
        <select name="series_id" class="select selectpicker">
          <option selected="selected" value="">Select a Series....</option>
          @foreach ($series as $serie)
            <option value="{{$serie['id']}}">{{$serie['title']}}</option>
          @endforeach
        </select>
        
        <div class="row">
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-top:20px">Add Production Country to Title</button>
          </div>
        </div>
      </form>

  <div class="container flex-row">

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Movie</th>
          <th>Production Country</th>
          <th>Continent</th>
          <th colspan="3">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse($productionMovies as $productionMovie)
        <tr>
          <td>{{$productionMovie['title']}}</td>
          <td>{{$productionMovie['productionCountries']->implode('country_name', ',')}}</td>
          <td>{{$productionMovie['productionCountries']->implode('continent', ',')}}</td>
          <td>
            <form action="/admin/productioncountries/detach" method="post">
              {{csrf_field()}}
              <input name="productioncountries" type="hidden" value="{{$productionMovie['productionCountries']->implode('id', ',')}}">
              <input name="movie" type="hidden" value="{{$productionMovie['id']}}">
              <button class="btn btn-danger" type="submit">Detach</button>
            </form>
          </td>
        </tr> 
        @empty
        <tr>
          <td colspan="7">No Production Countries</td>
        </tr>
        @endforelse
      </tbody>
    </table>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Series</th>
          <th>Production Country</th>
          <th>Continent</th>
          <th colspan="3">Action</th>
        </tr>
      </thead>
      <tbody>
      @forelse($productionSeries as $productionSeries)
        <tr>
          <td>{{$productionSeries['title']}}</td>
          <td>{{$productionSeries['productionCountries']->implode('country_name', ',')}}</td>
          <td>{{$productionSeries['productionCountries']->implode('continent', ',')}}</td>
          <td>
            <form action="/admin/productioncountries/detach" method="post">
              {{csrf_field()}}
              <input name="productioncountries" type="hidden" value="{{$productionSeries['productionCountries']->implode('id', ',')}}">
              <input name="series" type="hidden" value="{{$productionSeries['id']}}">
              <button class="btn btn-danger" type="submit">Detach</button>
            </form>
          </td>
        </tr> 
      @empty
        <tr>
          <td colspan="7">No Production Countries</td>
        </tr>
      @endforelse
      </tbody>
    </table>
  
  </div>
</div>    
@endsection
