<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
	protected $table = 'Cars';

    protected $fillable = [
		'name',
		'seats',
 		'brand_id',
 		'velocity',
		 'acceleration',
		 'basePrice',
		 'manufacturingYear',
 		'ps',
 		'price',
 		'weight',
 		'cylinders',
 		'drivetrain',
 		'doors',
 		'torque',
 		'transmission',
    ];
}