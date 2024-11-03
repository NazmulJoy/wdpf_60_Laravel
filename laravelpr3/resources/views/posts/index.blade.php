@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>Post List</h1>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <a href="{{route("posts.create")}}" class="btn btn-success float-right">New post</a>
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Details</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            {{-- @php $i = 1 @endphp --}}
        @foreach($posts as $post)
        <tr> 
            <td>{{$i++}}</td>
            <td>{{ $post->name}} </td>
            <td>{{ $post->detail}}</td>
            <td><img src="/images/{{ $post->image}}" alt=""></td>
            <td>
                <form action="{{route('posts.destroy',$post->id)}}" method="POST">
   
                    {{-- <a class="btn btn-dark" href="{{ route('posts.show',$post->id) }}">Show</a> --}}
    
                    {{-- <a class="btn btn-primary" href="{{ route('edit',$post->id) }}">Edit</a> --}}
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
            
        </tr>
        @endforeach
    </table>
    {{-- {!! $posts->links() !!} --}}
    </div>
</div>
@endsection