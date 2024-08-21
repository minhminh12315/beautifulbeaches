<?php

namespace App\Livewire\User;

use App\Models\Beaches;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class BeachDetails extends Component
{
    public $beach;
    public function mount($id)
    {
        $this->beach = Beaches::find($id);
        Log::info($this->beach->beachSections);
        
    }
    public function render()
    {
        return view('livewire.user.beachDetails');
    }
}
