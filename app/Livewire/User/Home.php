<?php

namespace App\Livewire\User;

use App\Models\Regions;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Home extends Component
{
    public $regions;
    public function mount()
    {
        $this->regions = Regions::all();
    }
    public function render()
    {
        return view('livewire.user.home');
    }
}
