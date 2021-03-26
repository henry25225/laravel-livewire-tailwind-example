@props([
    'editingUser' => null,
])

<div class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto" x-data
    x-show="$wire.isModalVisible" x-transition:enter="transition duration-300" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
    <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
        <div class="relative bg-white shadow-lg rounded-md text-gray-900 z-20" @click.away="$wire.closeModal()"
            x-show="$wire.isModalVisible" x-transition:enter="transition transform duration-300"
            x-transition:enter-start="scale-0" x-transition:enter-end="scale-100"
            x-transition:leave="transition transform duration-300" x-transition:leave-start="scale-100"
            x-transition:leave-end="scale-0">
            <header class="flex items-center justify-between p-2">
                <h2 class="font-semibold">{{ $currentUser ? $currentUser->name : 'Create Contact' }}</h2>
                <button class="focus:outline-none p-2" wire:click="closeModal">
                    <i class="fas fa-times"></i>
                </button>
            </header>
            <main class="p-2 text-center">
                <x-input-field wire:model="name" label="Name" placeholder="Please enter your name" />
                <x-input-field wire:model="email" type="email" label="Email" placeholder="test@domain.com" />
                <x-input-field wire:model="address" label="Address" placeholder="Please enter your address" />
            </main>
            <footer class="flex justify-end space-x-2 p-2">
                <x-button wire:click="closeModal">Close</x-button>
                <x-button primary wire:click="saveChanges">Save Changes</x-button>
            </footer>
        </div>
    </div>
</div>
