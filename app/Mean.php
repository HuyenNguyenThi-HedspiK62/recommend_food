<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Food;
class Mean extends Model
{
    //
    protected $table = 'means';
    public $primaryKey = 'id';
    public $timestamps = false;
    public function food(){
        return $this->belongsToMany('App\Food', 'means_foods', 'mean_id', 'food_id');
    }
    public function type(){
        return $this->belongsTo('App\Type');
    }
}
