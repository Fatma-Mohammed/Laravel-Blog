@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-md-8 offset-2">
<div class="card">
  <div class="card-header">
  {{$post->title}}
  </div>
  <div class="card-body">
    <p class="card-text">{{$post->description}}</p>
  </div>
</div>
</div>
</div>
@endsection