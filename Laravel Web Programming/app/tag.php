<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table= "tag";
    protected $primaryKey = "tagId";

    public function ingredient(){
        return $this->belongsTo(Ingredient::class, 'IngredientId', 'IngredientId');
    }
}
