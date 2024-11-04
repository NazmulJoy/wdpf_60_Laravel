@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>Single Post</h1>
        Id: <h4>{{$post->id}}</h4> <br>
        Name: <h3>{{$post->name}}</h3> <br>
        Details: <h3>{{$post->detail}}</h3> <br>
        Image : <img src="/images/{{ $post->image}}" alt="">
    </div>
</div>
@endsection