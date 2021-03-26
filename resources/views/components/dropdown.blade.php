<div x-data="{ open: false }" @click.away="open = false" class="relative">
    <button @click="open = !open"
        class="flex items-center justify-center w-6 h-6 bg-transparent rounded-full hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
        {{ $trigger }}
    </button>
    <div x-show="open" x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute right-0 z-10 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
        <div class="px-2 py-2 bg-white rounded-md shadow" @click="open = false">
            {{ $body }}
        </div>
    </div>
</div>
