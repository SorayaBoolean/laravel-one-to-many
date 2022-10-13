@extends ('layouts.app')
@section('content')

    <div class="container border">
        <div class="">
            <strong>Name:</strong>
            <p>{{$category->name}}</p>
        </div>
      
        <div class="">
            <strong>Slug:</strong>
            <p>{{$category->slug}}</p>
        </div>


        <table class="table">
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($category->posts as $post )

              <tr> 
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                
              </tr>
              @endforeach
            </tbody>
          </table>



    </div>
    
@endsection

   
    


