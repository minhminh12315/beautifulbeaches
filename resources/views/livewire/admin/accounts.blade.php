@extends('livewire.admin.index')
@section('content')
<section class="container">
    <header class="d-flex flex-column justify-content-center align-items-start gap-4">
        <div class="d-flex flex-column gap-1 justify-content-center align-items-start">
            <h1>Account</h1>
            <p class="text-secondary">
                Manage your account settings, update your profile, and change your password. You can add, edit, and
                delete cities here.
            </p>
        </div>
    </header>

    <div class="table-responsive">
        <table class="table table-striped table-border">
            <thead>
                <th>Id</th>
                <th>Fullname</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @if ($users)
                    @foreach ($users as $user)
                        <td>{{$user->id}}</td>
                        <td>{{$user->fullname}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->status}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td class="d-flex justify-content-start align-items-center gap-2">
                            <button type="button" class="btn_info_custom" wire:click="showAccountEdit({{$user->id}})">
                                <span class="material-symbols-outlined mt-1 fs-6">
                                    edit_square
                                </span>
                            </button>
                            <button type="button" class="btn_danger_custom" wire:click="showAccountDelete({{$user->id}})">
                                <span class="material-symbols-outlined fs-6 mt-1">
                                    delete
                                </span>
                            </button>
                        </td>
                    @endforeach
                @else
                    No accounts founded.
                @endif
            </tbody>
        </table>
    </div>

    <!-- Modal for Editing Account -->
    <div class="modal fade " tabindex="-1" id="edit_account">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="updateAccount" class="d-flex flex-column gap-2 w-100">
                        <div class="form-group">
                            <input type="text" id="name" wire:model="fullname" class="form-control"
                                placeholder="Fullname" required>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" id="email" wire:model="email" class="form-control" placeholder="Email"
                                required>
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" id="phone" wire:model="phone" class="form-control" placeholder="Phone"
                                required>
                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <select wire:model="role" class="form-control w-100" name="role" placeholder="Role">
                                <option value="admin">Admin</option>
                                <option value="customer">Customer</option>
                            </select>
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
    <div class="modal fade" tabindex="-1" id="delete_account">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this Account?</p>
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
        $wire.on('toggleModalEdit', () => {
            $('#edit_account').modal('show');
        });

        $wire.on('toggleModalDelete', () => {
            $('#delete_account').modal('show');
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