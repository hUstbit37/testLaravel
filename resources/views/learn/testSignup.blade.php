<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action='signup' method='post'>
        @csrf
        <input type='text' name='hoten'><br>
        <input type='text' name='diachi'><br>
        <input type='text' name='sodt'><br>
        <input type='submit' name='Submit'>
</body>
</html>