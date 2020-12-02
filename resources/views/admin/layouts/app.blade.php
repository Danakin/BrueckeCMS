@include('admin.layouts.partials.header')

@include('admin.layouts.partials.nav')
<main class="container mx-auto px-4 sm:pl-64 sm py-4 overflow-y-auto relative z-0">
    @yield('content')
</main>

@include('admin.layouts.partials.footer')
