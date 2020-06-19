@extends('template.master')

@section('content')
@guest
<form method="POST" action="{{route('login')}}" >
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="uid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  @csrf
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endguest
@endsection