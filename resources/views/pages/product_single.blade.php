@extends('layouts.front')

@section('content')

    <section>
     <div class="container">
      <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>Category</h2>
                <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                    @if($categories->count() > 0)
                        @foreach($categories as $category)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{ URL::to('product_by_category', ['id' => $category->id]) }}">{{ $category->name }}</a></h4>
                                </div>
                            </div>
                        @endforeach

                    @else
                        <div class="panel-heading">
                            <h4 class="panel-title"><a href="#">No categories yet!</a></h4>
                        </div>
                    @endif
                </div><!--/category-products-->

                <div class="shipping text-center"><!--shipping-->
                    <img src="{{ asset('app/images/home/shipping.jpg') }}" alt="" />
                </div><!--/shipping-->

            </div>
        </div>

                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{ $product->image }}" alt="" />
                                <h3>ZOOM</h3>
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">
                                <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <img src="{{ URL::to('app/images/product-details/new.jpg') }}" class="newarrival" alt="" />
                                <h2>{{ $product->name }}</h2>
                                <p>Color: {{ $product->color }}</p>
                                <img src="{{ URL::to('app/images/product-details/rating.png') }}" alt="" />
                                <span>
                                    @guest

									<span>{{ $product->price }} Frw</span>
									    <a href="{{ route('login.check') }}" ><button type="button" class="btn btn-fefault cart">
										    <i class="fa fa-shopping-cart"></i>
										    Login first
									    </button>
                                        </a>
                                    </form>

                                    @else

                                    <span>{{ $product->price }} Frw</span>
                                    <form action="{{ route('cart.add') }}" method="post">
                                        @csrf
									    <label>Quantity:</label>
									    <input title="Qty" type="text" name="qty" value="1" />
                                        <input type="hidden" name="product_id" value="{{ $product->id }}" />
									    <button type="submit" class="btn btn-fefault cart">
										    <i class="fa fa-shopping-cart"></i>
										    Add to cart
									    </button>
                                    </form>

                                    @endguest
								</span>

                                <p><b>Availability:</b> In Stock</p>
                                <p><b>Condition:</b> New</p>
                                <p><b>Category:</b> {{ $product->category->name }}</p>
                                <p><b>Size:</b> {{ $product->size }}</p>
                                <a href=""><img src="{{ URL::to('app/images/product-details/share.png') }}" class="share img-responsive"  alt="" /></a>
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->

                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li><a href="#details" data-toggle="tab">Details</a></li>
                                <li class="active"><a href="#reviews" data-toggle="tab">Reviews</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade" id="details" >
                                    <p>{{ $product->long_description }}</p>
                                </div>
                                <div class="tab-pane fade active in" id="reviews" >
                                    <div class="col-sm-12">
                                        <ul>
                                            <li><a href=""><i class="fa fa-user"></i>Fabrice</a></li>
                                            <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                            <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <p><b>Write Your Review</b></p>

                                        <!-- <form action="#">
										    <span>
											    <input type="text" placeholder="Your Name"/>
											    <input type="email" placeholder="Email Address"/>
										    </span>
                                                <textarea name="" ></textarea>
                                                <b>Rating: </b> <img src="{{ asset('app/images/product-details/rating.png') }}" alt="" />
                                                <button type="button" class="btn btn-default pull-right">
                                                    Submit
                                                </button>
                                        </form> -->

                                        @include('pages.include.disqus')
                                    </div>
                                </div>

                            </div>
                        </div><!--/category-tab-->

                </div>
            </div>
        </div>
    </section>

@endsection