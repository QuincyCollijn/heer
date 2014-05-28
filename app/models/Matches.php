<?php

class Matches extends Eloquent
{
	protected $table = 'matches';

	public function homeclub()
	{
		$data = $this->belongsTo('Clubs', 'home_id');

		return $data;
	}

	public function awayclub()
	{
		$data = $this->belongsTo('Clubs', 'away_id');

		return $data;
	}
}