<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{url('login')}}" method="post">
        @csrf

        <label >email</label>
        <input type="email" name="email" id="">
        <br>
        <label for="">password</label>
        <input type="password" name="password" id="">

        <button type="submit">submit</button>

    </form>

</body>
</html>

