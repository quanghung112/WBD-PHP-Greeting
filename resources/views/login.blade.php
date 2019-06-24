<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        h1 {
            font-size: 40px;
            color: red;
        }

        button{
            width: 100px;
            height: 25px;
            border: 3px;
            border-radius: 3px;
        }
    </style>
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="/login" method="post">
    @csrf
    <p>
        <span>Username</span>
        <input type="text" name="username" placeholder="Nhap ten">
    </p>
    <p>
        <span>Password:</span>
        <input type="password" name="password" placeholder="Password">
    </p>
    <p>
        <button type="submit">Login</button>
    </p>
</form>
</body>
</html>
