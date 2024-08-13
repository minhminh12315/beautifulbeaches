<aside id="aside_setting_container">
    <div class="d-flex flex-column gap-2">
        <div class="d-flex justify-content-between align-items-center">
            <a class="setting-backhome" href="{{route('user.home')}}">
                <span class="material-symbols-outlined">
                    home
                </span>
            </a>
            <button class="btn btn-close btn-close-asideSetting d-lg-none d-block"></button>
        </div>
        <ul class="d-flex flex-column aside-setting-list gap-3 pt-2 mt-2 ">
            <li wire:click="displayMainSettingContent">
                <a wire:navigate href="{{ route('user.changeInformation') }}">
                    <span class="material-symbols-outlined">
                        manage_accounts
                    </span>
                    <span>
                        Personal Infomation
                    </span>
                    <span class="material-symbols-outlined mt-1 d-lg-none d-block">
                        chevron_right
                    </span>
                </a>
            </li>
            <li wire:click="displayMainSettingContent">
                <a wire:navigate href="{{ route('user.changePassword') }}">
                    <span class="material-symbols-outlined ">
                        shield
                    </span>
                    <span>
                        Password and Security
                    </span>
                    <span class="material-symbols-outlined mt-1 d-lg-none d-block">
                        chevron_right
                    </span>
                </a>
            </li>
        </ul>
    </div>
</aside>