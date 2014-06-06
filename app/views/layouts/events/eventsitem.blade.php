@extends('layouts.templates.master')

@section('content')

<div class="container-fluid">
	<div class="row">
	    <img class="header-image" width="100%" height="200px"  src="/assets/events/svme-heer.png" />
	    <div class="container">
	        <h1 class="page-title">EVENEMENTEN</h1>
	    </div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			@foreach($events as $event)
				<ol class="breadcrumb">
				  <li><a href="/evenementen">EVENEMENTEN</a></li>
				  <li class="active">{{ $event->title }}</li>
				</ol>
				<div class="media media-left">
				  <div class="media-content">
				    <h4 class="media-heading">{{ $event->title }}</h4>
				    <small class="media-date">{{ date("d-m-Y", strtotime($event->date_start)) }}</small>
				    <p class="media-body">{{ $event->content }}</p>

				    <div class="row text-center">

				    <img class="media-big" src="{{ $event->img_url }}">

				  </div>
				  </div>
				</div>
			@endforeach
		</div>
	</div>
</div>

</div>
@stop