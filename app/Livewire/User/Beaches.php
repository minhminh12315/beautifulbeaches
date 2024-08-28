<?php

namespace App\Livewire\User;

use App\Models\Beaches as ModelsBeaches;
use App\Models\Cities;
use App\Models\Regions;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Beaches extends Component
{
    public $regions;
    public $cities = null;
    public $filters = [];
    public $temporaryFilters = [];
    public $beaches;
    public $perPage = 6;
    public $totalbeaches;

    public function mount($id = null)
    {
        $this->regions = Regions::all();
        $this->cities = Cities::all();

        if ($id) {
            $this->filters['region'] = $id;
            $this->temporaryFilters['region'] = $id;
            $this->apply_filter();
        } else {
            $this->beaches = ModelsBeaches::with('city')->take($this->perPage)->get();
            $this->totalbeaches = ModelsBeaches::count();
        }
    }

    public function apply_filter()
    {
        $query = ModelsBeaches::query()->with('city');

        foreach ($this->filters as $key => $value) {
            switch ($key) {
                case 'region':
                    if ($value) {
                        $query->whereHas('city', function ($query) use ($value) {
                            $query->where('region_id', $value);
                        });
                    }
                    break;
                case 'city':
                    if ($value) {
                        $query->where('city_id', $value);
                    }
                    break;
                case 'sortby':
                    if ($value) {
                        $query->orderBy('name', $value);
                    }
                    break;
            }
        }

        $this->beaches = $query->take($this->perPage)->get();
        $this->totalbeaches = $query->count();
    }

    public function loadMore()
    {
        $this->perPage += 6;
        $this->apply_filter();
    }

    public function clearAll()
    {
        $this->filters = [];
        $this->temporaryFilters = [];
        $this->perPage = 6;
        $this->apply_filter();
    }

    public function removeFilter($type)
    {
        if (array_key_exists($type, $this->filters)) {
            $this->filters[$type] = null;
            $this->apply_filter();
        }
        if (array_key_exists($type, $this->temporaryFilters)) {
            $this->temporaryFilters[$type] = null;
            $this->apply_filter();
        }
    }

    public function applyFilters()
    {
        $this->filters = $this->temporaryFilters;

        $this->apply_filter();
        $this->dispatch('hideOffcanvas');
    }
    public function render()
    {
        return view('livewire.user.beaches');
    }
}
