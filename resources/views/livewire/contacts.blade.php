<div class="overflow-x-auto">
    <div
        class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <x-table>
                <x-thead :labels="['Name', 'Email', 'Address', 'Created']">
                    <x-slot name="action">
                        <x-button primary wire:click="addContact">
                            <i class="fas fa-plus"></i> Add Contact
                        </x-button>
                    </x-slot>
                </x-thead>
                <x-tbody>
                    @foreach ($users as $user)
                        <x-tr>
                            <x-td>{{ $user->name }}</x-td>
                            <x-td>{{ $user->email }}</x-td>
                            <x-td>{{ $user->address }}</x-td>
                            <x-td>{{ $user->created_at }}</x-td>
                            <x-td>
                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </x-slot>
                                    <x-slot name="body">
                                        <x-dropdown-item wire:click="editContact({{ $user->id }})">View</x-dropdown-item>
                                        <x-dropdown-item wire:click="removeContact({{ $user->id }})">Delete</x-dropdown-item>
                                    </x-slot>
                                </x-dropdown>
                            </x-td>
                        </x-tr>
                    @endforeach
                </x-tbody>
            </x-table>
        </div>
    </div>
    <x-contact-modal :current-user="$currentUser"></x-contact-modal>
</div>
