<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function validation(Request $request) {
        return $request->validate([
            'name' => 'required|min:3|max:128',
            'description' => 'required',
            'price' => 'required|min:0.01|max:99999999.99',
            'discount' => 'nullable|min:0.01|max:100'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('product.index', compact('products'));
        
    }

       
    // public function showCategories($namecategory){
    //     $categories = Category::join('products', 'categories.id', '=', 'products.categories_id')
    //                             ->select('categories.*', 'products.name', 'products.prince','products.discount','products.description')
    //                             ->SearchCategory($namecategory)
    //                             ->get()
    //                             ->latest()
    //                             ->simplePaginate(25);
    //     return $categories;
    //     // return view('product.list-products', compact('categories'));
    // }
   
    

    public function searchCategories($name){
        $categories = Product::Search($name)->get();
        return view('product.prueba', compact('categories'));
    }
 
    // public function showProducts(){
    //     $products = Product::latest()->simplePaginate();
    //     return view('product.list-products', compact('products'));
    // }

    public function searchProducts($name){
        $products = Product::Search($name)->get();
        return view('product.prueba', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $this->validation($request);

        Product::create($validated);

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function showProduct(Request $request) {
        $product = Product::findOrFail($request->product);
        
        return view('product.show', compact('product'));
    }
    /*    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($this->validation($request));

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('product');
    }
}
