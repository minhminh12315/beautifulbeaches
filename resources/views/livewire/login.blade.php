<form class="login-form " wire:submit.prevent="login">
    <div class="login-box col-md-6 col-lg-3">
        <h1 class="login-title pb-5">Sign In</h1>
        <div class="userbox col-12">
            <input wire:model.live="login_username" type="text" name="username" placeholder="Please enter your username" required>
            <label for="username">Username</label>
            @error('login_username') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="userbox col-12 pb-2">
            <input wire:model.live="login_password" class="input-password" type="password" name="password" placeholder="Please enter your password" required>
            <i class="fa-regular fa-eye login-eye icon-eye"></i>
            <label for="password">Password</label>
            @error('login_password') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        @error('login_failed') <span class="error text-danger">{{ $message }}</span> @enderror

        <a href="" class="col-12 pb-5" data-bs-toggle="modal" data-bs-target="#forget-password">Forget your password?</a>
        <button wire:loading.attr="false" class="btn-login ">Sign In</button>
        <div class="col-12 text-center">
            <span>Don't have an account? </span>
            <a href="./register" class="fw-bold">Sign Up for free</a>
        </div>
    </div>
    <div class="login-container col-md-6 col-lg-9">
        <div class="login-banner"></div>
        <div class="login-text">
            <div class="text-light fs-4">Discover Paradise</div>
            <h1 class="text-light">Your Gateway to Stunning Beaches Around the World</h1>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="forget-password">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Reset Password</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="text-center pb-4">Recovery your password</h5>
                    <input type="text" name="email-recovery" class="email-recovery form-control" placeholder="Username or Email Address">
                    <small class="p-1 text-secondary">A password will be e-mailed to you.</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reset-password">Send Email</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="reset-password">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Reset Password</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="text-center pb-2">Reset your password</h5>
                    <input type="text" name="cr-password" class="cr-password form-control mb-3" placeholder="Please enter Current Password">
                    <input type="text" name="rs-password" class="rs-password form-control mb-3" placeholder="Please enter New Password">
                    <input type="text" name="rs-cf-password" class="rs-cf-password form-control" placeholder="Confirm your New Password">
                    <small class="ps-2">
                        <ul class="text-secondary">New Password should be following requirements:</ul>
                        <li class="text-secondary ps-3">Password should contain uppercase and lowercase letters.</li>
                        <li class="text-secondary ps-3">Password should contain letters and numbers.</li>
                        <li class="text-secondary ps-3">Password should have more than 6 characters.</li>
                    </small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function() {
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
    })
</script>