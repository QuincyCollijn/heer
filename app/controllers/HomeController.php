<?php

class HomeController extends BaseController {

	public function index()
	{
		$news = News::take(3)->orderBy('created_at', 'desc')->get();
		$events = Events::get();
		$players = Players::where('firstname', '=', 'Quincy')->where('lastname', '=', 'Collijn')->firstOrFail();
		$matches = Matches::with('homeclub')->with('awayclub')->get();

		return View::make('layouts.home')->with('news', $news)->with('events', $events)->with('players', $players)->with('matches', $matches);
	}

}
