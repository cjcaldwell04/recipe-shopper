<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarItem extends Model
{
	protected $fillable = [
		'day', 'meal'
	];

	public function cart()
	{
		return $this->hasMany(CartItem::class);
	}
}
