<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class UserList extends Component
{
    public function render():View
    {
        $users = User::query()->paginate(10);
        return view('livewire.users.user-list', compact('users'));
    }
}
