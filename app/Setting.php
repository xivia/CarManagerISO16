<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
   protected $table = 'Settings';

    protected $fillable = [
 		'user_id',
 		'column',
 		'row',
 		'scale',
    ];
}
