<!DOCTYPE html>
@yield('vars')
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $pageTitleText = empty($pageTitle) ? '🖕 Fuck Orbital' : $pageTitle . ' | 🖕 Fuck Orbital'; ?>
    <title>{{ $pageTitleText }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="{{ $bodyClass }}">
  <div class="container-fluid">
    @section('header')
      <nav class="global">
        @if (Auth::check())
          <a href="{{ action('AuthController@logout') }}" class="btn btn-primary pull-right">Logout</a>
          <a href="{{ action('AdminController@index') }}" class="btn btn-primary pull-right">Admin</a>
        @endif
          <h1><a href="{{ url('/') }}">
              <span class="finger-label">🖕</span>
              <span class="word-fuck">Fuck</span>
              <span>Orbital</span></a>
          </h1>
      </nav>
    @show

    @yield('content')

    <footer class="global">
      Created by Zhang Yi Jiang. <a href="{{ action('HomeController@doc') }}">Fuck Orbital API</a>.
      <a href="https://github.com/ZhangYiJiang/fuck-orbital">Read more about the motivation,
        the project log or fork us on GitHub!</a>
    </footer>
  </div>
</body>
</html>
