<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Magnitude extends Model
{
    public $incrementing = true;
    public $timestamps = false;

    use SoftDeletes;

    public function units()
    {
    	return $this->hasMany('App\Models\Unit');
    }

    public function formulas()
    {
        return $this->hasMany('App\Models\Formula');
    }
}
