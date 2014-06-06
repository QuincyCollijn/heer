@extends('layouts.templates.master')

@section('content')

<div class="container-fluid">
	<div class="row">
	    <img class="header-image" width="100%" height="200px"  src="/assets/events/training.jpg" />
	    <div class="container">
	        <h1 class="page-title">NIEUWS</h1>
	    </div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			@foreach($news as $nieuws)
				<ol class="breadcrumb">
				  <li><a href="/nieuws">NIEUWS</a></li>
				  <li class="active">{{ $nieuws->title }}</li>
				</ol>
				<div class="media media-subpage">
				  <div class="media-content">
				    <h4 class="media-heading">{{ $nieuws->title }}</h4>
				    <small class="media-date">{{ date("d-m-Y", strtotime($nieuws->created_at)) }}</small>
				    <p class="media-body">{{ $nieuws->body }}</p>
				    <div class="row text-center">

				    <img class="media-big" src="{{ $nieuws->img_url }}">

				  </div>
				  </div>
				</div>
			@endforeach
		</div>
	</div>
</div>

</div>
@stop