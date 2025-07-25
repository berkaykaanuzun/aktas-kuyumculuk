@include('layouts.head')

@includeWhen(View::hasSection('custom_header'), 'layouts.header-home')
@includeWhen(!View::hasSection('custom_header'), 'layouts.header')

@yield('content')

@include('layouts.footer')

@include('layouts.script')
