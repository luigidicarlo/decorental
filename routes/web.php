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

use App\Category;
use App\Product;
use App\User;
use App\Work;

# Debug
Route::get('/debug', function() {
    $products = factory(Product::class, 20)->make();
    $users = factory(User::class, 20)->make();
    $categories = factory(Category::class, 3)->make();
    $works = factory(Work::class, 10)->make();

    foreach ($products as $product) {
        Product::create($product->toArray());
    }

    foreach ($users as $user) {
        User::create([
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
        ]);
    }

    foreach ($categories as $category) {
        Category::create($category->toArray());
    }

    foreach ($works as $work) {
        Work::create($work->toArray());
    }

    return response()->json([
        'products' => $products->toArray(),
        'users' => $users->toArray(),
        'categories' => $categories->toArray(),
        'works' => $categories->toArray(),
    ], 201);
});

Route::get('/carrito', 'ShoppingCartController@show');

Route::get('/', function () {
	$products = Product::all();
    return view('welcome', ['products' => $products]);
});

Route::get('/contacto', function () {	
    return view('contact');
});

Route::get('/quienes-somos', function () {	
    return view('about-us');
});

Route::get('/nuestros-trabajos', function () {
	$works = Work::all();
    return view('our-work', ['works' => $works]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('product', 'ProductController')->middleware('auth');
Route::resource('category', 'CategoryController')->middleware('auth');
Route::resource('work', 'WorkController')->middleware('auth');


Route::get('/products/{product}', 'ProductController@showProduct');