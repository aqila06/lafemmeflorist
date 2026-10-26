<!DOCTYPE html>
<html lang="id">
<head>
    <title>LaFemme Florist</title>
    @include('layouts.guest.css')
</head>
<body>

  @include('layouts.guest.header')

  <main>
    @yield('content')
  </main>

  @include('layouts.guest.footer')

  @include('layouts.guest.js')

</body>
</html>