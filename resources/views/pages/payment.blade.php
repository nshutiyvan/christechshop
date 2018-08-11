@extends('layouts.front')

@section('content')


    <section id="do_action">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="total_area">
                        <ul>
                            {{--<li>Cart Sub Total <span>{{ Cart::subtotal() }} Frw</span></li>--}}
                            {{--<li>Eco Tax <span>$2</span></li>--}}
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>{{ Cart::total() }} Frw</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>Select which payment method you want to use</h3>
                <p>Choose whether you pay with card or cash in hand, we accept each of those.</p>
            </div>
            <p>@include('admin.include.errors')</p>
            <div class="row">
                @foreach(Cart::content() as $product)
                <div class="col-sm-6">
                    <div class="chose_area">
                        <form method="POST" action="{{ route('place.order') }}">
                            @csrf
                        <ul class="user_option">
                            <li>
                                <input type="radio" name="payment_method" value="handcash">
                                <label>Cash in hand</label>
                            </li>
                            <li>
                                <input type="radio" name="payment_method" value="card">
                                <label>Pay wirh card</label>
                            </li>
                            <li>
                                <input type="hidden" name="total" value="{{ Cart::total() }}">
                            </li>
                        </ul>
                        <input class="btn btn-default check_out" type="submit" value="Continue">
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!--/#do_action-->


@endsection