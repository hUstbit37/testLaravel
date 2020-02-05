<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="viewUpdate", method='post'> 
        @csrf
        ID:
        <input name='id' value='{{$monhocUpdate->id}}' type="text">
        <p>Tên môn học</p>
        <input type="text" name='ten_mon' value='{{$monhocUpdate->tenmonhoc}}'><br>
        <p>Mã môn học</p>
        <input type="text" name='ma_mon' value='{{$monhocUpdate->mamon}}'><br>
        <p>Số tín chỉ</p>
        <input type="text" name='so_tc' value='{{$monhocUpdate->sotinchi}}'><br>
        <input type="submit" value='Submit'>
    </form>
</body>
</html>