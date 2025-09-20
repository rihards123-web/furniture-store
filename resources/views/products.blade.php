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

    {{-- this must be fixed "<b>Home ></b>" is not working :( --}}
<section class="products-banner">
    <h1>Shop</h1>
    <p><b>Home ></b> Shop</p> 
</section>

<section class="product-list">
 @foreach ($products->take(16) as $product)
            {{-- contains the whole product card--}}
            <div class="product-container">
                {{-- pretty obvious, but still, container for image --}}
                <div class="product-container-image">
                    <img src="{{asset ('images/' . $product->image)}}" alt="">
                </div>

                <div class="product-container-details">
                    <div class="product-container-details-heading">
                        <p>{{$product->title}}</p>
                    </div>
                    <div class="product-container-details-description">      
                        <p>{{$product->description}}</p>
                    </div>
                    <div class="product-container-details-class">
                        <p>{{$product->price}}</p>
                    </div>
                </div>
            </div>
    @endforeach

</section>
</body>
</html>