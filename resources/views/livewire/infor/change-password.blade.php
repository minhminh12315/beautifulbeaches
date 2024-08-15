@extends('livewire.infor.index')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Change Password</h1>
        <div class="btn-showAsideSetting d-lg-none d-block">
            <span class="material-symbols-outlined">
                menu
            </span>
        </div>
    </div>
    <form wire:submit="changePassword" class="form_setting_container mb-4">
        <div class="form_setting_except_avatar row g-4">
            <div class="position-relative col-12">
                <label for="currentPassword">Current Password*</label>
                <input autocomplete="off" wire:model.live.debounce.250s="currentPassword" type="password" class="text-secondary password" id="currentPassword" placeholder="Enter your Current Password" required>
                <i class="fa-regular fa-eye login-eye icon-eye"></i>
            </div>
            @error('currentPassword') <span class="error text-danger">{{ $message }}</span> @enderror

            <div class="position-relative col-12">
                <label for="newPassword">New Password*</label>
                <input autocomplete="off" wire:model.live.debounce.250s="newPassword" type="password" class="text-secondary password" id="newPassword" placeholder="Enter your New Password" required>
                <i class="fa-regular fa-eye login-eye icon-eye"></i>
            </div>
            @error('newPassword') <span class="error text-danger">{{ $message }}</span> @enderror

            <div class="position-relative col-12">
                <label for="confirmPassword">Confirm Password*</label>
                <input autocomplete="off" wire:model.live.debounce.250s="confirmPassword" type="password" class="text-secondary password" id="confirmPassword" placeholder="Please confirm your New Password" required>
                <i class="fa-regular fa-eye login-eye icon-eye"></i>
            </div>
            @error('confirmPassword') <span class="error text-danger">{{ $message }}</span> @enderror

            <button type="submit" wire:loading.attr="false" class="btn_success mt-2 ">
                Save changes
            </button>
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif

            @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif

    </form>
</div>
<script>
    $(document).ready(function() {
        $('.icon-eye').click(function() {
            $(this).toggleClass('fa-eye fa-eye-slash');
            const input = $(this).closest('.col-12').find('input.password');
            const inputType = input.attr('type') === 'password' ? 'text' : 'password';
            input.attr('type', inputType);
        });
    });
</script>
@endsection