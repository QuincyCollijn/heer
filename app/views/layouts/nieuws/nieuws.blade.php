@extends('layouts.master')

@section('content')

<div class="container-fluid">
	<div class="row">
	    <img class="header-image" width="100%" height="200px"  src="/assets/events/training.jpg" />
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
      <li class="active"><a href="http://quincycollijn.nl/nieuws">NIEUWS</a></li>
      	<li><a href="http://quincycollijn.nl/evenementen">Evenementen</a></li>
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