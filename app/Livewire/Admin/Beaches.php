<?php

namespace App\Livewire\Admin;

use App\Models\Beaches as ModelsBeaches;
use App\Models\Cities;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class Beaches extends Component
{
    use WithFileUploads;
    public $beaches;
    public $beach_description;
    public $beach_image;
    public $beach_name;
    public $beach;
    public $beachToDelete;
    public $cities;

    protected $listeners = ['closeModal' => 'closeModal'];

    public function mount()
    {
        $this->beaches = ModelsBeaches::all();
        $this->cities = Cities::select('name', 'id')->groupBy('name')->get();
        Log::info('cities' . $this->cities);
    }

    public function updated($field)
    {
        if($field == 'beach')
        {
            Log::info('beach' . $this->beach);
        }
    }

    public function closeModal()
    {
        $this->beach = null;
    }

    public function showBeachDelete($id)
    {
        $this->dispatch('toggleModalDelete')->self();
        $this->beachToDelete = $id;
    }

    public function confirmDelete()
    {
        if ($this->beachToDelete) {
            $beach = ModelsBeaches::find($this->beachToDelete);
            $this->beachToDelete = $beach;
            if ($beach) {
                $beach->delete();
                $this->beaches = ModelsBeaches::all();
                flash()->success('Account deleted successfully');
                $this->dispatch('closeModal')->self();
            } else {
                flash()->error('User not found');
                $this->dispatch('closeModal')->self();
            }
            $this->beach = null;
        }
    }

    public function showBeachEdit($id)
    {
        $beach = ModelsBeaches::find($id);
        $this->beach = $beach;
        $this->beach_name = $beach->name;
        $this->beach_description = $beach->description;
        Log::info('beach' . $this->beach);
        if ($this->beach) {
            $this->dispatch('toggleModalEdit')->self();
        } else {
            flash()->error('User not found');
            $this->dispatch('closeModal')->self();
        }
        Log::info($this->beach->image);
    }

    public function updateBeach()
    {
        if ($this->beach) {
            $beach = ModelsBeaches::find($this->beach->id);

            $imageName = time() . '_' . $this->beach_image->getClientOriginalName();
            $this->beach_image->storeAs('public/assets/images', $imageName);
            $publicPath = 'assets/images/' . $imageName;
            
            $new_beach = new ModelsBeaches();
            $new_beach->name = $this->beach_name;
            $new_beach->city_id = $this->beach->city_id;
            $new_beach->description = $this->beach_description;
            $new_beach->image = $publicPath;
            $new_beach->save();
            Log::info('new_beach' . $new_beach);
            flash()->success('Account updated successfully');
            $this->dispatch('closeModal')->self();

            $this->beach = null;
            $this->beach_name = '';
            $this->beach_description = '';
            $this->beach_image = '';
            $this->mount();
        } else {
            flash()->error('User not found');
            $this->dispatch('closeModal')->self();
        }
    }

    public function render()
    {
        return view('livewire.admin.beaches');
    }
}
