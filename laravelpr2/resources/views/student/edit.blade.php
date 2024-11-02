<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Student edit form</h3>
    <form action="{{route('student.update',$student->id)}}" method="POST">
        @csrf
        Name: <input type="text" name="name" value="{{$student->name}}"> <br>
        Email: <input type="text" name="email" value="{{$student->email}}"> <br>
        Phone: <input type="text" name="phone" value="{{$student->phone}}"> <br>
        <input type="submit" name="submit" value="SUBMIT">


    </form>
</body>
</html>