<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Photo extends Model
{
    protected $fillable =[
        'path'
    ];

    public function imageable(){

        return $this -> MorphTo();
    }
}
