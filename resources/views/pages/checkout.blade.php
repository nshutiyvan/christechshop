@extends('layouts.front')

@section('content')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Check out</li>
            </ol>
        </div><!--/breadcrums-->
        <div class="register-req">
            <p>Please fill the from...........</p>
        </div><!--/register-req-->
        <div class="shopper-informations">
            <div class="row">
                <div class="col-sm-12 clearfix">
                    <div class="text-center">
                        <p>@include('admin.include.errors')</p>
                    </div>
                    <div class="bill-to">
                        <p>Shipping details</p>
                        @foreach(Cart::content() as $product)
                        <div class="form-one">
                            <form method="POST" action="{{ route('shipping.store') }}">
                                @csrf
                                <input type="text" name="email" placeholder="Email">
                                <input type="text" name="firstname" placeholder="First Name">
                                <input type="text" name="lastname" placeholder="Last Name">
                                <input type="text" name="address" placeholder="Address">
                                <input type="text" name="phonenumber" placeholder="Phone Number">
                                <input type="text" name="city" placeholder="City">
                                <input type="hidden" name="product_name" value="{{ $product->name }}">
                                <input type="hidden" name="product_price" value="{{ $product->price }}">
                                <input type="hidden" name="product_quantity" value="{{ $product->qty }}">
                                <input type="submit" class="btn btn-default" value="Done">
                            </form>
                        </div>
                         @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="review-payment">
            <h2>Review & Payment</h2>
        </div>
    </div>
</section> <!--/#cart_items-->

@endsection