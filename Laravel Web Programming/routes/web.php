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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', 'mainController@viewLabel');

Route::get('/register', function () {
    return view('register');
});

//Route::get('/recipe', function () {
//    return view('recipe');
//});
// /recipes nama url , recipecontroller nama controller , showall itu function di controller
Route::get('/recipe',"RecipeController@showall");
