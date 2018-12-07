<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;

class IngredientController extends Controller
{
    public function getLabelIngredient(Request $req){
        $search = $req->get('name');
        $ingredient = Ingredient::where('Label_id', '=', $search)->with('label');
//        return view('home', compact('ingredient'));
        return compact('ingredient');
    }
}
