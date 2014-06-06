<?php

Class NewsController extends BaseController
{
	public function show($slug)
	{
		$news = News::where('slug', '=', $slug)->get();

		return View::make('layouts.nieuws.nieuwsitem')->with('news', $news);
	}

	public function all(){
		$news = News::orderBy('created_at', 'desc')->paginate(5);

		return View::make('layouts.nieuws.nieuws')->with('news', $news);
	}
}