<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
class RecipeController extends Controller
{
    function showall(){
        //Recipe::create("Recipe" =>$request->input('recipe'));
//        Recipe::create
//        ([ //buat nambah ke database  key: 'recipe' itu tergantung dari html input name ny
//            "Recipe" => "babi" // $request->input('recipe'),
//
//        ]);
        $recipes = Recipe::all();
        return view('recipe',compact('recipes'));
    }

    public function processIngredient(Request $req){
        $temp = [];

        for( $i = 0; $i < 17 ; $i++) {
            if(isset($req[$i])){
                array_push($temp,$i);
            }
        }
        $recipes = Recipe::whereIn('Ingredient_Id',$temp)->get()->paginate(3);
//        dd($recipes);
        return view('recipe', compact('recipes'));
    }

    public function searchByName(Request $req){
        $value = $req->get('searchInput');
        $recipes = Recipe::where('Recipe_Name', 'LIKE', '%'.$value.'%')->paginate(3);
        return view('recipe', compact('recipes'));
    }

    public function detailRecipe($id){
        $recipe = Recipe::where('Recipe_Id', $id)->first();
        return view('recipe_detail', compact($recipe));
    }
}
