<?php

namespace App\Livewire\User;

use App\Models\Beaches as ModelsBeaches;
use App\Models\Cities;
use App\Models\Regions;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class Beaches extends Component
{
    public $regions;
    public $cities;

    public $citySelected;
    public $regionSelected;
    public $citySelectedName;
    public $regionSelectedName;


    public $beaches;
    public function mount()
    {
        $this->regions = Regions::all();
        $this->cities = Cities::all();
        $this->beaches = ModelsBeaches::with('city')->get();
    }

    public function apply_filter()
    {
        Log::info($this->regionSelected);
        if ($this->regionSelected && !$this->citySelected) {
            $this->beaches = ModelsBeaches::whereHas('city', function ($query) {
                $query->where('region_id', $this->regionSelected);
            })->with('city')->get();
            $this->regionSelectedName = Regions::where('id', $this->regionSelected)->pluck('name')->first();
            $this->dispatch('hideOffcanvas');
        } elseif ($this->citySelected && !$this->regionSelected) {
            $this->beaches = ModelsBeaches::where('city_id', $this->citySelected)->with('city')->get();
            $this->citySelectedName = Cities::where('id', $this->citySelected)->pluck('name')->first();
            $this->dispatch('hideOffcanvas');
        } elseif ($this->citySelected && $this->regionSelected) {
            $this->beaches = ModelsBeaches::where('city_id', $this->citySelected)->with('city')->get();
            $this->regionSelectedName = Regions::where('id', $this->regionSelected)->pluck('name')->first();
            $this->citySelectedName = Cities::where('id', $this->citySelected)->pluck('name')->first();
            $this->dispatch('hideOffcanvas');
        } else {
            $this->beaches = ModelsBeaches::with('city')->get();
        }
    }

    public function cleearAll()
    {
        $this->citySelected = null;
        $this->regionSelected = null;
        $this->citySelectedName = null;
        $this->regionSelectedName = null;
        $this->beaches = ModelsBeaches::with('city')->get();
    }

    public function removeFilterRegion()
    {
        $this->regionSelected = null;
        $this->regionSelectedName = null;
        $this->apply_filter();
    }
    public function removeFilterCity(){
        $this->citySelected = null;
        $this->citySelectedName = null;
        $this->apply_filter();
    }

   

    public function render()
    {
        return view('livewire.user.beaches');
    }
}
