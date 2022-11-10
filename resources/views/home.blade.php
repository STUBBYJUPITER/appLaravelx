<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        hi {{Auth::user()->name}}
    </h1>
    <a href="{{url('users')}}">
        go to users
    </a>

    <form action="{{url('logout')}}" method="post">
    @csrf
    <button type="submit">
        Exit
    </button>
    </form>
</body>
</html>
