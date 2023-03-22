
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rec | @yield('title')</title>
  <link rel="stylesheet" href="{{ asset("assets/css/styles.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/css/bootstrap/system.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/css/bootstrap/icons.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/css/navbar.css") }}">
  <link rel="stylesheet" href="https://use.typekit.net/dnb0epn.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/js-confetti@0.9.0/dist/js-confetti.browser.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.2.min.js"  crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="{{ asset("assets/css/owl/owl.carousel.min.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/css/owl/owl.theme.default.min.css") }}">
  <script src="{{ asset("assets/js/owl/owl.carousel.min.js") }}"></script>

</head>

<body>
    <header>
        @include('components.guest.navbar')
    </header>
    @yield('content')
  
  
    @include("components.guest.footer")

    @stack('footer-scripts')
</body>
</html>