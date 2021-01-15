<section class="grid grid-cols-2 relative">
    <ul>
        @foreach ($posttypes as $item)
            <li
                wire:key="{{ $item['id'] }}"
                class="border border-gray-400 px-4 py-2 cursor-pointer rounded m-2"
                wire:click="addToMenu({{ $item }})"
                animate-move
            >
                {{ $item['name'] }}
            </li>
        @endforeach
    </ul>
    <ul>
        @foreach ($items as $item)
            <li
                wire:key="{{ $item['id'] }}"
                class="border border-gray-400 px-4 py-2 cursor-pointer rounded m-2"
                wire:click="removeFromMenu({{ $item }})"
                animate-move
            >
                {{ $item['title'] }}
            </li>
        @endforeach
    </ul>
</section>

@push('scripts')
<script>
    let animations = []

    Livewire.hook('message.received', () => {
        let items = Array.from(document.querySelectorAll('[animate-move]'))
        animations = items.map(item => {
            let oldTop = item.getBoundingClientRect().top
            let oldLeft = item.getBoundingClientRect().left
            return () => {
                let newTop = item.getBoundingClientRect().top
                let newLeft = item.getBoundingClientRect().left
                item.animate([
                    { transform: `translateX(${oldLeft - newLeft}px) translateY(${oldTop - newTop}px)` },
                    { transform: `translateX(0) translateY(0)` }
                ], {duration: 100, easing: 'ease-in-out'})
            }
        })

        items.forEach(item => {
            item.getAnimations().forEach(animation => animation.finish())
        })
    })

    Livewire.hook('message.processed', () => {
        while (animations.length) {
            animations.shift()()
        }
    })
</script>
@endpush