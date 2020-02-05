<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add New Product Page</h1>
    <div>
        <form action="insertProduct" method='post' enctype="multipart/form-data">
            @csrf
            <p>Name</p>
            <input name='name_product' type="text"><br>
            <p>Price</p>
            <input name='price_product' type="number"><br>
            <p>Quantity</p>
            <input name='quan_product' type="number"><br>  
            <p>Description</p>          
            <input name='des_product' type="text"><br>
            <p>Image</p>
            <input type="file" name="imgProduct"><br>
            <p>Expired</p>
            <input name='expired_product' type="date"><br><br>
            <input type="submit" value='Submit'>
        </form>
    </div>
</body>
</html>