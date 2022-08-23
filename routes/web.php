<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get( '/', function(){
    return view( 'form' );
} );

Route::get('/userlist', function(){
    return view('userlist');
});

Route::get('/categorylist', function(){
    return view('categorylist');
});

Route::get('/category/{name?}', function($name='laravel'){
    return $name;
})->where('name', '[a-z]+');

Route::get('/productprice/{productprice}', function($productprice){
    echo "Product Price Is: " .$productprice;
})->where('productprice', '[0-9]+');

Route::get('/product/{name}/{price}', function($name, $price){
    return "Product Name: ".$name ."<br>"."Product Price Is: " .$price;
})->whereAlpha('name')->whereNumber('price');

// Route::get('/user', function(){
//     return view('user.create', ['name'=> 'Tarek']);
// })->whereAlpha('name');

Route::get('/user/{name?}', function($name='Tarek'){
    return view('user.create', ['name'=> $name]);
})->whereAlpha('name');

Route::get( '/userprofile/{name}', function($name){
    return view( 'user.userprofile', ['name' => $name] );
} )->whereAlpha('name');

Route::get( '/blog', function(){
    $personinfo = ['tarek hossen', '018676565', 'tarekhossen.offi@gmail.com'];
    return view( 'blog.index', compact('personinfo') );
} );

Route::get( '/rawhtml', function(){
    $name = "<h1>Tarek</h1>";
    return view( 'blog.index', compact('name') );
} );

Route::get( '/home', function(){
    return view('home');
} );

Route::get( '/contact', function(){
    return view('contact');
} );

Route::get( '/', function(){
    return view('index');
} );