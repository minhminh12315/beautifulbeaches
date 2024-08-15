@extends('livewire.admin.index')
@section('content')
<section class="container">
    <header class="d-flex flex-column justify-content-center align-items-start gap-4">
        <div class="d-flex flex-column justify-content-center align-items-start gap-1">
            <h1>Videos</h1>
            <p class="text-secondary">
                Manage and create videos for your beach destinations. You can add, edit, and delete videos here.
            </p>
        </div>
        <button class="btn_secondary_custom" wire:click="toggleModalAdd">Add New Video</button>
    </header>
    <div class="table-responsive mt-5">
        <table class="table table-striped table-bordered">
            <thead>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Type</th>
                <th>Path</th>
                <th>Action</th>
            </thead>
            <tbody>
                @if ($videos)
                @foreach ($videos as $video)
                <tr>
                    <td>{{ $video->id }}</td>
                    <td>{{ $video->title }}</td>
                    <td>{{ $video->description }}</td>
                    <td>{{ $video->type }}</td>
                    <td>{{ $video->path }}</td>
                    <td class="d-flex align-items-center justify-content-start gap-3">
                        <button wire:click="showEditVideo({{$video->id}})" class="btn_info_custom">
                            <span class="material-symbols-outlined mt-1 fs-6">
                                edit_square
                            </span>
                        </button>
                        <button wire:click="showDeleteVideo({{$video->id}})" class="btn_danger_custom">
                            <span class="material-symbols-outlined fs-6 mt-1">
                                delete
                            </span>
                        </button>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="6">No videos found.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="modal fade" tabindex="-1" id="addnew_video" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Videos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body mt-2 mb-2">
                    <form wire:submit.prevent="saveVideo" class="d-flex flex-column gap-4 w-100" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" wire:model.live="title" placeholder="Video Title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="description" wire:model.live="description" placeholder="Video Description"></textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn_addnew_types" data-bs-target="#addnew_video_type" data-bs-toggle="modal">
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                                Add Type
                            </button>
                            <select class="form-control mt-2" name="" id="" wire:model="type">
                                @if ($distinctTypes )
                                @foreach ($distinctTypes as $type )
                                <option value="{{$type }}">{{ $type }}</option>
                                @endforeach

                                @if ($newtype)
                                @foreach ($newtype as $nt )
                                <option value="{{$nt }}">{{ $nt }}</option>
                                @endforeach
                                @endif

                                @endif

                                @if (!$distinctTypes && !$newtype)
                                <option value="" disabled>No types found.</option>
                                @endif
                            </select>
                            @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" wire:model.live="path">
                            @if ($path)
                            <img src="{{$path->temporaryUrl()}}" alt="" width="100" height="auto">
                            <video controls width="100" height="auto">
                                <source src="{{ $videoPreview }}" type="video/mp4">
                            </video>
                            @endif
                        </div>
                        <button type="submit" class="btn_secondary_custom mt-4">Add Video</button>
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

    <!-- Modal for Adding New Video Type -->

    <div class="modal fade " tabindex="-1" id="addnew_video_type" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">New Video Type</h5>
                    <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#addnew_video"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="newvideotype">
                        <div class="form-group">
                            <input type="text" id="name" wire:model="newtypeToAdd" class="form-control" placeholder="New video type" required>
                            @error('newtype') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="w-100 d-flex justify-content-end align-items-center gap-2  mt-4">
                            <button type="submit" data-bs-toggle="modal" data-bs-target="#addnew_video" class="btn_primary_custom">Back</button>
                            <button type="submit" class="btn_secondary_custom">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Editing City -->
    <div class="modal fade " tabindex="-1" id="edit_video" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="editVideo" class="d-flex flex-column gap-4 w-100" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" wire:model.live="title" placeholder="Video Title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="description" wire:model.live="description" placeholder="Video Description"></textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn_addnew_types" data-bs-target="#addnew_video_type" data-bs-toggle="modal">
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                                Add Type
                            </button>
                            <select class="form-control mt-2" name="" id="" wire:model.live="type">
                                @if ($distinctTypes )
                                @foreach ($distinctTypes as $type )
                                <option value="{{$type }}">{{ $type }}</option>
                                @endforeach

                                @if ($newtype)
                                @foreach ($newtype as $nt )
                                <option value="{{$nt }}">{{ $nt }}</option>
                                @endforeach
                                @endif

                                @endif

                                @if (!$distinctTypes && !$newtype)
                                <option value="" disabled>No types found.</option>
                                @endif
                            </select>
                            @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" wire:model.live="path">
                            @if ($path)
                            <video controls width="100" height="auto">
                                <source src="{{ $videoPreview }}" type="video/mp4">
                            </video>
                            @endif
                        </div>
                        <button type="submit" class="btn_secondary_custom mt-4">Update Video</button>
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
                    <p>Are you sure you want to delete this region?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" wire:click="deleteVideo">Delete</button>
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
            $('#addnew_video').modal('show');
        });
        $wire.on('addnew_type_video', () => {
            $('#addnew_video_type').modal('show');
        });

        $wire.on('toggleModalEdit', () => {
            $('#edit_video').modal('show');
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