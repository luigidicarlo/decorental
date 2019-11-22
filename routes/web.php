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
use App\Product;
use App\Work;

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

Route::get('/carrito', function () {
    return view('cart');
});

Route::get('/ceo', function () {
    return view('ceo');
});

Route::get('/nuestros-trabajos', function () {
	$works = Work::paginate(3);
    return view('our-work', ['works' => $works]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('product', 'ProductController')->middleware('auth');
Route::resource('category', 'CategoryController')->middleware('auth');
Route::resource('work', 'WorkController')->middleware('auth');


Route::get('/products/{product}', 'ProductController@showProduct');
