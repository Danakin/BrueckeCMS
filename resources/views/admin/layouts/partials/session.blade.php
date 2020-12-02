@if (session()->has('success'))
<div class="bg-green-100 w-full p-4 border-l-4 text-green-800 border-green-500 mb-2">
    {{ session('success') }}
</div>
@endif
