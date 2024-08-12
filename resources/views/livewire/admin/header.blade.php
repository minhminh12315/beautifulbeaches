<headear class="sticky-top border-bottom bg-white" id="admin_header">
    <div class="backdrop_custom"></div>
    <button type="button" class="btn_collapse_aside d-lg-none d-block">
        <div class="d-flex align-items-center justify-content-center">
            <span class="material-symbols-outlined">
                menu
            </span>
        </div>
    </button>
    <a href="{{route('admin.dashboard')}}" class="d-lg-none">
        <img width="150px" height="auto" src="./asset/logo/logo3D.png" alt="">
    </a>
    <div class="d-none d-lg-block text-secondary">
        Manage your web here
    </div>
    <ul class="d-flex flex-row align-items-center justify-content-end gap-4">
        <li class="admin_header_notification">
            <div class="icon_notification_wrapper d-flex align-items-center justify-content-center">
                <span class="material-symbols-outlined">
                    notifications
                </span>
            </div>
        </li>
        <li class="btn_account position-relative d-flex align-items-center justify-content-center">
            <span class="material-symbols-outlined">
                account_circle
            </span>
            <div class="account_toggle">
                <ul class="d-flex flex-column gap-3">
                    @guest
                    <li>
                        <a href="{{route('login')}}" class="d-flex flex-row gap-2 justify-content-center align-items-center w-100">
                            <span class="material-symbols-outlined">
                                login
                            </span>
                            SIGN IN
                        </a>
                    </li>
                    <li>
                        <a href="{{route('register')}}" class="d-flex flex-row gap-2 justify-content-center align-items-center w-100">
                            <span class="material-symbols-outlined">
                                edit_square
                            </span>
                            SIGN UP
                        </a>
                    </li>
                    @endguest
                    @auth
                    <li>
                        <button>
                            <i class="fa-solid fa-gear text-light"></i>
                            <span>Profile</span>
                        </button>
                    </li>
                    <li>
                        <button>
                            <i class="fa-solid fa-right-from-bracket text-light"></i>
                            <span>Sign out</span>
                        </button>
                    </li>
                    @endauth
                </ul>
            </div>
        </li>
    </ul>
</headear>