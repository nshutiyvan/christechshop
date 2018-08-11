<?php

namespace App\Http\Controllers;

use App\Category;
use App\Payment;
use App\Product;
use App\Slider;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $products = Product::all();
        $categories = Category::all();

        if(auth()->user()->admin==1){
            return view('admin.home');
        }
        else{
            return view('pages.home_content')->with('products', Product::orderBy('created_at', 'desc')->paginate(6))
                                                   ->with('categories',$categories)
                                                   ->with('sliders',$sliders);
        }

    }
}
