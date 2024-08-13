@extends('livewire.admin.index')

@section('content')
<section class="container mt-2">
    <header class="d-flex flex-column justify-content-center align-items-start gap-4">
        <div class="d-flex flex-column justify-content-center align-items-start gap-1">
            <h1>Regions</h1>
            <p class="text-secondary">
                Manage and create regions for your beach destinations. You can add, edit, and delete regions here.
            </p>
        </div>
        <button class="btn_secondary_custom" wire:click="toggleModalAdd">Add New Region</button>
    </header>
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
                @if($regions)
                @foreach($regions as $region)
                <tr>
                    <td>{{ $region->id }}</td>
                    <td>{{ $region->name }}</td>
                    <td class="d-flex align-items-center justify-content-start gap-3">
                        <button wire:click="showEditRegion({{ $region->id }})" class="btn_info_custom">
                            <span class="material-symbols-outlined mt-1 fs-6">
                                edit_square
                            </span>
                        </button>
                        <button wire:click="showDeleteRegion({{ $region->id }})" class="btn_danger_custom">
                            <span class="material-symbols-outlined fs-6 mt-1">
                                delete
                            </span>
                        </button>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="3">No regions found.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    <div class="modal fade" tabindex="-1" id="addnew_region">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Region</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body mt-2 mb-2">
                    <form wire:submit="saveRegion">
                        <div class="form-group">
                            <label for="name">Region Name</label>
                            <input type="text" class="form-control" id="name" wire:model="name">
                        </div>
                        <button type="submit" class="btn_secondary_custom mt-4">Add Region</button>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </form>
                </div>
                @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Modal for Editing City -->
    <div class="modal fade " tabindex="-1" id="edit_region">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Region</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="updateRegion">
                        <div class="form-group">
                            <input type="text" id="name" wire:model="name" class="form-control" placeholder="Region name" required>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="w-100 d-flex justify-content-end">
                            <button type="submit" class="btn_secondary_custom mt-4">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Confirming Deletion -->
    <div class="modal fade" tabindex="-1" id="delete_region">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this region?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" wire:click="deleteRegion">Delete</button>
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
            $('#addnew_region').modal('show');
        });

        $wire.on('toggleModalEdit', () => {
            $('#edit_region').modal('show');
        });

        $wire.on('toggleModalDelete', () => {
            $('#delete_region').modal('show');
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