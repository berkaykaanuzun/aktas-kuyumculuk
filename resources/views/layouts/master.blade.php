<!DOCTYPE html>
<html lang="tr">
@include('layouts.head')

<body class="{{ request()->routeIs('home') ? 'home' : 'page' }}">
@includeWhen(View::hasSection('custom_header'), 'layouts.header-home')
@includeWhen(!View::hasSection('custom_header'), 'layouts.header')

@yield('content')

@include('layouts.footer')

@include('layouts.script')
</body>
</html>
