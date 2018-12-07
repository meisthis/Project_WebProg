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

Route::get('/register', function () {
    return view('register');
});

Route::get('/signin', function (){
    return view('signin');
});

Route::get('/signout', 'UsersController@signOut');
Route::get('/home', 'mainController@homeView');
Route::get('/recipe',"RecipeController@showall");
Route::get('/label',"IngredientController@getLabelIngredient");
Route::get('/recipe/{id}', 'RecipeController@detailRecipe');

Route::post('/registerUser', 'UsersController@registerUser');
Route::post('/signInRequest', 'UsersController@userLogin');
Route::post('/searchByName', "RecipeController@searchByName");
Route::post('/submitIngredient', "RecipeController@processIngredient");


