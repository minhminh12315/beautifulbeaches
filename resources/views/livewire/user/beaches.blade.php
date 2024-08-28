@extends('livewire.user.index')
@section('content')
<section id="list_beaches_page">
    <div class="banner_list_beach">
        <img src="https://i.pinimg.com/564x/ac/93/46/ac9346bf9586def789953adfdab8f069.jpg" alt="">
        <div class="banner_list_beach_content">
            <div class="banner_list_beach_title">
                Our Beaches
            </div>
            <div class="banner_list_beach_description">
                Discover the stunning beaches of Vietnam, where tranquility and relaxation blend with serenity.
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <div class="breadcrumbs_wrapper pt-4">
                {{ Breadcrumbs::render('beaches') }}
            </div>
            <div class="filter_container">
                <div class="filter_wrapper">
                    <button type="button" class="btn_filter" data-bs-toggle="offcanvas" data-bs-target="#filte_toggle">
                        <span class="material-symbols-outlined">
                            filter_alt
                        </span>
                        Filter
                    </button>
                    <div class="offcanvas offcanvas-end" id="filte_toggle" tabindex="-1" aria-labelledby="filterOffcanvasTitle" wire:ignore.self>
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="filterOffcanvasTitle">Filter</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body pb-0">
                            <div class="filter_toggle_body">
                                @if ($regions -> isNotEmpty())
                                <div class="filter_items">
                                    <h5 class="regionsTitle text-secondary">Regions</h5>
                                    <ul class=" row g-3 p-2 w-100">
                                        @foreach ($regions as $region )
                                        <li class="col-6">
                                            <input type="radio" class="d-none" wire:model.live="temporaryFilters.region" id="region_{{$region->id}}" value="{{$region->id}}">
                                            <label for="region_{{$region->id}}">{{$region->name}}</label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                @if ($cities -> isNotEmpty())
                                <div class="filter_items border-top ">
                                    <h5 class="citiesTitle text-secondary">Cities</h5>
                                    <ul class="row g-3 p-2 w-100">
                                        @foreach ($cities as $city )
                                        <li class="col-6 filter_cities_item {{ (isset($temporaryFilters['region']) && $city->region_id != $temporaryFilters['region']) ? 'd-none' : '' }}">
                                            <input type="radio" class="filter_cities_item d-none" wire:model.live="temporaryFilters.city" id="city_{{$city->id}}" value="{{$city->id}}">
                                            <label for="city_{{$city->id}}" class="">{{$city->name}}</label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="filter_items border-top">
                                    <h5 class="sortbyTitle text-secondary">Sort By</h5>
                                    <ul class="row g-3 p-2 w-100">
                                        <li class="col-6">
                                            <input type="radio" name="sort_by" id="filter_sort_by_Az" class="d-none" wire:model.live="temporaryFilters.sortby" value="asc">
                                            <label for="filter_sort_by_Az" class="d-flex flex-row justify-content-center align-items-center gap-2">
                                                <i class="fa-solid fa-arrow-down-a-z"></i> A -> Z
                                            </label>
                                        </li>
                                        <li class="col-6">
                                            <input type="radio" name="sort_by" id="filter_sort_by_Za" class="d-none" wire:model.live="temporaryFilters.sortby" value="desc">
                                            <label for="filter_sort_by_Za" class="d-flex flex-row justify-content-center align-items-center gap-2">
                                                <i class="fa-solid fa-arrow-up-a-z"></i> Z -> A
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="groupBtn">
                                    <div class="row g-2">
                                        <div class="col-6 m-0 ">
                                            <button type="button" class="btn_clearAll" wire:click="clearAll">CLEAR ALL</button>
                                        </div>
                                        <div class="col-6 m-0">
                                            <button type="button" class="btn_apply col-6 {{ empty($temporaryFilters['region']) && empty($temporaryFilters['city']) ? 'cursor_not_allowed' : '' }}" wire:click="applyFilters" {{ empty($temporaryFilters['region']) && empty($temporaryFilters['city']) ? 'disabled' : '' }}>APPLY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="selectedFilter">
            <div class="d-flex flex-row gap-4 justify-content-start align-items-center mt-2">
                <div class="{{ isset($filters['region']) ? 'd-block' : 'd-none' }}">
                    <div class="selectedFilterItems">
                        <span>
                            @if (isset($filters['region']))
                            {{ $regions->where('id', $filters['region'])->pluck('name')->first() }}
                            @endif
                        </span>
                        <button class="btn_remove_region" wire:click="removeFilter('region')">
                            <span class="material-symbols-outlined">
                                close
                            </span>
                        </button>
                    </div>
                </div>
                <div class="{{ isset($filters['city']) ? 'd-block' : 'd-none' }}">
                    <div class="selectedFilterItems">
                        <span>
                            @if (isset($filters['city']))
                            {{ $cities->where('id', $filters['city'])->pluck('name')->first() }}
                            @endif
                        </span>
                        <button class="btn_remove_city" wire:click="removeFilter('city')">
                            <span class="material-symbols-outlined">
                                close
                            </span>
                        </button>
                    </div>
                </div>
                <div class="{{ isset($filters['sortby']) ? 'd-block' : 'd-none' }}">
                    <div class="selectedFilterItems">
                        <span>
                            Sort by:
                            @if (isset($filters['sortby']))
                            {{ $filters['sortby'] === 'asc'? 'A -> Z' : 'Z -> A' }}
                            @endif
                        </span>
                        <button class="btn_remove_sortby" wire:click="removeFilter('sortby')">
                            <span class="material-symbols-outlined">
                                close
                            </span>
                        </button>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    <main class="container mt-5">
        <ul class="row row-cols-lg-3 row-cols-md-2 g-3">
            @if ($beaches)
            @foreach ($beaches as $beach )
            <li class="col">
                <div class="card_beach">
                    <a href="{{route('user.beachDetails', $beach -> id)}}" class="h-100 w-100 ">
                        <div class="d-flex flex-column justify-content-start align-items-start gap-2 w-100 h-100">
                            <img src="{{Storage::url($beach-> image)}}" alt="" class="card_beach_img">
                            <div class="card_beach_content">
                                <div class="d-flex flex-column gap-1 justify-content-start align-items-start">
                                    <div class="card_beach_name">
                                        {{$beach->name}}
                                    </div>
                                    <div class="card_beach_city">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span>
                                            {{$beach->city->name}}
                                        </span>
                                    </div>
                                </div>
                                <div class="card_beach_description">
                                    {{$beach->description}}
                                </div>
                                <a href="{{ route('user.beachDetails', $beach->id) }}" class="btn_card_beach_explore">
                                    Explore beach
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            @endforeach

            @else
            <div class="h-100 d-flex justify-content-center align-items-center">
                No beaches found.
            </div>
            @endif
        </ul>
        @if ($beaches)
        @if($beaches->count() < $totalbeaches)
            <div class="seeMoreRecord_wrapper">
            <button class="seeMoreRecords" wire:click="loadMore">
                See more
                <i class="fa-solid fa-arrow-down"></i>
            </button>
            </div>
            @endif
            @endif
    </main>
</section>
@endsection

@script
<script>
    $(document).ready(function() {
        $('.offcanvas-backdrop').remove();
        $wire.on('hideOffcanvas', () => {
            $('.offcanvas').offcanvas('hide');
        });
        $wire.on('reLoadPage', () => {
            location.reload();
        })
    });
</script>
@endscript