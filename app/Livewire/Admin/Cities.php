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
        $this->dispatch('closeModal')->self();
        flash()->success('City created successfully.');
        $this->cities = ModelsCities::all();
    }

    public function showEditModal($id)
    {
        $city = ModelsCities::find($id);
        if ($city) {
            $this->name = $city->name;
            $this -> region_id = $city->region_id;
            $this->editCityId = $id;
            $this->dispatch('toggleModalEdit')->self();
        }
        else{
            flash()->error('City not found.');
            $this->dispatch('closeModal')->self();
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
                'region_id' => $this->region_id,
            ]);
            $this->dispatch('closeModal')->self();
            flash()->success('City updated successfully.');
            $this->cities = ModelsCities::all();
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
            $city = ModelsCities::find($this->cityIdToDelete);
            if ($city) {
                $city->delete();
                flash()->success('City deleted successfully.');
                $this->dispatch('closeModal')->self();
                $this->cities = ModelsCities::all();
            }
        }
    }
}
