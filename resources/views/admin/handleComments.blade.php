@extends('layouts.app')
<style>
.buttons {
    display: flex;
}
</style>
@section('content')

<div class="container">
      <div class="container upper-container">
      <h1> Comments </h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>User id</th>
              <th>Username</th>
              <th>Body</th>
              <th>Delete</th>

            </tr>
          </thead>
          <tbody>
          @forelse($comments as $comment)
            <tr>
              <td>{{$comment->user->id}}</td>
              <td>{{$comment->user->username}}</td>
              <td>{{$comment->body}}</td>
              <td><form action="/admin/comments/{{$comment->id}}/delete" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
              <td colspan="7">No Comments!</td>
            </tr>
            @endforelse
          </tbody>
        </table>

@endsection