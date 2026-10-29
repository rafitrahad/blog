@extends('layout.home')

@section('content')
<a href="{{route('show.home')}}" >back</a>

 <form  action="{{route('post.store') }}"  method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title"  id="title"  class="form-control">
       
        <label for="summary" class="form-label">Short summary</label>
        <input type="text" name="summary"  id="summary"  class="form-control" >
        
        <label for="document">Choose File:</label>
        <input type="file" name="document" id="document" class="form-control">
        
        <label for="description" class="form-label">Description</label>
        <input type="text" name="description"  id="description"  class="form-control">

    </div>
    <button type="submit" class="btn btn-primary">POST</button>
  </form>

@endsection