@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add a Season</h2>
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
    <form method="post" action="/admin/series/seasons">
        {{csrf_field()}}
        <div class="row">
            <div class="form-group col-md-4">
            <select name="series_id" class="select selectpicker">
                <option>Select a Series....</option>
            @foreach ($series as $series)
                <option value="{{$series['id']}}">{{$series['title']}}</option>
            @endforeach
            </select>
            <div>
                <label for="season_number">Season Number:</label>
                <input type="text" class="form-control" name="season_number">
            </div>
            </div>
        </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success" style="margin-left:38px">Add Season</button>
                </div>
            </div>
    </form>
</div>
    
@endsection
