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
                {{ Breadcrumbs::render('home') }}
            </div>

            <div class="filter_wrapper">
                <div class="d-flex flex-row gap-4 justify-content-center align-items-center">
                    <div class="{{$regionSelectedName ? 'd-block' : 'd-none'}}">
                        <div class="selectedRegion">
                            <span>
                                @if ($regionSelectedName)
                                {{$regionSelectedName}}
                                @endif
                            </span>
                            <button class="btn_remove_region" wire:click="removeFilterRegion">
                                <span class="material-symbols-outlined">
                                    close
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="{{$citySelectedName ? 'd-block' : 'd-none'}}">
                        <div class="selectedCity ">
                            <span>
                                @if ($citySelectedName)
                                {{$citySelectedName}}
                                @endif
                            </span>
                            <button class="btn_remove_city" wire:click="removeFilterCity">
                                <span class="material-symbols-outlined">
                                    close
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="filter_beaches" >
                    <button type="button" class="btn_filter_beaches" data-bs-toggle="offcanvas" data-bs-target="#filte_toggle">
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
                                <div class="filter_regions">
                                    <h5 class="regionsTitle text-secondary">Regions</h5>
                                    <ul class=" row g-3 p-2">
                                        @foreach ($regions as $region )
                                        <li class="filter_regions_item col-6">
                                            <input type="radio" class="filter_regions_item d-none" wire:model.live="regionSelected" id="region_{{$region->id}}" value="{{$region->id}}" name="region">
                                            <label for="region_{{$region->id}}">{{$region->name}}</label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="filter_cities border-top">
                                    <h5 class="citiesTitle text-secondary">Cities</h5>
                                    <ul class="row g-3 p-2">
                                        @foreach ($cities as $city )
                                        <li class="col-6 filter_cities_item">
                                            <input type="radio" class="filter_cities_item d-none" wire:model="citySelected" id="city_{{$city->id}}" value="{{$city->id}}" name="city" {{$regionSelected && $city->region_id != $regionSelected ? 'disabled' : ''}}>
                                            <label for="city_{{$city->id}}" class="{{$regionSelected && $city->region_id != $regionSelected ? 'cursor_not_allowed' : ''}}">{{$city->name}}</label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="groupBtn">
                                    <div class="row g-2">
                                        <div class="col-6 m-0 ">
                                            <button type="button" class="btn_clearAll" wire:click="cleearAll">CLEAR ALL</button>
                                        </div>
                                        <div class="col-6 m-0">
                                            <button type="button" class="btn_apply col-6 {{!$regionSelected || $citySelected ? 'cursor_not_allowed' : '' }}" wire:click="apply_filter" {{!$regionSelected || $citySelected ? 'disabled' : '' }}>APPLY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <a href="{{route('user.home')}}" class="h-100 w-100 ">
                        <div class="d-flex flex-column justify-content-start align-items-start gap-2 w-100 h-100">
                            <img src="https://statics.vinpearl.com/bai-bien-dep-o-phu-quoc_1648306936.png" alt="" class="card_beach_img">
                            <div class="card_beach_content">
                                <div class="d-flex flex-column gap-1 justify-content-start align-items-start">
                                    <div class="card_beach_name">
                                        {{$beach -> name}}
                                    </div>
                                    <div class="card_beach_city">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span>
                                            {{$beach -> city ->name}}
                                        </span>
                                    </div>
                                </div>
                                <div class="card_beach_description">
                                    {{$beach -> description}}
                                </div>
                                <a href="/" class="btn_card_beach_explore">
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

            <!-- <li class="col">
                <div class="card_beach">
                    <a href="{{route('user.home')}}" class="h-100 w-100 ">
                        <div class="d-flex flex-column gap-2 w-100 h-100">
                            <img src="https://i.pinimg.com/564x/4f/e2/c0/4fe2c012feee5f8137a57fc4822678a7.jpg" alt="" class="card_beach_img">
                            <div class="card_beach_content">
                                <div class="d-flex flex-column gap-1 justify-content-start align-items-start">
                                    <div class="card_beach_name">
                                        MY KHE BEACH
                                    </div>
                                    <div class="card_beach_city">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span>
                                            DA NANG CITY
                                        </span>
                                    </div>
                                </div>
                                <div class="card_beach_description">
                                    My Khe Beach in Da Nang is renowned for its pristine, white sandy shores and inviting turquoise waters.
                                    Stretching for several kilometers along the coast, it offers a perfect blend of relaxation and activity,
                                    with opportunities for swimming, sunbathing, and water sports. The beach is bordered by a lively promenade with local
                                    eateries and shops, adding to its vibrant atmosphere. With its stunning sunrise views and tranquil ambiance,
                                    My Khe Beach is an ideal destination for both relaxation and adventure.
                                </div>
                                <a href="/" class="btn_card_beach_explore">
                                    Explore beach
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            </li> -->
        </ul>
    </main>
</section>
@endsection

@script
<script>
    $(document).ready(function (){
        $('.offcanvas-backdrop').remove();
    });
    $wire.on('hideOffcanvas', () => {
        $('.offcanvas').offcanvas('hide');
    })
</script>
@endscript