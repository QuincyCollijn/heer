<div class="container-fluid">
<nav class="navbar navbar-mainpage navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
    <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="team" class="dropdown-toggle" data-toggle="dropdown">TEAM</a>
          <ul class="dropdown-menu">
            <li class="li-dropdown"><a class="dropdown-color" href="{{ url('selectie')}}">SELECTIE</a></li>
            <li class="li-dropdown"><a class="dropdown-color" href="{{ url('programma')}}">WEDSTRIJDEN &amp; UITSLAGEN</a></li>
            <li class="li-dropdown"><a class="dropdown-color" href="{{ url('speler_vd_maand')}}">SPELER VAN DE MAAND</a></li>
          </ul>
        </li>
         <li><a href="{{ url('nieuws')}}">NIEUWS</a></li>
         <li class="dropdown">
           <a href="team" class="dropdown-toggle" data-toggle="dropdown">MEDIA</a>
           <ul class="dropdown-menu">
             <li class="li-dropdown"><a class="dropdown-color" href="#">FOTO'S</a></li>
             <li class="li-dropdown"><a class="dropdown-color" href="#">VIDEO'S</a></li>
             <li class="li-dropdown"><a class="dropdown-color" href="#">VERSLAGEN</a></li>
           </ul>
         </li>
         <li><a href="{{ url('evenementen')}}">EVENEMENTEN</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
</nav>
</div><!-- /.container-fluid -->