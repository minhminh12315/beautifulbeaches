<?php

namespace App\Livewire\User;

use App\Models\Beaches;
use App\Models\Blogs;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class BeachDetails extends Component
{
    public $beach;
    public $relatedBlogs;

    public function mount($id)
    {
        $this->beach = Beaches::find($id);
        Log::info($this->beach->beachSections);
        $this->relatedBlogs = Blogs::where('beach_id', $id)->orderBy('created_at', 'desc')->take(3)->get();
        
    }
    public function render()
    {
        return view('livewire.user.beachDetails');
    }
}
