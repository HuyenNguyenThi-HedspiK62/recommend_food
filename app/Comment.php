<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'foods';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function users(){
        return $this->belongsToMany('App\User', 'posts', 'food_id', 'user_id');
    }
}
