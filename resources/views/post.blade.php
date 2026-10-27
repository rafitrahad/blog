@extends('layout.home')

@section('content')
<a href="{{route('')}}" >back</a>

 <form  action="{{route('user.store') }}"  method="POST" >
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title"  id="title"  class="form-control" aria-describedby="emailHelp">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title"  id="title"  class="form-control" aria-describedby="emailHelp">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title"  id="title"  class="form-control" aria-describedby="emailHelp">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title"  id="title"  class="form-control" aria-describedby="emailHelp">
        label for="title" class="form-label">Title</label>
        <input type="text" name="title"  id="title"  class="form-control" aria-describedby="emailHelp">

    </div>
    <button type="submit" class="btn btn-primary">Signup</button>
  </form>




@endsection