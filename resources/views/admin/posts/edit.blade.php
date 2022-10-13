@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('admin.posts.update', ['post' => $post->id])}}" method="POST">

        @csrf
        @method('PUT')

        <h1>Edit post:</h1>

        <div class=" form-group mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-control" name="category_id" id="category_id">
                <option value="">no category</option>

                @foreach($categories as $category)
                <option value="{{$category->name}}" {{(old('category_id',$post->$category_id)==$category->id)?'selected':''}}>{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="title" required max="255" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title', $post->title)}}">
            @error('title')
                <div class="invalid-feedback">
                    {{message}}
                </div>
            @enderror
        
        </div>
        
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content">{{old('content', $post->content)}}</textarea>
            @error('title')
                <div class="invalid-feedback">
                    {{message}}
                </div>
            @enderror
        </div>

        
        
        
        </div>
        <div class="container">
            <button type="submit" class="btn btn-primary">Save Post!</button>
        </div>
          
        
    </form>

</div>