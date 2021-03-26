@props([
    'labels' => [],
])

<thead>
    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
        @foreach ($labels as $label)
            <th class="py-3 px-6 text-left">{{ $label }}</th>
        @endforeach
        <th class="py-3 px-6 text-left">{{ $action }}</th>
    </tr>
</thead>
