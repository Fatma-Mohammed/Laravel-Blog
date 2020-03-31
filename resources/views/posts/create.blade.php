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
  <div class="form-group">
    <label for="exampleInputPassword1">User</label>
    <select name="user_id" class="form-control">
    @foreach($users as $user)
      <option value="{{$user->id}}">
      {{$user->name}}
      </option>
      
    @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


@endsection