<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateUser extends Component
{

    #[Validate('required|string')]
    public $name;
    #[Validate('required|email|unique:users,email')]
    public $email;
    #[Validate('required|min:6')]
    public $password;

    public function createUser()
    {
       $this->validate();
        User::query()->create([
            'name' => $this->name,
            'email' =>$this->email,
            'password' => Hash::make($this->password),
        ]);
        session()->flash('success', 'کاربر با موفقیت ایجاد شد');
        $this->redirect(route('users.index'));
    }
    public function render():View
    {
        return view('livewire.users.create-user');
    }
}
