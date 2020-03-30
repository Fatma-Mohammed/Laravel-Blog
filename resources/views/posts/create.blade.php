@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST"  action="{{route('posts.store')}}">
@csrf 
<div class="form-group">
    <label for="exampleInputEmail1" >Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea class="form-control" name="description">
    </textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


@endsection