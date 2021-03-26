<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Contacts extends Component
{
    public $isModalVisible = false;
    public $currentUser = null;
    public $name = '';
    public $email = '';
    public $address = '';

    public function addContact()
    {
        $this->isModalVisible = true;
        $this->name = '';
        $this->email = '';
        $this->currentUser = null;
    }

    public function editContact($userId)
    {
        $this->isModalVisible = true;
        $this->currentUser = User::find($userId);
        $this->name = $this->currentUser->name;
        $this->email = $this->currentUser->email;
        $this->address = $this->currentUser->address;
    }

    public function removeContact($userId)
    {
        User::find($userId)->delete();
    }

    public function closeModal()
    {
        $this->isModalVisible = false;
    }

    public function saveChanges()
    {
        if ($this->currentUser) {
            $this->currentUser->name = $this->name;
            $this->currentUser->email = $this->email;
            $this->currentUser->address = $this->address;
            $this->currentUser->save();
        } else {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'address' => $this->address,
                'password' => Hash::make('password'),
            ]);
        }
        $this->isModalVisible = false;
    }

    public function render()
    {
        $users = User::all();

        return view('livewire.contacts', compact(['users']));
    }
}
