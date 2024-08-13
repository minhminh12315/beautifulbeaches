<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Regions as ModelsRegions;
use Illuminate\Support\Facades\Log;

class Regions extends Component
{
    public $regions;
    public $AddModal = false;
    public $showEditModal = false;
    public $regionIdToDelete;
    public $regionIdToEdit;
    public $name;

    public function mount()
    {
        $this->regions = ModelsRegions::all();
    }
    public function render()
    {
        return view('livewire.admin.regions');
    }

    public function toggleModalAdd()
    {
        $this->dispatch('toggleModalAdd')->self();
        $this->name = '';
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
        $this->dispatch('closeModal')->self();
        flash()->success('Region created successfully.');
        $this->regions = ModelsRegions::all();
    }
    public function showDeleteRegion($id)
    {
        $this->regionIdToDelete = $id;
        $this->dispatch('toggleModalDelete')->self();
    }

    public function deleteRegion()
    {
        if ($this->regionIdToDelete) {
            $region = ModelsRegions::find($this->regionIdToDelete);
            if ($region) {
                $region->delete();
                $this->dispatch('closeModal')->self();
                flash()->success('Region deleted successfully.');
                $this->regions = ModelsRegions::all();
            }
        }
    }
    public function showEditRegion($id)
    {
        $region = ModelsRegions::find($id);
        if ($region) {
            $this->name = $region->name;
            $this->regionIdToEdit = $id;
            $this->dispatch('toggleModalEdit')->self();
        } else {
            flash()->error('Region not found.');
            $this->dispatch('closeModal')->self();
        }
        Log::info($this -> regionIdToEdit);
    }
    public function updateRegion()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        $region = ModelsRegions::find($this->regionIdToEdit);
        if ($region) {
            $region->update(['name' => $this->name]);
            $this->dispatch('closeModal')->self();
            flash()->success('Region updated successfully.');
            $this->regions = ModelsRegions::all();
        } else {
            flash()->error('Region not found.');
            $this->dispatch('closeModal')->self();
        }
    }
}
