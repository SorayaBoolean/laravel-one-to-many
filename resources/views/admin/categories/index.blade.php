@extends('layouts.app')
@section('content')
    <div class="container">


        <table class="table">
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
               
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
               
                <td>
                    <a href="{{route('admin.categories.show', ['category' => $category->id])}}" class="btn btn-outline-success mx-1">Show</a> 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>



    </div>
    
@endsection