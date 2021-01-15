<section class="grid grid-cols-2 relative" x-data="">
    <ul>
        <li class="font-bold my-3 px-4">Available</li>
        @foreach ($posttypes as $item)
            <li
                wire:key="{{ $item['id'] }}"
                class="border border-gray-400 px-4 py-2 cursor-pointer rounded m-2 flex justify-between"
                wire:click="addToMenu({{ $item }})"
                animate-move
            >
                {{ $item['name'] }}
            </li>
        @endforeach
    </ul>
    <ul drag-root="reorder">
        <li class="font-bold my-3 px-4">In menu</li>
        @foreach ($items as $item)
            <li
                wire:key="{{ $item['id'] }}"
                class="border border-gray-400 px-4 py-2 cursor-pointer rounded m-2 flex justify-between"
                animate-move
                draggable="true"
                drag-item="{{ $item['id'] }}"
                wire:click="removeFromMenu({{ $item }})"
                x-on:dragstart="$event.target.setAttribute('dragging', true)"
                x-on:dragenter.prevent="$event.target.classList.add('bg-yellow-100')"
                x-on:drop="
                    const dragRoot = document.querySelector('[drag-root]')
                    $event.target.classList.remove('bg-yellow-100')
                    const draggingEl = dragRoot.querySelector('[dragging]')
                    const position = draggingEl.compareDocumentPosition($event.target)
                    if(position === 2) $event.target.before(draggingEl)
                    if(position === 4) $event.target.after(draggingEl)
                    const orderIds = Array.from(dragRoot.querySelectorAll('[drag-item]')).map(itemEl => Number(itemEl.getAttribute('drag-item')))
                    $wire.updateMenuOrder(orderIds)
                "
                x-on:dragover.prevent
                x-on:dragleave="$event.target.classList.remove('bg-yellow-100')"
                x-on:dragend="$event.target.removeAttribute('dragging')"
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