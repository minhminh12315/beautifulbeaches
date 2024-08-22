<?php

namespace App\Livewire\User;

use App\Models\Beaches;
use App\Models\Blogs;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Header extends Component
{
    protected $listeners = ['regionOfBeach' => 'handleRegionOfBeach'];
    public $isHomePage;
    public $search;
    public $search_result_beaches;
    public $search_result_blogs;
    public function goInformation()
    {
        return redirect()->route('user.changeInformation');
    }
    public function mount()
    {
        $this->isHomePage = request()->routeIs('user.home');
    }
    public function signout(){
        auth()->logout();
        return redirect()->route('login');
    }
    public function clear_search(){
        $this->search = '';
        $this->search_result_beaches = [];
        $this->search_result_blogs = [];
    }

    public function render()
    {
        if($this->search >= 1){
            $this->search_result_beaches = Beaches::where('name', 'like', '%'.$this->search.'%')->get();
            $this->search_result_blogs = Blogs::where('title', 'like', '%'.$this->search.'%')->get();
        }
        return view('livewire.user.header');
    }
}
