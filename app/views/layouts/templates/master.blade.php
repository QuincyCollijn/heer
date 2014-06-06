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
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron-top"></div>
    <div class="jumbotron">
         <div class="container">
              <a href="{{ url() }}"><img class="jumbotron-logo" src="/assets/logo.png" alt="logo" /></a>
              @include('layouts.templates.navigation')
         </div>
    </div>




    @yield('content')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?= javascript_include_tag() ?>
  </body>
</html>