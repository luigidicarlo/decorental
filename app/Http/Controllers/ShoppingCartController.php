<?php

namespace App\Http\Controllers;

use App\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function show(Request $request) {
        if ($request->user()) {
            $user = $request->user()->id;
            $cart = ShoppingCart::where('user_id', $user);
            return view('cart', [
                'cart' => $cart
            ]);
        } else {
            return view('cart');
        }
    }
}
