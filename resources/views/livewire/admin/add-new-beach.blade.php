@extends('livewire.admin.index')
@section('content')
<div>
    <h1>Add New Beach</h1>
    <form wire:submit.prevent="addBeach" class="d-flex flex-column gap-2 w-100">
        <div class="form-group">
            <input type="text" id="name" wire:model="beach_name" class="form-control" placeholder="Beach Name">
            @error('beach_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <select wire:model="beach_city" class="form-control" name="city" id="city">
                @foreach ($this->cities as $key => $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
            @error('city_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <input type="text" id="description" wire:model="beach_description" class="form-control"
                placeholder="Beach Description">
            @error('beach_description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <input wire:model="beach_image" type="file" id="beach_image">
            @error('beach_image') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="w-100 d-flex justify-content-end">
            <button type="submit" class="btn_secondary_custom mt-4">Add</button>
        </div>


</div>
@endsection