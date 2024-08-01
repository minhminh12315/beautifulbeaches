@extends('livewire.admin.index')

@section('content')
    <div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Regions</h1>
            <a href="{{ route('admin.cities') }}" class="btn btn-secondary">Back to Cities</a>
        </div>
        <form wire:submit="saveRegion">
            <div class="form-group">
                <label for="name">Region Name</label>
                <input type="text" class="form-control" id="name" wire:model="name">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Add Region</button>
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </form>        
    </div>
@endsection
