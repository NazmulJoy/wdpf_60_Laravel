<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>Student informartion</h1>
    @if (session('msg'))
    <div class='alert alert-success'><h4>{{session('msg')}} </h4></div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        @foreach($studentss as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone}}</td>
            <td>
                <a class="btn btn-success" href="{{route('student.edit',$item->id)}}">Edit</a>
                <form action="{{route('student.destroy',$item->id)}}" method="POST">
                {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                <!-- or: -->
                {{-- @method('DELETE') --}}
                @csrf
                <input class="btn btn-danger" type="submit" name="delete" value="DELETE">
                </form>
               
        </tr>
        @endforeach
    </table>
   
   {{-- @dd($studentss) --}}
</body>
</html>