<?php

namespace App\Livewire\Admin;

use App\Models\Cities as ModelsCities;
use App\Models\Regions;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Cities extends Component
{
    public $cities;
    public $AddModal = false;
    public $showEditModal = false;
    public $showDeleteModal = false;
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
        $this->name = '';
        $this->AddModal = true;
    }


    public function closeAddModal()
    {
        $this->AddModal = false;
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
        $this->closeAddModal();
        $this->mount();
        session()->flash('message', 'City created successfully.');
    }

    public function showEditModal($id)
    {
        $city = ModelsCities::find($id); // Cập nhật model ở đây
        if ($city) {
            $this->name = $city->name;
            $this->editCityId = $city->id;
            $this->showEditModal = true;
        }
    }

    public function closeEditModal()
    {
        $this->showEditModal = false;
    }

    public function updateCity()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        $city = ModelsCities::find($this->editCityId); // Cập nhật model ở đây
        if ($city) {
            $city->update([
                'name' => $this->name,
            ]);

            $this->closeEditModal();
            $this->cities = ModelsCities::all(); // Cập nhật model ở đây
            session()->flash('message', 'City updated successfully.');
        }
    }

    public function deleteCity($id)
    {
        $this->cityIdToDelete = $id;
        $this->showDeleteModal = true;
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
            $this->closeDeleteModal();
        }
    }

    public function closeDeleteModal()
    {
        $this->showDeleteModal = false;
    }
}
