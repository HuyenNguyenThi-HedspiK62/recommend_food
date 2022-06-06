<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeanFood extends Model
{
    protected $table = 'means_foods';
    public $primaryKey = 'id';
    public $timestamps = false;
}
