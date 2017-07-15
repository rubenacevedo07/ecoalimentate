<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{	
	protected $table = 'tags';

    public function notices()
    {
    	return $this->belongsToMany('App\Notice');
    }
}
