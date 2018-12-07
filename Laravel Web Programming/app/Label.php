<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $table ='labels';
    public $timestamps = false;

    public function ingredient(){
        return $this->hasMany(Ingredient::class);
    }
}
