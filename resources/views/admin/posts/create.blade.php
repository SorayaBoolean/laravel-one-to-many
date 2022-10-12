@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('admin.posts.store')}}" method="POST">

        @csrf
        <h1>Create your post:</h1>
        <div class="mb-3">
            <label for="title" required max="255" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>
        
          
        <button type="submit" class="btn btn-primary">Save Post!</button>
    </form>

</div>

    
@endsection
