<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-default">
  @include('admin/partials.head')
  <body>
    @include('admin/partials.nav')
    @yield('content')
    @include('admin/partials.scripts')
  </body>
</html>
