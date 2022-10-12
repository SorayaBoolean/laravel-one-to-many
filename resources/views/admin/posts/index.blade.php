@extends('layouts.app')
@section('content')
    <div class="container">

        <div>
            <a href="{{route('admin.posts.create')}}" method="GET" class="btn btn-outline-primary my-2">Add+</a>
        </div>

        <table class="table">
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($posts as $post)
              <tr>
               
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>{{($post->category)?$post->category->name:'-'}}</td>
                <td>
                    <a href="{{route('admin.posts.show', ['post'=> $post->id])}}" class="btn btn-outline-success mx-1">Show</a>
                    
                    <a href="{{route('admin.posts.edit', ['post'=> $post->id])}}" class="btn btn-outline-warning mx-1">Modify</a>
                    
                   <form action="{{route('admin.posts.destroy', ['post'=> $post->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-outline-danger my-2">Delete</a>
                   </form> 
                    
                  
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>



    </div>
    
@endsection