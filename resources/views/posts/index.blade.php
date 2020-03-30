@extends('layouts.app')

@section('content')
      <div class="container m-5">
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">Created At</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                <tr>
                <th scope="row">{{ $post->id }}</th>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->description }}</td>
                  <td>{{ $post->created_at  }}</td>
                  <td><a href="/posts/{{$post->id}}" class="btn btn-primary">view details</a></td>
                </tr>
              @endforeach
              </tbody>
            </table>
      </div>

   

@endsection