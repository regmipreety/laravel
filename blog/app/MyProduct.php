<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MyProduct extends Model
{
	protected $table='my_products';
    protected $fillable=[
    	'name', 'detail','price','stock','discount'

    ]

    ;
}
