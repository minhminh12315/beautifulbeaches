<form class="login-form " wire:submit.prevent="login">
    <div class="login-box col-md-6 col-lg-3 position-relative">
        <div class="login-input">
            <h1 class="login-title pb-5">Sign In</h1>
            <div class="userbox col-12">
                <input wire:model.live.debounce.250s="login_username" type="text" name="username" placeholder="Please enter your username" required>
                <label for="username">Username</label>
                @error('login_username') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="userbox col-12 pb-2">
                <input wire:model.defer="login_password" class="password" type="password" name="password" placeholder="Please enter your password" required>
                <i class="fa-regular fa-eye login-eye icon-eye"></i>
                <label for="password">Password</label>
                @error('login_password') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            @error('login_failed') <span class="error text-danger">{{ $message }}</span> @enderror

            <a href="./reset-password" class="col-12 pb-5">Forget your password?</a>
            <button wire:loading.attr="false" class="btn btn-primary btn-login">Sign In</button>
            <div class="col-12 text-center">
                <span>Don't have an account? </span>
                <a href="./register" class="fw-bold">Sign Up for free</a>
            </div>
        </div>
        <div class="fui-loading-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="login-container col-md-6 col-lg-9">
        <div class="login-banner"></div>
        <div class="login-text">
            <div class="text-light fs-4">Discover Paradise</div>
            <h1 class="text-light">Your Gateway to Stunning Beaches Around the World</h1>
        </div>
    </div>
</form>
<script>
    $(document).ready(function() {
        $('.icon-eye').click(function() {
            $(this).toggleClass('fa-eye fa-eye-slash');
            const input = $(this).closest('.col-12').find('input.password');
            const inputType = input.attr('type') === 'password' ? 'text' : 'password';
            input.attr('type', inputType);
        });

        $('.btn-login').click(function() {
            $('.login-input').addClass('d-none');
        });
    });
</script> 