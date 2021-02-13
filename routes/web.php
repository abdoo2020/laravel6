<?php
use App\Product;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Index', 'ProductController@index');
Route::get('produit/create', 'ProductController@create');
Route::post('produit', 'ProductController@store');
// Route::get('prod/{id}/edit', 'ProductController@edit');
// Route::put('prod/{id}', 'ProductController@update');
// Route::delete('prod/{id}', 'ProductController@destroy');
// Route::get('prod/{id}/show', 'ProductController@show');
// /*
Route::view('/tst','test');

Route::get('/prod', function () {

    $prod = Product::all();

    foreach($prod as $value){
        echo"titre  . $value->titre ";
        
    }
        
    
});