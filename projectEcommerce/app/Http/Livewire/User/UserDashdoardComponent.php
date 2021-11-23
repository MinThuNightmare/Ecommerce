<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserDashdoardComponent extends Component
{
    public function render()
    {
        return view('livewire.user.user-dashdoard-component')->layout('layouts.base');
    }
}
