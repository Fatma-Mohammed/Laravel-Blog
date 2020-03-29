@extends('layouts.app')

@section('content')
      <div class="container m-5">
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                <tr>
                <th scope="row">{{ $post->id }}</th>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->description }}</td>


                </tr>
              @endforeach
              </tbody>
            </table>
      </div>

@endsection