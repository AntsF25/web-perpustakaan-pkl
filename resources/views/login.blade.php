<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="POST">
        @csrf
        <h5>Email</h5>
        <input type="email" name="email" id="email">
        <h5>Password</h5>
        <input type="password" name="password" id="password">
        <br>
        <hr>
        <input type="submit" value="Login">
    </form>
</body>
</html>