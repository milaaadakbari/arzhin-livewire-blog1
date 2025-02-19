<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

//    #[Computed(persist: true, seconds: 7200)]

    public function searchUser()
    {
        $this->users = User::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->paginate(3);
    }

    #[Computed]
    public function users()
    {
        return User::query()->paginate(3);
    }

    public function placeholder()
    {
//        return <<<'HTML'
//        <div>
//           <p>please wait</p>
//        </div>
//        HTML;

        return view('livewire.placeholder');
    }

    public function render(): View
    {
        return view('livewire.users.user-list');
    }
}
