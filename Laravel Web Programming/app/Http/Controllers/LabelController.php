<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Tag;
use Illuminate\Http\Request;
use App\Label;

class LabelController extends Controller
{
    public function getIngredientByLabel($id){
        $ingredient = Ingredient::where('LabelId', $id)->get();
        $label = Label::all();
        $tag = Tag::all();
        return view('home', compact('label') ,compact('ingredient'))->with(compact('tag'));
    }
}
