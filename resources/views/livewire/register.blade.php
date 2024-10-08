<form class="register-form " wire:submit.prevent="register">
    <div class="register-box col-md-6 col-lg-3 position-relative">
        <div class="register-input">
            <h1 class="register-title pb-5">Sign Up</h1>
            <div class="userbox col-12">
                <input wire:model.live="name" type="text" name="username" placeholder="Please enter your username" required>
                <label for="username">Username</label>
                @error('username') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="userbox col-12">
                <input wire:model.live="email" type="email" name="email" placeholder="Please enter your email" required>
                <label for="username">Email</label>
                @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="userbox col-12">
                <select wire:model.live="city_id" id="inputGroupSelect01">
                    <option value="" selected>Please choose your city</option>
                    @if($cities)
                    @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                    @endif
                </select>
                <label for="username">City</label>
            </div>
            <div class="userbox col-12 pb-2">
                <input wire:model.live="password" class="password" type="password" name="password" placeholder="Please enter your password" required>
                <i class="fa-regular fa-eye icon-eye"></i>
                <label for="password">Password</label>
                @error('password') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="userbox col-12 pb-2">
                <input wire:model.live="password_confirmation" class="password" type="password" name="password" placeholder="Please confirm your password" required>
                <i class="fa-regular fa-eye icon-eye"></i>
                <label for="password">Confirm Password</label>
                @error('password_confirmation') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <button wire:loading.attr="false" class="btn btn-register btn-primary">Sign Up</button>
            <div class="col-12 text-center">
                <span>Already have an account?</span>
                <a href="./login" class="fw-bold">Sign In</a>
            </div>
        </div>
        <div class="fui-loading-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="register-container col-md-6 col-lg-9">
        <div class="register-banner"></div>
        <div class="register-text">
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

        $('.btn-register').click(function() {
            $('.register-input').addClass('d-none');
        });
    });
</script>