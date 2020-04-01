@extends('layouts.app')

@section('content')
<div class="container m-5">
    <a href="{{route('posts.create')}}" class="btn btn-success mb-5">Create Post</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th colspan="2">Created At</th>
            <th scope="col">User</th>
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($posts as $post)
          <tr>
          <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>{{ \Carbon\Carbon::parse($post->created_at)->format('l jS \of F Y h:i:s A')}}</td>
            <td>{{ $post->user ? $post->user->name : 'null' }}</td>
            <td><a href="{{route('posts.show',['post'=>$post->id])}}" class="btn btn-secondary">view</a>
            <td><a href="{{route('posts.edit',['post'=>$post->id])}}" class="btn btn-secondary">Edit</a></td>
            <td><form method="POST"action="{{route('posts.destroy',['post' => $post->id])}}">
             @csrf @method('delete')
             <button type="submit"
              class="btn btn-danger"
               onclick="return confirm('Are you sure that you want to delete this post ?')">
               Delete </button>
            </form>
        </td>
          </td>

          </tr>
        @endforeach
        </tbody>
      </table>
      {{ $posts->links() }}

</div>

   

@endsection