<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li> 
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('product.update', ['product' => $product]) }}">
        @csrf
        @method('put')
        <div>
            <label>Name</label> 
            <input type="text" name="name" placeholder="Name" value="{{ $product->name }}" /> <!-- Corrected input at line 23 -->
        </div> 
        <div>
            <label>Qty</label> 
            <input type="text" name="qty" placeholder="Qty" value="{{ $product->qty }}" /> <!-- Corrected input at line 28 -->
        </div> 
        <div>
            <label>Price</label> <!-- Corrected label tag at line 31 -->
            <input type="text" name="price" placeholder="Price" value="{{ $product->price }}" /> <!-- Corrected input at line 33 -->
        </div>
        <div>
            <label>Description</label> 
            <input type="text" name="description" placeholder="Description" value="{{ $product->description }}" /> <!-- Corrected input at line 38 -->
        </div> 
        <div>
            <input type="submit" value="Update" /> 
        </div>
    </form>
</body>
</html>
