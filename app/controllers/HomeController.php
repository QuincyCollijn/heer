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

	public function getSelectie()
	{
		$players = Players::all();

		return View::make('layouts.pages.selectie')->with('players', $players);
	}

	public function getProgramma()
	{
		return View::make('layouts.pages.programma');
	}

	public function getSpelervdMaand()
	{
		$players = Players::where('firstname', '=', 'Quincy')->where('lastname', '=', 'Collijn')->firstOrFail();

		return View::make('layouts.pages.spelervdmaand')->with('players', $players);
	}
}
