<?php

namespace App\Http\Controllers;

use Session;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products')->with('products',$products)
                                           ->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        if($categories->count() == 0 ){

            Session::flash('message','You must have some Categories before attempting to create a product.');

            return redirect()->back();
        }

        $categories = Category::all();
        return view('admin.product_create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'color' => 'required',
            'image' => 'required|image',
            'size' => 'required',
            'short_description' => 'required',
            'long_description' => 'required'
        ]);

        $image = $request->image;

        $image_new_name = time().$image->getClientOriginalName();

        $image->move('uploads/products', $image_new_name);

        $product = Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'image' => 'uploads/products/'. $image_new_name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'price' => $request->price,
            'color' => $request->color,
            'size' => $request->size

        ]);

        Session::flash('message','Product Created Successfully.');

        return redirect()->route('product_create');
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
        $product = Product::find($id);

        return view('admin.product_edit')->with('product', $product)
                                               ->with('categories', Category::all());
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
        $this->validate($request, [
            'category_id' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'name' => 'required',
            'price' => 'required',
            'color' => 'required',
            'size' => 'required'
        ]);

        $product = Product::find($id);

        if($request->hasFile('image'))
        {
            $image = $request->image;

            $image_new_name = time().$image->getClientOriginalName();

            $image->move('uploads/products', $image_new_name);

            $image->featured = 'uploads/products'.$image_new_name;
        }

        $product->category_id = $request->category_id;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->size = $request->size;

        $product->save();

        Session::flash('message','Product updated successfully.');

        return redirect()->route('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if(file_exists($product->image))
        {
            unlink($product->image);
        }

        $product->delete();

        Session::flash('message','Product deleted successful.');

        return redirect()->route('products');
    }
}
