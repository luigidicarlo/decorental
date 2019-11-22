<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $related = Product::where('category_id', $product->category_id)
                ->where('id', '<>', $product->id)
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();
        return view('product.show')
                ->with('product', $product)
                ->with('related', $related);
    }

    public function showProduct(Request $request) {
        $product = Product::findOrFail($request->product);
        $shortDescription = explode('.', $product->description);

        $related = Product::where('category_id', $product->category_id)
                ->where('id', '<>', $product->id)
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();
        return view('product.show')
                ->with('product', $product)
                ->with('related', $related)
                ->with('short', $shortDescription[0].'.');
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
