<div class="container-fluid">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h4 class="card-title text-center mb-4">Reset Your Password</h4>
                    <div class="alert alert-info mb-4" role="alert">
                        Lost your password? Please enter your email address You will receive an OTP to reset your password
                    </div>
                    <form class="reset-password" wire:submit="resetPassword">
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg mb-3" wire:model.live="email_recovery" placeholder="youremail@address.com" aria-label="OTP">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg" wire:model.live="rs_otp" placeholder="Enter your OTP" aria-label="OTP">
                                <button class="btn btn-outline-secondary" type="button" wire:click="recoveryOtp" wire:ignore id="recoveryOtp">Send</button>
                            </div>
                            <div class="position-relative mb-3">
                                <input type="password" class="form-control form-control-lg input-password" wire:model.live="rs_password" placeholder="Enter your New Password" aria-label="OTP">
                                <i class="fa-regular fa-eye login-eye icon-eye"></i>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-success btn-lg" type="submit" wire:loading.attr="disabled">Submit</button>
                            </div>
                            @error('otp')
                            <div class="alert alert-danger mt-3 {{$notification ? 'd-none' : ''}}" role="alert">
                                {{ $message }}
                            </div>
                            @enderror

                            @error('email_recovery')
                            <div class="alert alert-danger mt-3 {{$notification ? 'd-none' : ''}}" role="alert">
                                {{ $message }}
                            </div>
                            @enderror

                            @if ($notification)
                            <div class="alert alert-primary mt-3" role="alert">
                                {{ $notification }}
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // Show and hide password using eye icon
        const showHiddenPassword = (inputPasswordClass, inputIconClass) => {
            const $input = $(`.${inputPasswordClass}`);
            const $iconEye = $(`.${inputIconClass}`);

            $iconEye.on('click', () => {
                const isPassword = $input.attr('type') === 'password';
                $input.attr('type', isPassword ? 'text' : 'password');
                $iconEye.toggleClass('fa-eye fa-eye-slash');
            });
        };
        showHiddenPassword('input-password', 'icon-eye');

        // Disable button and start countdown
        const disableButton = () => {
            var button = $('#recoveryOtp');
            var originalText = button.text();
            button.attr('disabled', true);
            var countdown = 60;

            button.text(countdown);
            var interval = setInterval(function() {
                countdown--;
                if (countdown <= 0) {
                    clearInterval(interval);
                    button.text(originalText);
                    button.removeAttr('disabled');
                } else {
                    button.text(countdown);
                }
            }, 1000);
        };

        $('#recoveryOtp').on('click', function() {
            disableButton();
        });
    })
</script>