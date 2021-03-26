@props([
    'label' => '',
    'placeholder' => '',
    'required' => false,
    'type' => 'text',
])

<div class="mb-6 grid grid-cols-3 items-center">
    <label for="{{ $attributes->whereStartsWith('wire:model')->first() }}"
        class="block mb-2 text-sm text-gray-600 dark:text-gray-400 font-medium">{{ $label }}</label>
    <input {{ $attributes->whereStartsWith('wire:model') }} type="{{ $type }}"
        id="{{ $attributes->whereStartsWith('wire:model')->first() }}" placeholder="{{ $placeholder }}"
        required="{{ $required }}"
        class="w-full col-span-2 px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
</div>
