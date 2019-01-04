<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'subscription';
    protected $primaryKey = 'SubscriptionId';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo(Users::class, 'UserId', 'UserId');
    }

    public function userSubscribed(){
        return $this->belongsTo(Users::class, 'UserSubscribedId', 'UserId');
    }
}
