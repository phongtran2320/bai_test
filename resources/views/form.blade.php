<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('post')}}">
        {{ csrf_field() }}

        Name:<input type="text" name="name"><br>
        <input type="submit" value="OKKKKKKKKKK">
    </form>
</body>
</html>