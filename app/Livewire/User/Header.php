<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Header extends Component
{
    public $isHomePage;
    public function mount()
    {
        $this->isHomePage = request()->routeIs('user.home');
        Log::info($this->isHomePage);
    }
    public function render()
    {
        return view('livewire.user.header');
    }
}
