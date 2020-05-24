<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    public function car()
	{
		return $this->hasOne('App\Category');
	}
}
