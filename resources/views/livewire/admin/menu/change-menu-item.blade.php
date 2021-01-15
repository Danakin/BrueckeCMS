<section class="grid grid-cols-2 relative">
    <ul>
        <li class="font-bold my-3 px-4">Available</li>
        @foreach ($posttypes as $item)
            <li
                wire:key="{{ $item['id'] }}"
                class="border border-gray-400 px-4 py-2 cursor-pointer rounded m-2 flex justify-between"
                wire:click="addToMenu({{ $item }})"
                animate-move
            >
                <div>
                    {{ $item['name'] }}
                </div>
                <div>➡</div>
            </li>
        @endforeach
    </ul>
    <ul>
        <li class="font-bold my-3 px-4">In menu</li>
        @foreach ($items as $item)
            <li
                wire:key="{{ $item['id'] }}"
                class="border border-gray-400 px-4 py-2 cursor-pointer rounded m-2 flex justify-between"
                wire:click="removeFromMenu({{ $item }})"
                animate-move
            >
                <div>⬅</div>
                <div>{{ $item['title'] }}</div>
            </li>
        @endforeach
    </ul>
</section>

@push('scripts')
<script>
    let animations = []

    Livewire.hook('message.received', () => {
        const items = Array.from(document.querySelectorAll('[animate-move]'))
        animations = items.map(item => {
            const oldTop = item.getBoundingClientRect().top
            const oldLeft = item.getBoundingClientRect().left
            return () => {
                const newTop = item.getBoundingClientRect().top
                const newLeft = item.getBoundingClientRect().left
                
                item.animate([
                    { transform: `translateX(${oldLeft - newLeft}px) translateY(${oldTop - newTop}px)` },
                    { transform: `translateX(0) translateY(0)` }
                ], {duration: 100, easing: 'ease-in-out'})

                return item
            }
        })

        items.forEach(item => {
            item.getAnimations().forEach(animation => animation.finish())
        })
    })

    Livewire.hook('message.processed', () => {
        const items = Array.from(document.querySelectorAll('[animate-move]'))
        let oldKeys = []
        
        while (animations.length) {
            const item = animations.shift()()
            oldKeys.push(Number(item.getAttribute('wire:key')))
        }

        items.forEach(item => {
            const key = Number(item.getAttribute('wire:key'))
            if(!oldKeys.includes(key)) {
                item.animate([
                    { opacity: 0 },
                    { opacity: 1 }
                ], {duration: 500, easing: 'ease-in-out'})
            }
        })
    })
</script>
@endpush