<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Product;
use Cart;
use Session;
use App\Shipping;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function logincheck()
    {
        return view('pages/login');
    }

    public function checkout()
    {
        $product = Product::all();

        return view('pages/checkout')->with('product', $product);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'phonenumber' => 'required',
            'city' => 'required',
        ]);

        $shipping = new Shipping;

        $shipping->email = $request->email;
        $shipping->firstname = $request->firstname;
        $shipping->lastname = $request->lastname;
        $shipping->address = $request->address;
        $shipping->phonenumber = $request->phonenumber;
        $shipping->city = $request->city;
        $shipping->product_name = $request->product_name;
        $shipping->product_price = $request->product_price;
        $shipping->product_quantity = $request->product_quantity;


        $shipping->save();

//        dd($request->all());

        return view('/pages/payment');
    }

    public function payment()
    {
        return view('/pages/payment');
    }

    public function place_order(Request $request)
    {
        $this->validate($request, [
            'payment_method' => 'required',
        ]);

        $payment = new Payment;

        $payment->payment_method = $request->payment_method;
        $payment->total = $request->total;

        $payment->save();

        Cart::destroy();

        return view('/pages/thankyou');
    }
}
