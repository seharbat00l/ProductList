<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit the product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body class="bg-dark text-light text-decoration-none">
<div class="container">  
    <h1>Create new product</h1>
    <form method="post" action="{{route('product.update', ['product'=> $product])}}">
        @csrf
        @method('post')

    <div class = "mb-3">
        <label for="">Name</label>
        <input type="text" name="name" placeholder="name" value="{{$product->name}}">
    </div>

    <div class = "mb-3">
        <label for="">Quantity</label>
        <input type="text" name="qty" placeholder="quantity" value="{{$product->qty}}">
    </div>

    <div class = "mb-3">
        <label for="">Price</label>
        <input type="text" name="price" placeholder="price" value="{{$product->price}}">
    </div>

    <div class = "mb-3">
        <input type="submit" value="Update the product">
    </div>
    </form>

 <a class="text-info text-decoration-none" href="/">Go Back</a>
</div>

</body>
</html>