@extends('livewire.user.index')
@section('content')
<section id="list_blogs_page">
    <!-- BANNER -->
    <div class="container-fluid bannerBackground">
        <img src="https://travel.nicdark.com/travel-agency-wordpress-theme/wp-content/uploads/sites/9/2023/06/bg-01.png" alt="">
        <div class="bannerBlogsContainer row g-5 h-100">
            <div class="col-lg-6 col-12">
                <div class="d-flex flex-column justify-content-center align-items-center align-items-lg-start gap-4 h-100">
                    <div class="bannerBlogBanner">
                        Let's share your beautiful beach's trip in Vietnam
                    </div>
                    <div class="bannerBlogDescription">
                        Discover the hidden gems of Vietnam's beautiful beaches, indulge in pristine waters, vibrant marine life, and serene landscapes that promise unforgettable experiences.
                    </div>
                    <a href="{{ route('user.blogging') }}" class="btn_bannerBlogging">
                        Blogging
                        <span class="material-symbols-outlined">
                            person_edit
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-6 d-none d-lg-block">
                <div class="group_image_banner">
                    <img src="https://i.pinimg.com/564x/ac/93/46/ac9346bf9586def789953adfdab8f069.jpg" alt="" class="img_1">
                    <img src="https://i.pinimg.com/564x/ac/93/46/ac9346bf9586def789953adfdab8f069.jpg" alt="" class="img_2">
                </div>
            </div>
        </div>
    </div>

    <!-- FILTER-BREADCRUMBS -->
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <div class="breadcrumbs_wrapper pt-4">
                {{ Breadcrumbs::render('blog') }}
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
                                <div class="filter_items border-top">
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
                                <div class="filter_items border-top ">
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

    <!-- LIST BLOGS -->
    <main class="container list_blog_user mt-5">
        <ul class="row row-cols-lg-3 row-cols-md-2 g-4">
            @if ($blogs)
            @foreach ($blogs as $blog )
            <li class="col">
                <div class="card_blog_vertical">
                    <a href="{{route('user.blogDetail', $blog->id)}}">
                        <div class="card_blog_img_container">
                            <img src="{{Storage::url($blog->image)}}" alt="" class="card_blog_img">
                            <span class="badge blog_of_beach">
                                <i class="fa-solid fa-location-dot"></i>
                                {{$blog -> beach -> name}}
                            </span>
                        </div>
                        <div class="card_blog_content">
                            <div class="card_blog_title">
                                {{$blog -> title}}
                            </div>
                            <div class="card_blog_description">
                                {{$blog -> content}}
                            </div>
                        </div>
                        <div class="sub_blog_container">
                            <div class="author_of_blog">
                                <img src="https://i.pinimg.com/564x/b3/97/04/b39704283dcce1a48ebf74c092993b49.jpg" alt="" class="author_img">
                                <div class="d-flex flex-column jutify-content-between align-items-start gap-1">
                                    <span class="author_name">
                                        {{$blog -> user -> fullname}}
                                    </span>
                                    <span class="author_region">
                                        {{$blog -> user -> city -> name}}
                                    </span>
                                </div>
                            </div>
                            <div class="date_of_blog">
                                {{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            @endforeach
            @endif
        </ul>
        @if ($blogs -> isNotEmpty())
            @if($blogs->count() < $totalsblogs)
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