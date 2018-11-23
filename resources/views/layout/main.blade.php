<!DOCTYPE html>
<html lang="en" dir="ltr">
  @include('layout/partials.head')
  <body class="bg-color">
    @include('layout/partials.top-header')
    @include('layout/partials.nav')

    @yield('content')

    @include('layout/partials.footer')
    @include('layout/partials.footer-scripts')
  </body>
</html>
