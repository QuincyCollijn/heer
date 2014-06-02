<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Quincy Collijn">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    @yield('head')
    <?= stylesheet_link_tag() ?>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51442599-1', 'quincycollijn.nl');
  ga('send', 'pageview');

</script>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&appId=1438322229756322&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron-top"></div>
    <div class="jumbotron">
         <div class="container">
              <a href="http://quincycollijn.nl"><img class="jumbotron-logo" src="/assets/logo.png" alt="logo" /></a>
              <nav class="navbar navbar-mainpage navbar-default" role="navigation">
                <div class="container">
                  <!-- Brand and toggle get grouped for better mobile display -->
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
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">TEAM</a>
                      <ul class="dropdown-menu">
                        <li class="li-dropdown"><a class="dropdown-color" href="http://quincycollijn.nl/nieuws">NIEUWS</a></li>
                        <li class="li-dropdown"><a class="dropdown-color" href="http://quincycollijn.nl/evenementen">EVENEMENTEN</a></li>
                        <li class="li-dropdown"><a class="dropdown-color" href="#">SELECTIE</a></li>
                        <li class="li-dropdown"><a class="dropdown-color" href="#">STAFF</a></li>
                        <li class="li-dropdown"><a class="dropdown-color" href="#">WEDSTRIJDEN &amp; UITSLAGEN</a></li>
                      </ul>
                  </li>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
         </div>
    </div>




    @yield('content')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?= javascript_include_tag() ?>
  </body>
</html>