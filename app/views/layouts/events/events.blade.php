@extends('layouts.templates.master')

@section('content')

<div class="container-fluid">
	<div class="row">
	    <img class="header-image" width="100%" height="200px"  src="/assets/events/training.jpg" />
	    <div class="container">
	        <h1 class="page-title">EVENEMENTEN</h1>
	    </div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			@foreach($events as $event)
	            <div class="media media-left">
	              @if(isset($event->img_url))
	              <a class="pull-left" href="events/{{ $event->slug }}">
	                <img class="media-object" width="130px" height="130px" src="{{ $event->img_url }}">
	              </a>
	              @endif
	              <div class="media-body">
	                <h4 class="newsblock-title">{{ $event->title }}</h4>
	                <small class="newsblock-date">{{ date("d-m-Y", strtotime($event->created_at)) }}</small>
	                <p class="newsblock-text">{{ substr($event->content, 0, 500) }}</p>
	                <p class="newsblock-readmore"><a href="evenementen/{{ $event->slug }}" >Lees Meer</a></p>
	              </div>
	            </div>

	            <hr class="fancy-line">
	            <br />
			@endforeach
			{{ $events->links() }}
		</div>
	</div>
</div>

</div>
@stop