@if (session()->has('success'))
<div class="bg-green-100 w-full p-4 border-l-4 text-green-800 border-green-500 mb-2">
    {{ session('success') }}
</div>
@endif
@if (session()->has('error'))
<div class="bg-red-100 w-full p-4 border-l-4 text-red-800 border-red-500 mb-2">
    {{ session('error') }}
</div>
@endif
