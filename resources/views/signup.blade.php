@extends('layout.home')
@section('content')
  <form>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp">

        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password">

        <label for="confirmPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirmPassword">


    </div>
    <button type="submit" class="btn btn-primary">Signup</button>
  </form>
  <a href="{{route('show.login')}}" >already have account </a>
@endsection