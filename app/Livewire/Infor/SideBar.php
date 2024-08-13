<?php

namespace App\Livewire\Infor;

use Livewire\Component;

class SideBar extends Component
{
    public function displayMainSettingContent(){
        $this->dispatch('showMainSettingContent');
    }
    public function render()
    {
        return view('livewire.infor.side-bar');
    }
}
