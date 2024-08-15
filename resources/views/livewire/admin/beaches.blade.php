@extends('livewire.admin.index')
@section('content')
<section>
    <h1>Beaches</h1>
    <table class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>City</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @if ($beaches)
                @foreach ($beaches as $beach)
                    <tr>
                        <td>{{$beach->id}}</td>
                        <td>{{$beach->name}}</td>
                        <td>{{$beach->city->name}}</td>
                        <td>
                            <button class="btn btn-primary" wire:click="showBeachEdit({{$beach->id}})">Edit</button>
                            <button class="btn btn-danger" wire:click="showBeachDelete({{$beach->id}})">Delete</button>
                        </td>
                    </tr>
                @endforeach
            @else
                No beaches founded.
            @endif
        </tbody>
    </table>

    <!-- Modal for Editing Beach -->
    <div class="modal fade" tabindex="-1" id="edit_beach" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Beach</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="updateBeach" class="d-flex flex-column gap-2 w-100">
                        <div class="form-group">
                            <input type="text" id="name" wire:model="beach_name" class="form-control"
                                placeholder="Beach Name">
                            @error('beach_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <select wire:model="beach_city" class="form-control" name="city" id="city">
                                @foreach ($this->cities as $key => $city)
                                    <option value="{{ $city->id }}" {{ $city->id == optional($this->beach)->city_id ? 'selected' : '' }}>
                                        {{ $city->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('city_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <textarea id="description" wire:model="beach_description" class="form-control"
                                placeholder="Beach Description" rows="4"></textarea>
                            @error('beach_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type='file' id="image" wire:model="beach_image" class="form-control">

                            @if (!empty($this->beach_image))
                                <!-- Hiển thị hình ảnh đã tải lên tạm thời -->
                                <img src="{{ $beach_image->temporaryUrl() }}" class="img-fluid mt-2" alt="Beach Image">
                            @elseif ($this->beach && $this->beach->image)
                                <h1>a</h1>
                                <!-- Hiển thị hình ảnh hiện tại của bãi biển từ cơ sở dữ liệu -->
                                <img src="{{ Storage::url($this->beach->image) }}" class="img-fluid mt-2"
                                    alt="Beach Image">
                            @else
                            <h1>b</h1>
                                <!-- Hiển thị hình ảnh mặc định nếu không có hình ảnh -->
                                <!-- <img src="{{ asset('images/default.jpg') }}" class="img-fluid mt-2" alt="Beach Image"> -->
                            @endif

                            @error('beach_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mt-4">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Confirming Deletion -->
    @if ($this->beachToDelete)
        <div class="modal fade" tabindex="-1" id="delete_beach">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this Beach?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" wire:click="confirmDelete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</section>
@endsection

@script
<script>
    $(document).ready(() => {
        $wire.on('toggleModalEdit', () => {
            $('#edit_beach').modal('show');
        });

        $wire.on('toggleModalDelete', () => {
            $('#delete_beach').modal('show');
        });

        $wire.on('closeModal', () => {
            $('.modal').modal('hide');
        });

        $wire.on('reload', () => {
            location.reload();
        });

        $(document).on('click', '.modal-backdrop', function () {
            $wire.dispatch('closeModal');
        });
    });
</script>
@endscript