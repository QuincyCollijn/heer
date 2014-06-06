<?php

Class EventController extends BaseController
{
	public function show($slug)
	{
		$events = Events::where('slug', '=', $slug)->get();

		return View::make('layouts.events.eventsitem')->with('events', $events);
	}

	public function all()
	{
		$events = Events::orderBy('date_start', 'desc')->paginate(5);

		return View::make('layouts.events.events')->with('events', $events);
	}
}