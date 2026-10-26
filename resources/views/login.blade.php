@extends('layout.home')
@section('content')
  <form>
    <div class="mb-3">

      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp">


      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password">

    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
  <a href="{{route('show.signup')}}" >don't have account? signup </a>
@endsection