<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';
    public $timestamps = false;

    public function label(){
        return $this->belongsTo(Label::class, 'Label_id');
    }

    public function recipe(){
        return $this->hasMany(Recipe::class);
    }
}
