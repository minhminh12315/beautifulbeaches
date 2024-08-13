@extends('livewire.infor.index')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Personal Information</h1>
        <div class="btn-showAsideSetting d-lg-none d-block">
            <span class="material-symbols-outlined">
                menu
            </span>
        </div>
    </div>
    <form wire:submit="update_information" class="form_setting_container mb-4">
        <div class="avatar_setting_container">
            @if($new_avatar)
            <img src="{{ $new_avatar->temporaryUrl() }}" class="avatar_setting" alt="Avatar">
            @elseif ($avatar)
            <img class="avatar_setting" src="{{ Storage::url($avatar) }}" alt="Avatar">
            @else
            <img class="avatar_setting" src="https://scontent.fhan17-1.fna.fbcdn.net/v/t1.30497-1/143086968_2856368904622192_1959732218791162458_n.png?stp=cp0_dst-png_p40x40&_nc_cat=1&ccb=1-7&_nc_sid=136b72&_nc_ohc=Xy7AjkPZPq4Q7kNvgGjaJQ_&_nc_ht=scontent.fhan17-1.fna&oh=00_AYA7OIwIVuPvbsa-4EW9hzy1CsM4rHHQaw1wN59wBy3Vtw&oe=66B07778" alt="Avatar">
            @endif
            <input wire:model="new_avatar" type="file" class="form-control" id="avatar">
        </div>
        @error('new_avatar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form_setting_except_avatar row g-4">
            <div class="col-12">
                <div class="d-flex flex-column gap-2 alig-items-start justify-content-start">
                    <label for="fullName">Fullname*</label>
                    <input type="text" autocomplete="off" wire:model.live.debounce.250s="fullname" id="fullName" placeholder="Enter your full name">
                </div>
            </div>

            <div class=" col-lg-6 col-12">
                <label for="name">Username*</label>
                <input disabled autocomplete="off" wire:model.live.debounce.250s="name" type="text" class="text-secondary" id="name" placeholder="Enter your name">
            </div>

            <div class=" col-lg-6 col-12">
                <label for="email">Email*</label>
                <input disabled autocomplete="off" wire:model.live.debounce.250s="email" type="email" class="text-secondary" id="email" placeholder="Enter your email">
            </div>

            <div class=" col-lg-6 col-12">
                <label for="phone">Phone*</label>
                <input autocomplete="off" wire:model.live.debounce.250s="phone" type="text" class="" id="phone" placeholder="Enter your phone number">
            </div>

            <div class="col-lg-6 col-12">
                <label for="city">City*</label>
                <select autocomplete="off" wire:model.live.debounce.250s="city_id" id="inputGroupSelect01">
                    @if($city)
                    <option value="{{ $city->id }}" selected>{{ $city->name }}</option>
                    @else
                    <option value="" selected> Choose city </option>
                    @endif
                    @if($cities)
                    @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                    @endif
                </select>
            </div>
        </div>

        @if($this->hasChange)
        <button type="submit" wire:loading.attr="false" class="btn_success mt-2 ">
            Save changes
        </button>
        @else
        <button type="submit" class="btn_success mt-2 cursor-not-allowed" disabled>
            Save changes
        </button>
        @endif
    </form>
</div>
@endsection