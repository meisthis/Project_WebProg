<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Ingredient;
use Illuminate\Support\Facades\Session;

class IngredientController extends Controller
{
    public function getLabelIngredient(Request $req){
        $search = $req->get('name');
        $ingredient = Ingredient::where('LabelId', $search);
//        return view('home', compact('ingredient'));
        return compact('ingredient');
    }

    public function viewIngredient(){
        $ingredient = Ingredient::all();
        return view('Session Login.dashboard_insert_recipe', compact('ingredient'));
    }

    public function processTag(Request $req){
        for($i=1; $i <= Ingredient::all()->count(); $i++){
            if(isset($req[$i])){
                if(Tag::where('IngredientId', $i)->get()->count() == 0){
                    $tag = new Tag();
                    $tag->IngredientId = $i;
                    $tag->save();
                }
            }
        }
        return redirect('/');
    }
}
