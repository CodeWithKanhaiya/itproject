<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('insertData')}}" method="POST">
        @csrf
        Name : <input type="text" name="categoryname" placeholder="Enter your Category Name">
        @error('categoryname')
        <small> {{$message}}</small>
        @enderror

        <input type="submit" name="submit">
    </form>
</body>
</html>

               
