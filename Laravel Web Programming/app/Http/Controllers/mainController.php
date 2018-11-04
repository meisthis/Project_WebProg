<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function viewLabel(){
        $label = ['Meat','Vegetable', 'Noodle', 'Fruit', 'ETC'];
        $labelClick = ['labelMeat()', 'labelVegetable()', 'labelNoodle()', 'labelFruit()', 'labelETC()'];
        return view('home', compact('label'), compact('labelClick'));
    }
}
