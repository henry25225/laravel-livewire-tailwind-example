@props([
    'primary' => false,
])

<button type="button"
    {{ $attributes }}
    class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md {{ $primary ? 'bg-blue-500 hover:bg-blue-600' : 'bg-gray-500 hover:bg-gray-600' }} hover:shadow-lg">
    {{ $slot }}
</button>
