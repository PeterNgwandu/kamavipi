<!DOCTYPE html>
<html lang="en" dir="ltr">
  @include('layout/partials.head')
  <body class="account-page">
    @include('layout/partials.auth_nav')
    @yield('content')

    @include('layout/partials.footer-scripts')
  </body>
</html>
