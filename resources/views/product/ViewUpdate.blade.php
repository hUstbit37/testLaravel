<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .row-1{
            margin: 0;
        }
        form{
            width: 50%;
        }
        .btn-submit{
            margin-top : 10px;
        }
        .div-title{
            color : #333;
            font-weight : bold;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>Update Product {{$productUpdate->name}}</h1>
        <form action="/product/viewUpdate/{{$productUpdate->id}}" method='post' enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$productUpdate->id}}"><br>
            <div class="div-title">Name</div>
            <input class='form-control' name='name_product' type="text" value='{{$productUpdate->name}}'><br><br>
            <div class="div-title">Price</div>
            <input name='price_product' type="number" value='{{$productUpdate->price}}'><br><br>
            <div class="div-title">Quantity</div>
            <input name='quan_product' type="number" value='{{$productUpdate->quantity}}'><br><br> 
            <div class="div-title">Desription</div> 
            <input name='des_product' type="text" value='{{$productUpdate->description}}'><br><br>
            <div class="div-title">Image</div>
            <input class="form-control" type="file" name="imgProduct"><br><br>
            <div class="div-title">Expried</div>
            <input name='expired_product' type="date" value='{{$productUpdate->expired}}'><br><br>
            <!-- <input class='btn-submit' type="submit" value='Update'> -->
            <button type='submit' class='btn-submit'>Update</button><br><br>
        </form>
        <div><a href="/product" class='a-back'>Back</a></div>
    </div>

</body>
</html>