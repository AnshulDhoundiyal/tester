<!-- @extends('layouts.app') -->

<section class="mt-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="bg-gray-100 w-9/12 mx-auto p-6 shadow-lg rounded-lg border border-gray-300">
        <h1 class="text-4xl font-extrabold mb-6 text-gray-800 text-center">Product</h1>
        <div>
            @if(session()->has('success'))
            <div class="bg-green-200 text-green-800 px-4 py-2 rounded text-center mb-6 border border-green-400">
                {{session('success')}}
            </div>
            @endif
        </div>
        <div class="text-center mb-6">
            <a href="{{route('product.create')}}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors border border-blue-600">Create a Product</a>
        </div>
        <table class="bg-white border-collapse border border-gray-300 mx-auto w-full rounded-lg shadow-md">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700">ID</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700">Name</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700">Qty</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700">Price</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700">Description</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700">Edit</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700">Delete</th>
                </tr>
            </thead>
            <tbody class="bg-gray-100">
                @foreach($products as $product)
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{$product->id}}</td>
                    <td class="border border-gray-300 px-4 py-2">{{$product->name}}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{$product->qty}}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{$product->price}}</td>
                    <td class="border border-gray-300 px-4 py-2">{{$product->description}}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <a href="{{route('product.edit',['product'=> $product])}}" class="bg-indigo-500 text-white px-3 py-1 rounded-lg hover:bg-indigo-600 transition-colors inline-block">Edit</a>
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <form method="post" action="{{route('product.destroy',['product' => $product])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 transition-colors inline-block"/>
                        </form>
                    </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</section>
