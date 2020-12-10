<section class="flex flex-col md:flex-row">
    <article class="flex flex-col w-full md:w-6/12">
        @foreach($posttypes as $type)
        <div>
            {{ $type->name }}
        </div>
        @endforeach
    </article>
    <article class="flex flex-col w-full md:w-6/12">
        @foreach($items as $item)
        {{ $item }}
        @endforeach
    </article>
</section>
