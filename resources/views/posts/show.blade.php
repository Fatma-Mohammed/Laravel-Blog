@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-md-8 offset-2 mb-4">
    <div class="card">
      <div class="card-header">
        Post Info
      </div>
      <div class="card-body">
        <h5 class="card-title"><span>
            <b>Title: </b>
          </span>{{$post->title}}</h5>
        <p class="card-text"><b>Description: </b>{{$post->description}}</p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-8 offset-2">
    <div class="card">
      <div class="card-header">
        Post Creator Info
      </div>
      <div class="card-body">
        <h5 class="card-title"><b>Name:</b> {{$post->user ? $post->user->name : 'null'}}</h5>
        <p class="card-text"><b>Email: </b>{{$post->user ? $post->user->email : 'not found'}}<br>
      <b>Created at</b> {{ \Carbon\Carbon::parse($post->created_at)->format('l jS \of F Y h:i:s A')}}
      </p>
      </div>
    </div>
  </div>
</div>
@endsection