@extends('layouts.templates.master')

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
        <li><a href="selectie">SELECTIE</a></li>
      	<li><a href="programma">WEDSTRIJDEN &amp; UITSLAGEN</a></li>
        <li class="active"><a href="speler_vd_maand">SPELER VAN DE MAAND</a></li>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(isset($players->img_url))
                <img class="player-picture" src="{{ $players->img_url }}" width="360px" >
            @endif
            <div class="player-information">
                <h4 class="player-infobig spelervdweek">NAAM :</h4>
                </h4> <p class="player-info spelervdweek-info">{{ $players->firstname }} {{ $players->lastname }}</p>

                <h4 class="player-infobig spelervdweek">LEEFTIJD :</h4>
                <p class="player-info spelervdweek-info">{{ $players->age }}</p>

                <h4 class="player-infobig spelervdweek">POSITIE :</h4>
                <p class="player-info spelervdweek-info">{{ $players->position }}</p>
            </div>
        </div>

    </div>
</div>
@stop


