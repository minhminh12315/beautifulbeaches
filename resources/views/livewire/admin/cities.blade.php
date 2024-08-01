@extends('livewire.admin.index')
@section('content')
<div class="container mt-4">
    <h1>Cities</h1>

    <!-- Button to add a new city -->
    <button wire:click="showAddModal" class="btn btn-primary mb-3">Add New City</button>

    <!-- Button to view regions -->
    <a href="{{ route('admin.regions') }}" class="btn btn-secondary mb-3">Manage Regions</a>

    <!-- Success Message -->
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <!-- Cities Table -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($cities)
            @foreach($cities as $city)
            <tr>
                <td>{{ $city->id }}</td>
                <td>{{ $city->name }}</td>
                <td>
                    <!-- Edit and Delete buttons -->
                    <button wire:click="showEditModal({{ $city->id }})" class="btn btn-warning btn-sm">Edit</button>
                    <button wire:click="deleteCity({{ $city->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="3">No cities found.</td>
            </tr>
            @endif
        </tbody>
    </table>

    <!-- Modal for Adding City -->
    @if ($AddModal)
    <div class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New City</h5>
                    <button type="button" class="close" wire:click="closeAddModal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="saveCity">
                        <div class="form-group">
                            <label for="name">City Name</label>
                            <input type="text" id="name" wire:model="name" class="form-control" required>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <select wire:model="region_id" class="form-control mt-2 w-50" name="region">
                                <option value="">Select Region</option>
                                @if($regions)
                                @foreach($regions as $region)
                                <option value="{{ $region->id }}">{{ $region->name }}</option>
                                @endforeach
                                @else
                                <option value="">No regions found.</option>
                                @endif
                            </select>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-secondary" wire:click="closeAddModal">Cancel</button>
                        </div>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror

                    </form>
                </div>
                @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
    @endif

    <!-- Modal for Editing City -->
    @if ($showEditModal)
    <div class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit City</h5>
                    <button type="button" class="close" wire:click="closeEditModal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="updateCity">
                        <div class="form-group">
                            <label for="name">City Name</label>
                            <input type="text" id="name" wire:model="name" class="form-control" required>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" wire:click="closeEditModal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
    @endif

    <!-- Modal for Confirming Deletion -->
    @if ($showDeleteModal)
    <div class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Deletion</h5>
                    <button type="button" class="close" wire:click="closeDeleteModal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this city?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeDeleteModal">Cancel</button>
                    <button type="button" class="btn btn-danger" wire:click="confirmDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
    @endif
</div>
@endsection