@if ($errors->any())
<div class="bg-red-100 w-full p-4 border-l-4 text-red-800 border-red-500 mb-2">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
