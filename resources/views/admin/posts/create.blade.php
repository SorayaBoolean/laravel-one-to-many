@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('admin.posts.store')}}" method="POST">

        @csrf
        <h1>Create your post:</h1>

        <div class=" form-group mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-control" name="category_id" id="category_id">
                <option value="">no category</option>

                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

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
