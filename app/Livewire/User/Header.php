<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Header extends Component
{
    protected $listeners = ['regionOfBeach' => 'handleRegionOfBeach'];
    public $isHomePage;
    public function goInformation()
    {
        return redirect()->route('user.changeInformation');
    }
    public function mount()
    {
        $this->isHomePage = request()->routeIs('user.home');
    }
    
    public function render()
    {
        return view('livewire.user.header');
    }
}
