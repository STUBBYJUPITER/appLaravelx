<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register Users</h1>
    <form action="http://127.0.0.1:8000/users" method="post">
        @csrf

        <label >
            name
        </label>
        <input type="text" name="name" id="">
        <label for="">lastname</label>
        <input type="text" name="lastname" id="">
        <label >email</label>
        <input type="email" name="email" id="">
        <label for="">password</label>
        <input type="password" name="password" id="">

        <button type="submit">submit</button>

    </form>

</body>
</html>
