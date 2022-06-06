<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Food extends Model
{
    protected $table = 'foods';
    public $primaryKey = 'id';
    public $timestamps = true;
    public function mean(){
        return $this->belongsToMany('App\Mean', 'means_foods', 'mean_id', 'food_id');
    }
    public function nguyenlieu(){
        return $this->belongsToMany('App\Nguyenlieu', 'nguyenlieu_foods', 'food_id', 'nguyenlieu_id');
    }
    public function users(){
        return $this->belongsToMany('App\User', 'users_foods');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
