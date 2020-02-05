<!DOCTYPE html>
<html>
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
        <div class='input-group group-search'>
            <input class='form-control' type="text" name='' placeholder='Tìm sinh viên theo tên' aria-lable="Recipient's ">
            <div class='input-group-append'>
                <span class='input-group-text'>Search</span>
            </div>
        </div>
    <table class='table tbl-1' border='1'>
                <thead class='thead-dark'>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Họ tên</th>
                        <th scope='col'>Mã sinh viên</th>
                        <th scope='col'>Ngày sinh</th>
                        <th scope='col'>Địa chỉ</th>
                        <th scope='col'>Số điện thoại</th>
                        <th scope='col'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($svListView as $key => $value)
                    
                        <tr>
                            <!--<td scope='row'>{{$key+1}}</td>-->
                            <td>{{$value->id}}</td> 
                            <td><a href="#">{{$value->hoten}}</a></td>
                            <td>{{$value->masv}}</td>
                            <td>{{$value->ngaysinh}}</td>
                            <td>{{$value->diachi}}</td>
                            <td>{{$value->sodt}}</td>
                            <td>
                                <button class='btn btn-success' type='button'>Edit</button>
                                <button class='btn btn-danger' type='button'>Delete</button>
                            </td>
                        </tr>
                    
                    @endforeach
                </tbody>
            </table>
            {{$svListView->links()}} 
            <div><a href="creareProduct">Sing up</a></div>
    </div>
</body>
</html>