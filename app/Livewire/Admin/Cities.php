<?php

namespace App\Livewire\Admin;

use App\Models\Cities as ModelsCities;
use App\Models\Regions;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Cities extends Component
{
    public $cities;
    public $cityIdToDelete;
    public $name;
    public $editCityId;
    public $regions;
    public $region_id;

    public function mount()
    {
        $this->cities = ModelsCities::all();
        $this->regions = Regions::all();
    }

    public function render()
    {
        return view('livewire.admin.cities');
    }

    public function showAddModal()
    {
        $this->dispatch('toggleModalAdd')->self();
        $this->name = '';
    }


    public function saveCity()
    {
        $this->validate([
            'name' => 'required|string|max:255|unique:cities,name',
        ], [
            'name.required' => 'The city name field is required.',
            'name.unique' => 'The city name has already been taken.',
        ]);

        ModelsCities::create([
            'name' => $this->name,
            'region_id' => $this->region_id,
        ]);
        $this->name = '';
        $this->mount();
        session()->flash('message', 'City created successfully.');
    }

    public function showEditModal($id)
    {
        $city = ModelsCities::find($id);
        if ($city) {
            $this->name = $city->name;
            $this->editCityId = $city->id;
        }
    }


    public function updateCity()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        $city = ModelsCities::find($this->editCityId);
        if ($city) {
            $city->update([
                'name' => $this->name,
            ]);

            $this->cities = ModelsCities::all(); // Cập nhật model ở đây
            session()->flash('message', 'City updated successfully.');
        }
    }

    public function showDeleteCity($id)
    {
        $this->cityIdToDelete = $id;
        $this->dispatch('toggleModalDelete')->self();
    }

    public function confirmDelete()
    {
        if ($this->cityIdToDelete) {
            $city = ModelsCities::find($this->cityIdToDelete); // Cập nhật model ở đây
            if ($city) {
                $city->delete();
                $this->cities = ModelsCities::all(); // Cập nhật model ở đây
                
                session()->flash('message', 'City deleted successfully.');
            }
        }
    }
}
