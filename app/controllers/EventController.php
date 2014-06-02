<?php

Class EventController extends BaseController
{
	public function show($slug)
	{
		$events = Events::where('slug', '=', $slug)->get();

		return View::make('layouts.eventsitem')->with('events', $events);
	}

	public function all()
	{
		$events = Events::orderBy('date_start', 'desc')->paginate(5);

		return View::make('layouts.events')->with('events', $events);
	}
}