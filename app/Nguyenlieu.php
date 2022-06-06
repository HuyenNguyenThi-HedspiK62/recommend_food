<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Food;

class Nguyenlieu extends Model
{
    protected $table = 'nguyenlieu';
    protected $fillable = ['name', 'luong'];
    public $primaryKey = 'id';
    public $timestamps = true;

    public function foods(){
        return $this->belongsToMany('App\Food', 'nguyenlieu_foods', 'nguyenlieu_id', 'food_id');
    }
}
