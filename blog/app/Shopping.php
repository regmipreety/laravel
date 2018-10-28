<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    protected $table='my_products';
    protected $fillable=[
    	'name', 'detail','price','stock','discount'

    ]

    ;
}
