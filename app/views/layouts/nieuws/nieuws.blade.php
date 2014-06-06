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
	            <div class="media media-left">
	              @if(isset($nieuws->img_url))
	              <a class="pull-left" href="nieuws/{{ $nieuws->slug }}">
	                <img class="media-object" width="130px" height="130px" src="{{ $nieuws->img_url }}">
	              </a>
	              @endif
	              <div class="media-body">
	                <h4 class="newsblock-title">{{ $nieuws->title }}</h4>
	                <small class="newsblock-date">{{ date("d-m-Y", strtotime($nieuws->created_at)) }}</small>
	                <p class="newsblock-text">{{ substr($nieuws->body, 0, 500) }}</p>
	                <p class="newsblock-readmore"><a href="nieuws/{{ $nieuws->slug }}" >Lees Meer</a></p>
	              </div>
	            </div>

	            <hr class="fancy-line">
	            <br />
			@endforeach
			{{ $news->links() }}
		</div>
	</div>
</div>

</div>
@stop