<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/all-products.css')}}">
    <title>Document</title>
</head>
<body>
    @include('partials.nav-bar')
    @foreach ($products->take(16) as $product)
            <h2>{{$product->title}}</h2>
            <h2>{{$product->description}}</h2>
            <h2>{{$product->price}}</h2>
            <img src="{{asset ('images/' . $product->image)}}" alt="">

    @endforeach


</body>
</html>