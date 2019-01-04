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

Route::get('/dashboard', 'mainController@dashboard');

//with session
Route::get('/dashboard/signout', 'UsersController@signOut');
Route::get('/dashboard/recipe', 'RecipeController@viewOwnRecipe');
Route::get('/dashboard/subscription', 'SubscriptionController@viewSubscribedUser');
Route::get('/dashboard/recipe/delete/{id}', 'RecipeController@deleteRecipe');
Route::get('/dashboard/recipe/update/{id}', 'RecipeController@updateRecipe');
Route::get('/dashboard/recipe/insertNewRecipe', 'IngredientController@viewIngredient');
Route::get('/dashboard/recipe/subscription', 'SubscriptionController@viewSubscribe');
Route::get('/dashboard/recipe/searchRecipe', 'RecipeController@searchRecipe');
Route::get('/dashboard/recipe/{id}/like', 'RecipeSubscribeController@recipeLiked');
Route::get('/dashboard/user/{id}', 'UsersController@viewProfile');
Route::get('/dashboard/user/{id}/subscribe', 'UsersController@subscribeUser');
Route::get('/dashboard/user/{id}/unsubscribe', 'UsersController@unsubscribeUser');
Route::get('/recipe/{id}/submitCommend', 'RecipeCommendController@submitCommend');
Route::get('/recipe/{id}/{cid}/deleteCommend', 'RecipeCommendController@deleteCommend');
Route::get('/recipe/{id}/rate', 'RecipeRatingController@rateRecipe');
Route::post('/dashboard/recipe/searchByName', 'RecipeController@searchRecipeByName');
Route::post('/dashboard/recipe/insertNewRecipe/submit', 'RecipeController@insertNewRecipe');
Route::post('/dashboard/recipe/update/{id}/submit', 'RecipeController@updateRecipeAttempt');
Route::post('/recipe/{id}/submitRating', 'RecipeRatingController@submitRating');


//without session
Route::get('/home', 'mainController@homeView');
Route::get('/recipe',"RecipeController@showall");
Route::get('/label',"IngredientController@getLabelIngredient");
Route::get('/home/label/{id}', 'LabelController@getIngredientByLabel');
Route::get('/recipe/{id}', 'RecipeController@detailRecipe');
Route::get('/home/removeTags/{id}', 'TagController@removeTag');
Route::post('/registerUser', 'UsersController@registerUser');
Route::post('/signInRequest', 'UsersController@userLogin');
Route::post('/searchByName', "RecipeController@searchByName");
Route::post('/submitIngredient/search', "RecipeController@processIngredient");
Route::post('/submitIngredient', 'IngredientController@processTag');


