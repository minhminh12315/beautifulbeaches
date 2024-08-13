<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Blogs extends Component
{
    // #[On('sendContent')]
    // public function saveBlog($content){
    //     Log::info($content);
    //     return redirect()->to('admin/beaches');
    // }

    public function render()
    {
        return view('livewire.admin.blogs');
    }
}
