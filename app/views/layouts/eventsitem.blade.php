@extends('layouts.master')

@section('content')

<div class="container-fluid">
	<div class="row">
	    <img class="header-image" width="100%" height="200px"  src="/assets/events/svme-heer.png" />
	    <div class="container">
	        <h1 class="page-title">TEAM</h1>
	    </div>
	</div>
</div>

<nav class="navbar navbar-subpage navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      	<li><a href="http://quincycollijn.nl/nieuws">NIEUWS</a></li>
      	<li class="active"><a href="http://quincycollijn.nl/evenementen">Evenementen</a></li>
        <li><a href="#">SELECTIE</a></li>
        <li><a href="#">STAFF</a></li>
        <li><a href="#">WEDSTRIJDEN & UITSLAGEN</a></li>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			@foreach($events as $event)
				<ol class="breadcrumb">
				  <li><a href="http://quincycollijn.nl/evenementen">EVENEMENTEN</a></li>
				  <li class="active">{{ $event->title }}</li>
				</ol>
				<div class="media media-left">
				  <div class="media-content">
				    <h4 class="media-heading">{{ $event->title }}</h4>
				    <small class="media-date">{{ date("d-m-Y", strtotime($event->date_start)) }}</small>
				    <p class="media-body">{{ $event->content }}</p>
				  <a class="pull-left" href="#">
				    <img class="media-object media-news-img" src="{{ $event->img_url }}">
				  </a>
				  </div>
				</div>
			@endforeach
		</div>
	</div>
</div>

</div>
@stop