<!DOCTYPE html>
<html lang="id">
<head>
    <title>@yield('title', 'LaFemme Florist')</title>

    {{-- Partial CSS --}}
    @include('layouts.guest.css')
</head>
<body>

    {{-- Partial Header --}}
    @include('layouts.guest.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    {{-- Partial Footer --}}
    @include('layouts.guest.footer')

    {{-- Partial JS --}}
    @include('layouts.guest.js')

</body>
</html>