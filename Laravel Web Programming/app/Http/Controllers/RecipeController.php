<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
class RecipeController extends Controller
{
    function showall(Request $request){
        //Recipe::create("Recipe" =>$request->input('recipe'));
//        Recipe::create
//        ([ //buat nambah ke database  key: 'recipe' itu tergantung dari html input name ny
//            "Recipe" => "babi" // $request->input('recipe'),
//
//        ]);
        $recipes = Recipe::all();//$recipes nampung , recipe::all() itu buat ngeview semua recipe yang ada di dari model


        //dd($recipes);
        return view('recipe',compact('recipes'));

    }

}
