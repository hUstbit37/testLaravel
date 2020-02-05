<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class='container'>
        <h1><a href="monhoc">Object Manage</a></h1>
        <div class='input-group group-search'>
            <form action="searchByName", method='post'>
                @csrf
                <input class='form-control' type="text" name='ten' placeholder='Tìm môn học theo tên' aria-lable="Recipient's ">
            
                <!-- <div class='input-group-append'>
                    <input type="text"><a href="searchByName"><span class='input-group-text'>Tìm</span></a> -->
                    <input type="submit" value='Search'>
                <!-- </div> -->
                </form>
        </div>

        <table class='table tbl-1' border='1'>
            <thead class='thead-dark'>
                <tr>
                    <th>ID</th>
                    <th>Tên môn học</th>
                    <th>Mã môn học</th>
                    <th>Số tín chỉ</th>
                    <th>Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($dsMonhocView as $key => $value)
                    <tr>
                        <th>{{$value->id}}</th>
                        <th><a href="inforMonhoc/{{$value->id}}">{{$value->tenmonhoc}}</a></th>
                        <th>{{$value->mamon}}</th>
                        <th>{{$value->sotinchi}}</th>
                        <td>
                            <button class='btn btn-success' type='button'><a href="viewUpdate/{{$value->id}}">Edit</a></button>
                            <a href="deleteMonhoc/{{$value->id}}"><button class='btn btn-danger' type='button'>Delete</button></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>  
        {{$dsMonhocView->links()}}
        <a href="addMonhoc">Click để thêm môn học</a>
    </div>
</body>
</html>