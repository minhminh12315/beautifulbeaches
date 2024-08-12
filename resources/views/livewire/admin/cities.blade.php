@extends('livewire.admin.index')
@section('content')
<section class="container mt-2">

    <header class="d-flex flex-column justify-content-center align-items-start gap-4">
        <div class="d-flex flex-column gap-1 justify-content-center align-items-start">
            <h1>Cities</h1>
            <p class="text-secondary">
                Manage and create cities for your beach destinations. You can add, edit, and delete cities here.
            </p>
        </div>
        <div class="d-flex align-items-center justify-content-center gap-2">
            <button wire:click="showAddModal" class="btn_secondary_custom" wire:click="toggleModalAdd">Add New City</button>
            <a href="{{ route('admin.regions') }}" class=" btn_primary_custom">Manage Regions</a>
        </div>

    </header>

    <!-- Cities Table -->
    <div class="table-responsive mt-5">
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
                    <td class="d-flex align-items-center justify-content-start gap-3">
                        <button wire:click="showEditModal({{ $city->id }})" class="btn_info_custom">
                            <span class="material-symbols-outlined mt-1 fs-6">
                                edit_square
                            </span>
                        </button>
                        <button wire:click="showDeleteCity({{ $city->id }})" class="btn_danger_custom">
                            <span class="material-symbols-outlined fs-6 mt-1">
                                delete
                            </span>
                        </button>
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
    </div>

    <!-- Modal for Adding City -->
    <div class="modal fade" tabindex="-1" id="addnew_city">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New City</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body mt-2 mb-2">
                    <form wire:submit.prevent="saveCity">
                        <div class="form-group">
                            <input type="text" id="name" wire:model="name" class="form-control" required placeholder="City name">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <select wire:model="region_id" class="form-control mt-2 w-100" name="region">
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

                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn_secondary_custom">Save</button>
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

    <!-- Modal for Editing City -->
    <div class="modal fade " tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-dialog-centered">
                <div class="modal-header">
                    <h5 class="modal-title">Edit City</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="updateCity">
                        <div class="form-group">
                            <label for="name">City Name</label>
                            <input type="text" id="name" wire:model="name" class="form-control" required>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Confirming Deletion -->
    <div class="modal fade" tabindex="-1" id="delete_city">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this city?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" wire:click="confirmDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@script
<script>
    $(document).ready(() => {
        $wire.on('toggleModalAdd', () => {
            $('#addnew_city').modal('show');
        });
        $wire.on('toggleModalEdit', () => {
            $('#listcategory-edit-category').modal('show');
        });

        $wire.on('toggleModalDelete', () => {
            $('#delete_city').modal('show');
        });
        $wire.on('closeModal', () => {
            $('.modal').modal('hide');
        });
        $wire.on('reload', () => {
            location.reload();
        })
    });
</script>
@endscript