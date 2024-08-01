<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Regions as ModelsRegions;

class Regions extends Component
{
    public $regions;
    public $AddModal = false;
    public $showEditModal = false;
    public $name;
    public function render()
    {
        return view('livewire.admin.regions');
    }

    public function showAddModal()
    {
        $this->name = '';
        $this->AddModal = true;
    }

    public function closeAddModal()
    {
        $this->AddModal = false;
    }

    public function saveRegion()
    {
        $this->validate([
            'name' => 'required|string|max:255|unique:regions,name',
        ], [
            'name.required' => 'The region name field is required.',
            'name.unique' => 'The region name has already been taken.',
        ]);

        ModelsRegions::create([
            'name' => $this->name,
        ]);

        $this->name = '';

        // $this->closeAddModal();
        $this->regions = ModelsRegions::all();
    }
}
