<?php

namespace App\Livewire\User;

use App\Models\Beaches;
use App\Models\Blogs;
use App\Models\Regions;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use App\Models\Texts;

class Home extends Component
{
    public $regions;
    public $three_beaches;

    public $mainBlogs;
    public $otherBlogs;
    public $textSection_1;
    public $textSection_1_1;
    public $textSection_2;
    public $textSection_2_1;
    public $textSection_3;
    public $textSection_3_1;
    public $textSection_4;
    public $textSection_4_1;

    public $video_home;
    public function mount()
    {
        $this->regions = Regions::all();
        $this->three_beaches = Beaches::orderBy('created_at', 'desc')->limit(3)->get();
        $this->mainBlogs = Blogs::with('beach')->orderBy('created_at', 'desc')->first();
        $this->otherBlogs = Blogs::with('beach')->orderBy('created_at', 'desc')->skip(1)->take(3)->get();
        $this->textSection_1 = Texts::where('type','Home_1')
        ->first();
        $this->textSection_1_1 = Texts::where('type','Home_1_1')
        ->first();
        $this->textSection_2 = Texts::where('type','Home_2')
        ->first();
        $this->textSection_2_1 = Texts::where('type','Home_2_1')
        ->first();
        $this->textSection_3 = Texts::where('type','Home_3')
        ->first();
        $this->textSection_3_1 = Texts::where('type','Home_3_1')
        ->first();
        $this->textSection_4 = Texts::where('type','Home_4')
        ->first();
        $this->textSection_4_1 = Texts::where('type','Home_4_1')
        ->first();
        // $this->video_home = Texts::where('type','Home_Video');
    }
    public function render()
    {
        return view('livewire.user.home',
        [
            'textSection_1' => $this->textSection_1,
            'textSection_1_1' => $this->textSection_1_1,
            'textSection_2' => $this->textSection_2,
            'textSection_2_1' => $this->textSection_2_1,
            'textSection_3' => $this->textSection_3,
            'textSection_3_1' => $this->textSection_3_1,
            'textSection_4' => $this->textSection_4,
            'textSection_4_1' => $this->textSection_4_1,
        ]);
    }
}
