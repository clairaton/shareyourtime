<!doctype html>
<html lang="{{ app()->getLocale() }}">
  @include('partials.head')
  <body class="body">
    <div class="content">
    @include('partials.header')

        @yield('content')

    @include('partials.footer')
    </div>
  </body>
</html>
