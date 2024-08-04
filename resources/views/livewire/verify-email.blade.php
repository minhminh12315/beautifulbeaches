<div class="container-fluid">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h4 class="card-title text-center mb-4">Verify Your Account</h4>
                    <div class="alert alert-info mb-4" role="alert">
                        An OTP has been sent to your email. Enter the code to verify your account.
                    </div>
                    <form wire:submit="verifyEmail">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg mb-3" wire:model="otp" placeholder="Enter OTP" aria-label="OTP">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-warning btn-block" type="button" wire:click="resetOtp">Send New OTP</button>
                                <button class="btn btn-success btn-block" type="submit">Verify</button>
                            </div>
                        </div>
                    </form>
                    @error('otp')
                    <div class="alert alert-danger mt-3" role="alert">
                        {{ $message }}
                    </div>
                    @enderror

                    @if ($notification)
                    <div class="alert alert-primary mt-3" role="alert">
                        {{ $notification }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>