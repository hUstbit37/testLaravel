<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Product Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="js/jquery-3.4.1.min.js"></script> <!--Tai sao k co cai nay thi Delete k chay -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <style>
            body{
                padding-top: 20px;
            }
            .tbl-1 th, .tbl-1 td{
                height: 30px;
                padding: 5px !important;
                
            }
            .tbl-1 td{
                font-size: 14px;
                font-weight: normal;
            }
            
            .tbl-1 .btn{
                padding: 0 5px !important;
                font-size: 12px;
            }
            .group-search{
                margin-bottom: 5px;
            }
            .page-item.active .page-link {
                z-index: 3;
                color: #fff;
                background-color: #343a40 !important;
                border-color: #343a40 !important;
            }
            .btn-add-new{
                background: #fff;
                border : 1px solid #c7c7c7;
                padding: 3px;
                color : #000;
                margin-left: 20px;
            }
            .span-plus{
                font-size: 20px;
            }
            .row-1{
                margin-right: 0;
                margin-left: 0; 
            }
            .btn-add-new:hover {
                color: #000;
                background-color: #e0e0e0;
                border-color: #e0e0e0;
            }
            /* .a:link {
                color: #00FF00;
            }
            .a:hover {
                color: #FF00FF;
                text-decoration:blink;
            }
            .a:visited {
                color: #FF0000 !important;
            } */
            th{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1><a href="product">Products Page</a></h1>

            

            <div>
                <form action="searchPrByName" method="post">
                    @csrf
                    <div class='input-group group-search'>
                        <input class='form-control' type="text" placeholder='Search Product by name' name="name_search" value=''/>
                        <button type='submit'>Search</button>
                    </div>

                </form>
            </div>
            
            <table class='table tbl-1' border='1'>
                <thead class='thead-dark'>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Name</th>
                        <th scope='col'>Price</th>
                        <th scope='col'>Quantity</th>
                        <th scope='col'>Description</th>
                        <th scope='col'>Expired</th>
                        <th scope='col'>Image</th>
                        <th scope='col'>Action</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($productListView)>0)
                    @foreach ($productListView as $key => $value)
                    
                        <tr>
                            <td scope='row'>{{$key+1}}</td>
                            <!-- <td>{{$value->id}}</td>  -->
                            <!--<td>{{$value->name}}</td> -->
                            <td><a href="InforProduct/{{$value->id}}">{{$value->name}}</a></td>
                            <td>{{$value->price}}</td>
                            <td>{{$value->quantity}}</td>
                            <td>{{$value->description}}</td>
                            <td>{{date_format(date_create($value->expired), 'd-m-Y')}}</td>
                            <td>
                                <img src="/imgs/{{$value->img}}" alt="" style='width: 100px'>
                            </td>
                            
                            <td class='text-center'>
                                <a href="product/viewUpdate/{{$value->id}}"><button class='btn btn-success' type='button'>Edit</button></a>
                                <!-- <a href="DeleteProduct"><button class='btn btn-danger btn-delete' type='button' idproduct="{{$value->id}}">Delete</button></a> -->
                                <button class="btn btn-danger btn-delete" idproduct="{{$value->id}}" type="button">Delete</button>
                            </td>
                        </tr> 
                    @endforeach
                @else
                    <tr >
                        <td class="text-center" colspan="8">Không có dữ liệu phù hợp với kết quả search</td>
                    </tr>
                @endif
                </tbody>
            </table>
            {{$productListView->links()}}    
            <div><a href="createProduct">Click to add new product</a></div>
        </div>      
    </body>
    <script src="js/demo.js"></script>
</html>