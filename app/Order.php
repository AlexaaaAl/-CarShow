<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	public function user()
	{
		return $this->hasOne('App\User');
	}
	public function car()
	{
		return $this->hasOne('App\Car');
	}
}
