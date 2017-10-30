<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.css.map">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css.map">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        a {text-decoration: none}
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
    <div id="app">
       <nav class="navbar is-success">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{url('/')}}" style="text-decoration: none">
    <b>
      &nbsp;Book Store
      </b>
    </a>
    <div class="navbar-burger burger" data-target="navMenuColorsuccess-example">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navMenuColorsuccess-example" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" style="text-decoration: none" href="{{url('buku')}}">
         <i class="fa fa-book"></i>
        &nbsp;Buku
      </a>
      <a class="navbar-item" style="text-decoration: none" href="{{url('distributor')}}">
         <i class="fa fa-address-book"></i>
        &nbsp;Distributor
      </a>
      <a class="navbar-item" style="text-decoration: none" href="{{url('pasok')}}">
         <i class="fa fa-telegram"></i>
        &nbsp;Pasok
      </a>
      <a class="navbar-item" style="text-decoration: none" href="{{url('laporan')}}">
         <i class="fa fa-flag"></i>
        &nbsp;Laporan
      </a>
      <a class="navbar-item" style="text-decoration: none" href="{{url('user')}}">
         <i class="fa fa-user-circle-o"></i>
        &nbsp;User
      </a>
       <a class="navbar-item" style="text-decoration: none" href="{{url('informasi')}}">
         <i class="fa fa-user-podcast"></i>
        &nbsp;Informasi
      </a>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
            <p class="control">
            <a class="button is-primary" href="{{url('penjualan')}}" style="text-decoration: none">
              <span class="icon">
                <i class="fa fa-usd"></i>
              </span>
              <span>Kasir</span>
            </a>
          </p>
         @if (Auth::guest())
          <p class="control">
            <a class="button is-primary" style="text-decoration: none" href="https://github.com/jgthms/bulma/archive/0.5.1.zip">
              <span class="icon">
                <i class="fa fa-download"></i>
              </span>
              <span>Login</span>
            </a>
          </p>
          @else
          <p class="control">
               <div class="navbar-item has-dropdown is-hoverable">
              <span class="button is-primary"> 
                 <i class="fa fa-user-o"></i>
                &nbsp;{{Auth::user()->name}}
                </span>
              <div class="navbar-dropdown">
            <a  style="text-decoration: none" href="{{url('/logout')}}"> 
              <span class="navbar-item"><i class="fa fa-sign-out"></i>&nbsp;Logout</span>
            </a>
              </div>
          </div>
          </p>
          @endif
        </div>
      </div>
    </div>
  </div>
</nav>
    </div>

    <!-- Scripts -->
        @yield('content')
</body>
    <script src="/js/app.js"></script>
</html>
