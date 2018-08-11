<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function (){
    return App\Category::find(1)->products;
});

Route::get('/', [
    'uses' => 'FrontController@index',
    'as' => 'index'
]);

Route::get('/results', function (){

   $products = \App\Product::where('name','like', '%'. request('query').'%')->get();

   return view('/pages/results')->with('products', $products)
                              ->with('name', 'Search results: '  .request('query'))
                              ->with('query',request('query'));

});

Route::get('/product_by_category/{id}', [
    'uses' => 'FrontController@product_by_category',
    'as' => 'product_by_category'
]);

Route::get('/product_single/{id}', [
    'uses' => 'FrontController@product_single',
    'as' => 'product_single'
]);

Route::get('/cart', [
    'uses' => 'ShoppingController@cart',
    'as' => 'cart'
]);

Route::get('/cart/delete/{id}', [
    'uses' => 'ShoppingController@cart_delete',
    'as' => 'cart.delete'
]);

Route::get('/cart/incr/{id}/{qty}', [
    'uses' => 'ShoppingController@incr',
    'as' => 'cart.incr'
]);

Route::get('/cart/decr/{id}/{qty}', [
    'uses' => 'ShoppingController@decr',
    'as' => 'cart.decr'
]);

Route::get('/cart/rapid/add/{id}', [
    'uses' => 'ShoppingController@rapid_add',
    'as' => 'cart.rapid.add'
]);

Route::post('/cart/add', [
    'uses' => 'ShoppingController@add_to_cart',
    'as' => 'cart.add'
]);

Route::get('/cart/checkout', [
    'uses' => 'CheckoutController@index',
    'as' => 'cart.checkout'
]);

Route::post('/cart/checkout', [
    'uses' => 'CheckoutController@pay',
    'as' => 'cart.checkout'
]);

Route::get('/login/checkout', [
    'uses' => 'CheckoutController@logincheck',
    'as' => 'login.check'
]);

Route::get('/checkout', [
    'uses' => 'CheckoutController@checkout',
    'as' => 'checkout'
]);

Route::post('/shipping/save', [
    'uses' => 'CheckoutController@store',
    'as' => 'shipping.store'
]);

Route::get('/payment', [
    'uses' => 'CheckoutController@payment',
    'as' => 'payment'
]);

Route::post('/place/order', [
    'uses' => 'CheckoutController@place_order',
    'as' => 'place.order'
]);




Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('/dashboard', [
        'uses' => 'HomeController@index',
        'as' => 'admin.home'
    ]);

    Route::get('/categories', [
        'uses' => 'CategoriesController@index',
        'as' => 'categories'
    ]);

    Route::get('/category/create', [
        'uses' => 'CategoriesController@create',
        'as' => 'category_create'
    ]);

    Route::post('/category/store', [
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);

    Route::get('/category/edit/{id}', [
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);

    Route::post('/category/update/{id}', [
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
    ]);

    Route::get('/category/delete/{id}', [
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
    ]);

    Route::get('/products', [
        'uses' => 'ProductController@index',
        'as' => 'products'
    ]);

    Route::get('/product_create', [
        'uses' => 'ProductController@create',
        'as' => 'product_create'
    ]);

    Route::post('/product/store', [
        'uses' => 'ProductController@store',
        'as' => 'product.store'
    ]);

    Route::get('/product/edit/{id}', [
        'uses' => 'ProductController@edit',
        'as' => 'product.edit'
    ]);

    Route::post('/product/update/{id}', [
        'uses' => 'ProductController@update',
        'as' => 'product.update'
    ]);

    Route::get('/product/delete/{id}', [
        'uses' => 'ProductController@destroy',
        'as' => 'product.delete'
    ]);

    Route::get('/sliders', [
        'uses' => 'SliderController@index',
        'as' => 'sliders'
    ]);

    Route::get('/slider/create', [
        'uses' => 'SliderController@create',
        'as' => 'slider_create'
    ]);

    Route::post('/slider/store', [
        'uses' => 'SliderController@store',
        'as' => 'slider.store'
    ]);

    Route::get('/slider/delete/{id}', [
        'uses' => 'SliderController@destroy',
        'as' => 'slider.delete'
    ]);

    Route::get('/manage/payment', [
        'uses' => 'PaymentController@index',
        'as' => 'manage.payment'
    ]);

    Route::get('/payment/delete/{id}', [
        'uses' => 'PaymentController@destroy',
        'as' => 'payment.delete'
    ]);

    Route::get('/view/order', [
        'uses' => 'PaymentController@view_order',
        'as' => 'view.order'
    ]);

});
