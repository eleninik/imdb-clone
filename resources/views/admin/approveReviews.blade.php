@extends('layouts.app')
<style>
.buttons {
    display: flex;
}
</style>
@section('content')

<div class="container">
      <div class="container upper-container">
      <h1> Movies </h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>User id</th>
              <th>Username</th>
              <th>Movie id</th>
              <th>Title</th>
              <th>Body</th>
              <th>Approve</th>
              <th>Delete</th>

            </tr>
          </thead>
          <tbody>
          @forelse($movieReviews as $moviereview)
            <tr>
              <td>{{$moviereview['user_id']}}</td>
              <td>{{$moviereview['user_name']}}</td>
              <td>{{$moviereview['reviewable_id']}}</td>
              <td>{{$moviereview['title']}}</td>
              <td>{{$moviereview['body']}}</td>
              <td><form action="/admin/reviews/{{$moviereview['id']}}/approve" method="post">
                     {{csrf_field()}}
                     <button type="submit" class="btn btn-success" style="margin-left:38px">Approve Review</button>
                 </form> 
                </td>
                <td><form action="/admin/reviews/{{$moviereview['id']}}/delete" method="post">
                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger" type="submit">Delete</button>
                  </form></td>
            </tr>
            @empty
            <tr>
              <td colspan="7">No Reviews to approve!</td>
            </tr>
            @endforelse
          </tbody>
        </table>
    </div>
        <div class="container upper-container">
        <h1> Series </h1>

        <table class="table table-striped">
          <thead>
            <tr>
              <th>User id</th>
              <th>Username</th>
              <th>Series id</th>
              <th>Title</th>
              <th>Body</th>
              <th>Approve</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
          @forelse($seriesReviews as $seriesreview)
            <tr>
              <td>{{$seriesreview['id']}}</td>
              <td>{{$seriesreview['user_name']}}</td>
              <td>{{$seriesreview['reviewable_id']}}</td>
              <td>{{$seriesreview['title']}}</td>
              <td>{{$seriesreview['body']}}</td>
              <td><form action="/admin/reviews/{{$seriesreview['id']}}/approve" method="post">
                     {{csrf_field()}}
                     <input type="hidden" value="1" name="status">
                     <button type="submit" class="btn btn-success" style="margin-left:38px">Approve Review</button>
                 </form> 
                </td>
                <td><form action="/admin/reviews/{{$seriesreview['id']}}/delete" method="post">
                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger" type="submit">Delete</button>
                  </form></td>
            </tr>
            @empty
            <tr>
              <td colspan="7">No Reviews to approve!</td>
            </tr>
            @endforelse
          </tbody>
        </table>
</div>

</div>

@endsection