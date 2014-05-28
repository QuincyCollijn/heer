<?php

Class NewsController extends BaseController
{
	public function show($slug)
	{
		$news = News::where('slug', '=', $slug)->get();

		return View::make('layouts.nieuws')->with('news', $news);
	}
}