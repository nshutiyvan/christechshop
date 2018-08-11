@extends('layouts.front')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <h2 class="title text-center">Search results: {{ $query }}</h2>
                <div class="features_items"><!--features_items-->
                    @if($products->count() > 0)
                        @foreach($products as $product)
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ $product->image }}" alt="" />
                                            <h2>${{ $product->price }} Frw</h2>
                                            <a href="#"><p>{{ $product->name }}</p></a>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>${{ $product->price }} Frw</h2>
                                                <a href="{{ URL::to('product_single',['id' => $product->id]) }}"><p>{{ $product->name }}</p></a>
                                                <a href="{{ URL::to('product_single',['id' => $product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                            <li><a href="{{ URL::to('product_single',['id' => $product->id]) }}"><i class="fa fa-plus-square"></i>View product</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <tr>
                            <h1 style="text-align: center; padding-top: 12%;padding-bottom: 13%">No Products matched with your search</h1>
                        </tr>
                    @endif
                </div><!--features_items-->
            </div>
        </div>
    </section>


@endsection