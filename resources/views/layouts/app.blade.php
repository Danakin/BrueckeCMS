@include('layouts.partials.header')
@include('layouts.partials.nav')
<div class="min-h-screen bg-gradient-to-tr from-blue-400 to-blue-200 pt-12 px-2">

    <!-- Page Content -->
    <main class="container mx-auto">
        @yield('content')
    </main>
</div>
@include('layouts.partials.footer')
