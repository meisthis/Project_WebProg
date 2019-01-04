<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function removeTag($id, Request $req){
        Tag::where('TagId', $id)->delete();
        return redirect('/');
    }
}
