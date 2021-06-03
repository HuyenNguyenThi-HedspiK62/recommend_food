<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mean;
class Food extends Model
{
    //
    protected $table = 'foods';
    public $primaryKey = 'id';
    public $timestamps = false;
    public function mean(){
        return $this->belongsToMany('App\Mean', 'means_foods', 'food_id', 'mean_id');
    }
}
