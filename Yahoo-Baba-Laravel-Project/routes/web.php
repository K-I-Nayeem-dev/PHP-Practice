<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/postasdfeasf', function() {
    return view('post');

    // if($id){
    //     return "<h1>This Page ID : $id & Comment ID :  $comment</h1>";
    // }
    // else{
    //     return "<h1>No User Id</h1>";
    // }

})->name('post');

Route::get('/firstpostasdfeasdf', function () {
    return view('firstpost');
})->name('first-post');


Route::prefix('post')->group(function(){

    Route::get('/about', function () {
        return view('About');
    });

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/firstpost', function () {
        return view('firstpost');
    });

});

Route::view('/homesadfgagsdg', 'home')->name('home');

Route::view('/test', 'about')->name('about');

Route::view('/js', 'js')->name('js');

Route::redirect('/about', '/test');

Route::fallback(function(){
    return view('404');
});
