<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mercado extends Model
{
    use SoftDeletes;

    public function users(){
	    return $this->belongsToMany('App\User');
	}

	public function mercadocategories(){
	 	return $this->belongsTo('App\Mercadocategory');
	}

	public function productos(){
	 	return $this->belongsToMany('App\Producto');
	}

    protected $dates = ['deleted_at'];

}
