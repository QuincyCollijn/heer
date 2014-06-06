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
        <li class="active"><a href="selectie">SELECTIE</a></li>
      	<li><a href="programma">WEDSTRIJDEN &amp; UITSLAGEN</a></li>
        <li><a href="speler_vd_maand">SPELER VAN DE MAAND</a></li>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

<div class="container selectie-container">
    <div class="row">
     @foreach($players as $player)
      <div class="col-xs-6 col-md-3 col-selectie">
            <div class="player-background">
                <h4 class="player-name">{{ $player->firstname }} {{ $player->lastname }}</h4>
                <div class="number-background">
                    <h4 class="player-number">14</h4>
                </div>
            </div>
          <img src="{{ $player->img_url }}" alt="{{ $player->firstname }} {{ $player->lastname }}">
      </div>
     @endforeach
    </div>
</div>

@stop


