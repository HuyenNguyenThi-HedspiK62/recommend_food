<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    protected $table = 'type_mean';
    public $primaryKey = 'id';
    public function means(){
        return $this->hasMany('App\Mean');
    }
}
