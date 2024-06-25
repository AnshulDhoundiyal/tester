<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')

    <div>
        <lable>Name</lable>
        <input type="text" name="name" placeholder="Name"/>
    <div>
    <div>
        <lable>Qty</lable>
        <input type="text" name="qty" placeholder="Qty"/>
    <div>
    <div>
        <lable>Price</lable>
        <input type="text" name="price" placeholder="Price"/>
    <div>
    <div>
        <lable>Description</lable>
        <input type="text" name="description" placeholder="Description"/>
    <div>
    <div>
        <input type="submit" value="Save a New Product" />
</form>
</body>
</html>
