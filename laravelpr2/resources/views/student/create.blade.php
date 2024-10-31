<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Student entry form</h3>
    <form action="{{route('student.store')}}" method="POST">
        @csrf
        Name: <input type="text" name="name" id=""> <br>
        Email: <input type="text" name="email" id=""> <br>
        Phone: <input type="text" name="phone" id=""> <br>
        <input type="submit" name="submit" value="SUBMIT">


    </form>
</body>
</html>