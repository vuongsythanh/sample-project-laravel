<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.meta')
  @yield('title')
  @include('layouts.css')
  @yield('css')
</head>

<body role="document">
  <!-- Fixed navbar -->
  @include('layouts.nav')
  <div class="container theme-showcase" role="main">
    @yield('content')
    <hr>
    @include('layouts.bottom')
  </div>
  <!-- /container -->
  @include('layouts.scripts')
  @include('Alerts::show')
  @yield('scripts')
</body>

</html>
