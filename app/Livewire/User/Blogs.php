<?php

namespace App\Livewire\User;

use App\Models\Blogs as ModelsBlogs;
use App\Models\Cities;
use App\Models\Regions;
use Livewire\Component;

class Blogs extends Component
{
    public $regions;
    public $cities;
    public $filters = [];
    public $temporaryFilters = [];
    public $blogs;
    public $totalsblogs;
    public $perpage = 6;


    public function mount()
    {
        $this->regions = Regions::all();
        $this->cities = Cities::all();
        $this->blogs = ModelsBlogs::where('status', 'active')->take($this->perpage)->with('beach')->get();
        $this->totalsblogs = ModelsBlogs::where('status','active')->count();
    }

    public function apply_filter()
    {
        $query = ModelsBlogs::where('status','active');
        foreach ($this->filters as $key => $value) {
            switch ($key) {
                case 'region':
                    if ($value) {
                        $query->whereHas('beach.city', function ($query) use ($value) {
                            $query->where('region_id', $value);
                        });
                    }
                    break;
                case 'city':
                    if ($value) {
                        $query->whereHas('beach', function ($query) use ($value) {
                            $query->where('city_id', $value);
                        });
                    }
                    break;
                case 'sortby':
                    if ($value) {
                        $query->orderBy('title', $value);
                    }
                    break;
            }
        }

        $this->blogs = $query->take($this->perpage)->get();
        $this->totalsblogs = $query->count();
    }


    public function clearAll()
    {
        $this->filters = [];
        $this->temporaryFilters = [];
        $this->perpage = 6;
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

    public function loadMore()
    {
        $this->perpage += 6;
        $this->mount();
    }

    public function render()
    {
        return view('livewire.user.blogs');
    }
}
