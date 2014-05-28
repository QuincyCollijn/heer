<?php

class Clubs extends Eloquent
{
	protected $table = 'clubs';

	public $timestamps = false;

	public function matches()
	{
		return $this->hasMany('Matches', 'home_id', 'away_id');
	}
}