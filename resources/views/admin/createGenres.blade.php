@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add a Genre</h2>
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
    <form method="post" action="/admin/genres">
        {{csrf_field()}}
        <div class="row">
            <div class="form-group col-md-4">
            <div>
                <label for="name">Genre Name:</label>
                <input type="text" class="form-control" name="name">
            </div>
            </div>
        </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success" style="margin-left:38px">Add Genre</button>
                </div>
            </div>
    </form>
</div>
    
@endsection
