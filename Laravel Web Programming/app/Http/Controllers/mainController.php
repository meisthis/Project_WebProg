<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Label;
use App\Users;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function homeView(){
        $label = Label::All();
        $ingredient = Ingredient::all();
        return view('home', compact('label'), compact('ingredient'));
    }
}
