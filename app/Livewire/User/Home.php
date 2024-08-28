<?php

namespace App\Livewire\User;

use App\Models\Beaches;
use App\Models\Blogs;
use App\Models\Regions;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Home extends Component
{
    public $regions;
    public $three_beaches;

    public $mainBlogs;
    public $otherBlogs;
    public function mount()
    {
        $this->regions = Regions::all();
        $this->three_beaches = Beaches::orderBy('created_at', 'desc')->limit(3)->get();
        $this->mainBlogs = Blogs::with('beach')->orderBy('created_at', 'desc')->first();
        $this->otherBlogs = Blogs::with('beach')->orderBy('created_at', 'desc')->skip(1)->take(3)->get();
    }
    public function render()
    {
        return view('livewire.user.home');
    }
}
