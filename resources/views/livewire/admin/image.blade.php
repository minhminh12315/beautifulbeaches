@extends('livewire.admin.index')
@section('content')
<section class="container">
    <header class="d-flex flex-column justify-content-center align-items-start gap-4">
        <div class="d-flex flex-column justify-content-center align-items-start gap-1">
            <h1>Images</h1>
            <p class="text-secondary">
                Manage and create images for your beach destinations. You can add, edit, and delete images here.
            </p>
        </div>
        <button class="btn_secondary_custom" wire:click="toggleModalAdd">Add New Images</button>
    </header>
    <div class="table-responsive mt-5">
        <table class="table table-striped table-bordered">
            <thead>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Type</th>
                <th>Path</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @if ($images)
                @foreach ($images as $img )
                <tr>
                    <td>{{ $img->id }}</td>
                    <td>{{ $img->title }}</td>
                    <td>{{ $img->description }}</td>
                    <td>{{ $img->type }}</td>
                    <td>
                        <img src=" {{ Storage::url($img->path) }}" width="auto" height="150" alt="">
                    </td>
                    <td class="d-flex align-items-center justify-content-start gap-3">
                        <button wire:click="showEditImage({{$img->id}})" class="btn_info_custom">
                            <span class="material-symbols-outlined mt-1 fs-6">
                                edit_square
                            </span>
                        </button>
                        <button wire:click="showDeleteImage({{ $img->id }})" class="btn_danger_custom">
                            <span class="material-symbols-outlined fs-6 mt-1">
                                delete
                            </span>
                        </button>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="6">No images found.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Modal for adding new images -->
    <div class="modal fade" tabindex="-1" id="addnew_image" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body mt-2 mb-2">
                    <form wire:submit.prevent="saveContent" class="d-flex flex-column gap-4 w-100" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" wire:model.live="title" placeholder="Images Title">
                            @error('content_text') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" class="form-control" id="name" wire:model.live="description" placeholder="Images Description"></textarea>
                            @error('content_text') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn_addnew_types" data-bs-target="#addnew_image_type" data-bs-toggle="modal">
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                                Add Type
                            </button>
                            <select class="form-control mt-2" name="" id="" wire:model="image_type">
                                <option value="" class="d-none" disabled selected>--Choose your type--</option>
                                @if ($distinctTypes )
                                @foreach ($distinctTypes as $type )
                                <option value="{{$type }}">{{ $type }}</option>
                                @endforeach
                                @else
                                <option value="" disabled selected>No types found.</option>
                                @endif
                            </select>
                            @error('image_type') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" wire:model.live="path">
                            @if ($path)
                            <img src="{{ $path->temporaryUrl()}}" alt="Image" class="img-fluid mt-2" width="auto" height="150">
                            @endif
                            @error('path') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn_secondary_custom mt-4">Add Image</button>
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

    <!-- Modal for Adding New Content Type -->

    <div class="modal fade " tabindex="-1" id="addnew_image_type" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">New Image Type</h5>
                    <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#addnew_image"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="newImageType">
                        <div class="form-group">
                            <input type="text" id="name" wire:model="newtypeToAdd" class="form-control" placeholder="New content type" required>
                            @error('content_type') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="w-100 d-flex justify-content-end align-items-center gap-2  mt-4">
                            <button type="submit" data-bs-toggle="modal" data-bs-target="#addnew_image" class="btn_primary_custom">Back</button>
                            <button type="submit" class="btn_secondary_custom">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for Adding New Content Type When Edit Image -->
    <div class="modal fade " tabindex="-1" id="addnew_image_type_edit" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">New Image Type</h5>
                    <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#edit_image"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="newcontenttype">
                        <div class="form-group">
                            <input type="text" id="name" wire:model="newtypeToAdd" class="form-control" placeholder="New image type" required>
                            @error('image_type') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="w-100 d-flex justify-content-end align-items-center gap-2  mt-4">
                            <button type="submit" data-bs-toggle="modal" data-bs-target="#edit_image" class="btn_primary_custom">Back</button>
                            <button type="submit" class="btn_secondary_custom">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Editing City -->
    <div class="modal fade " tabindex="-1" id="edit_image" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Images</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="editContent" class="d-flex flex-column gap-4 w-100" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" wire:model.live="title" placeholder="Images Title">
                            @error('content_text') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" class="form-control" id="name" wire:model.live="description" placeholder="Images Description"></textarea>
                            @error('content_text') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn_addnew_types" data-bs-target="#addnew_image_type_edit" data-bs-toggle="modal">
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                                Add Type
                            </button>
                            <select class="form-control mt-2" name="" id="" wire:model="image_type">
                                <option value="" class="d-none" disabled selected>--Choose your type--</option>
                                @if ($distinctTypes )
                                @foreach ($distinctTypes as $type )
                                <option value="{{$type }}">{{ $type }}</option>
                                @endforeach
                                @else
                                <option value="" disabled selected>No types found.</option>
                                @endif
                            </select>
                            @error('image_type') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" wire:model.live="path">
                            @if ($path)
                            <img src="{{ $path->temporaryUrl()}}" alt="Image" class="img-fluid mt-2" width="auto" height="150">
                            @elseif($oldImage)
                            <img src="{{ Storage::url($oldImage) }}" alt="Image" class="img-fluid mt-2" width="auto" height="150">
                            @endif
                            @error('path') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn_secondary_custom mt-4">Update Image</button>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for Confirming Deletion -->
    <div class="modal fade" tabindex="-1" id="delete_video">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this image?</p>
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
            $('#addnew_image').modal('show');
        });
        $wire.on('addnew_type_video', () => {
            $('#addnew_image_type').modal('show');
        });

        $wire.on('toggleModalEdit', () => {
            $('#edit_image').modal('show');
        });

        $wire.on('toggleModalDelete', () => {
            $('#delete_video').modal('show');
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