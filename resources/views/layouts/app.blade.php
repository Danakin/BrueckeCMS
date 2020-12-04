@include('layouts.partials.header')
@include('layouts.partials.nav')
<div class="min-h-screen bg-blue-200 pt-12 px-2">

    <!-- Page Heading -->
    {{-- <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            @yield('header')
        </div>
    </header> --}}

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>
</div>
@include('layouts.partials.footer')
