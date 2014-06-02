@extends('layouts.master')

@section('content')
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51442599-1', 'quincycollijn.nl');
  ga('send', 'pageview');

</script>
    <div class="container">
      <div class="row">

      <!-- Place somewhere in the <body> of your page -->
          <div class="flexslider flexslider-main">
              <ul class="slides slide-main">

              @foreach($events as $event)
                  <li>
                  <div class="container">
                      <div class="slider-content-box">
                          <div class="slider-content">
                              <small class="slider-date">{{ date("d-m-Y", strtotime($event->date_start)) }}</small>
                              <h3 class="slider-header">{{ $event->title }}</h3>
                              <p class="slider-text">{{ $event->lead }}</p>
                              <a href="evenementen/{{ $event->slug }}"><button type="button" class="btn btn-primary btn-lg">Meer info!</button></a>
                          </div>
                      </div>
                     </div>
                      <img class="slider-image" src={{ $event->img_url }} />
                  </li>
              @endforeach
              </ul>
          </div>

       </div><!-- /row -->
    </div><!-- /container -->


    <div class="jumbotron-match">
        <div class="container">
            <div class="row">

                <div class="flexslider flexslider-match text-center">
                    <ul class="slides slider-match">
                    @foreach($matches as $match)
                        <li>
                            <div class="col-md-12 match-info">
                                    <small class="match-date">{{ date("F j - H:i", strtotime($match->date)) }}</small>
                                    <p class="match-slider">{{ $match->homeclub->naam }} <img class="match-logo" src={{ $match->homeclub->img_url }}> - <img class="match-logo" src={{ $match->awayclub->img_url }}> {{ $match->awayclub->naam }} </p>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="jumbotron-bottom">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="nieuws-titel">Laatste Nieuws</h2>

                    @foreach($news as $nieuws)
                    <div class="media">
                      @if(isset($nieuws->img_url))
                      <a class="pull-left" href="nieuws/{{ $nieuws->slug }}">
                        <img class="media-object media-short-img" width="130px" height="130px" src="{{ $nieuws->img_url }}">
                      </a>
                      @endif
                      <div class="media-body">
                        <h4 class="newsblock-title">{{ $nieuws->title }}</h4>
                        <small class="newsblock-date">{{ date("d-m-Y", strtotime($nieuws->created_at)) }}</small>
                        <p class="newsblock-text">{{ substr($nieuws->body, 0, 250) }}</p>
                        <p class="newsblock-readmore"><a href="nieuws/{{ $nieuws->slug }}" >Lees Meer</a></p>
                      </div>
                    </div>

                    <hr class="fancy-line">
                    @endforeach

                </div>

                <div class="col-md-5 col-md-push-1">
                    <h2 class="nieuws-titel">Speler van de Maand</h2>
                    @if(isset($players->img_url))
                        <img class="player-thumbnail" src="{{ $players->img_url }}" width="150px" height="200px">
                    @endif
                    <h4 class="player-infobig">NAAM :</h4>
                    </h4> <p class="player-info">{{ $players->firstname }} {{ $players->lastname }}</p>

                    <h4 class="player-infobig">LEEFTIJD :</h4>
                    <p class="player-info">{{ $players->age }}</p>

                    <h4 class="player-infobig">POSITIE :</h4>
                    <p class="player-info">{{ $players->position }}</p>
                </div>
            </div>
        </div>

    </div>

@stop