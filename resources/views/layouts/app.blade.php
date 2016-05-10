<!DOCTYPE html>
@yield('vars')
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
      if (empty($pageTitle)) {
        $pageTitleText = '🖕 Orbital';
      } else {
        $pageTitleText = $pageTitle . ' | 🖕 Orbital';
      }
    ?>
    <title>{{ $pageTitleText }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="{{ $bodyClass }}">
  <div class="container-fluid">
    @section('header')
      <nav class="global">
        <h1><a href="{{ url('/') }}"><span class="finger-label">🖕 Fuck</span>
            <span>Orbital</span></a></h1>
      </nav>
    @show

    @yield('content')
  </div>

  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
</body>
</html>
