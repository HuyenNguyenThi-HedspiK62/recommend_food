<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Mean extends Model
{
    //
    protected $table = 'means';
    public $primaryKey = 'id';
    public $timestamps = true;
    public function food(){
        return $this->belongsToMany('App\Food', 'means_foods', 'mean_id', 'food_id');
    }
    public function type(){
        return $this->belongsTo('App\Type');
    }
    public function comment(){
        return $this->hasMany('App\Comment');
    }
}
