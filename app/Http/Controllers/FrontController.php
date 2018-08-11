<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $products = Product::all();
        $categories = Category::all();
        return view('pages/home_content')->with('products', Product::orderBy('created_at', 'desc')->paginate(6))
                                              ->with('categories',$categories)
                                              ->with('sliders',$sliders);

    }

    public function product_by_category($id)
    {
        $products = Product::all();
        $category = Category::find($id);
        $sliders = Slider::all();

        return view('pages/product_by_category')->with('products', $products)
                                                      ->with('category',$category)
                                                      ->with('sliders',$sliders);
    }

    public function product_single($id)
    {
        $product = Product::where('id', $id)->first();

        $categories = Category::all();
        $sliders = Slider::all();

        return view('pages/product_single')->with('product', $product)
                                                 ->with('categories',$categories)
                                                 ->with('sliders',$sliders);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
