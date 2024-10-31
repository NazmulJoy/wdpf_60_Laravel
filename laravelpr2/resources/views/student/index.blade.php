<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Student informartion</h1>
    @if (session('msg'))
    <div class='alert'><h3>{{session('msg')}} </h3></div>
    @endif
    <ul>
        @foreach($studentss as $item) 
        <li>Name: {{$item->name}}</li>
        <li>Email: {{$item->email}}</li>
        <li>Phone: {{$item->phone}}</li>
        <br>
        @endforeach
    </ul>
   
   {{-- @dd($studentss) --}}
</body>
</html>