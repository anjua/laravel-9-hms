<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Route;

class UserTable extends Component
{

    public $currentUrl;
    public $users = [];

    public function mount()
    {
        $this->currentUrl = Route::current()->getName();
    }

    public function getUserDataByRole($role)
    {
        $this->users = User::Role([$role])->get();
    }
    
    public function render()
    {
        return view('livewire.user-table');
    }
}
