<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditUser extends Component
{

    #[locked]
    public $id;
    public $user;
    public $name;
    public $email;
    public $password;

    public function mount()
    {
        $this->user=User::query()->find($this->id);
        $this->fill([
            'name'=>$this->user->name,
            'email'=>$this->user->email,
        ]);
    }
    public function UpdateUser()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,'. $this->id,
            'password' => 'required|min:6'
        ]);

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password ? Hash::make($this->password) : $this->user->password,
        ]);
       session()->flash('success', 'کاربر ویرایش شد');
       $this->redirect(route('users.index'));
    }

    public function render():View
    {
        return view('livewire.users.edit-user');
    }
}
