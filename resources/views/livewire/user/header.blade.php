<header id="user_header" class="navbar navbar-expand-lg {{$isHomePage ? 'isHomePage' : ''}}">
    <div class="container d-flex flex-row justify-content-between align-items-center">
        <a href="{{route('user.home')}}" wire:navigate>
            <img src="./asset/logo/logo3D.png" alt="" class="logo_header">
        </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasHeader" aria-labelledby="menuOffcanvasTitle">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="menuOffcanvasTitle">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex justify-content-center align-items-center">
                <nav class="main_navhome_user">
                    <ul>
                        <li><a href="{{route('user.beaches')}}" wire:navigate>Beaches</a></li>
                        <li><a href="{{route('user.blogs')}}" wire:navigate>Blogs</a></li>
                        <li><a href="" wire:navigate>About</a></li>
                        <li><a href="" wire:navigate>Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <ul class="header_action_user">
            <li class="btn_search_home">
                <span class="material-symbols-outlined">
                    search
                </span>
            </li>
            <li class="btn_account_user position-relative">
                <span class="material-symbols-outlined">
                    account_circle
                </span>
                <div class="account_user_toggle">
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
            <li>
                <button class="btn_navbar_toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasHeader">
                    <span class="material-symbols-outlined">
                        menu
                    </span>
                </button>
            </li>
        </ul>
        <div class="search_user_container">
            <div class="d-flex flex-row justify-content-between align-items-center w-100">
                <a href="">
                    OCEANIC
                </a>
                <div class="w-100 d-flex justify-content-center position-relative">
                    <input type="text" class="inp_search_home" placeholder="Search for beaches">
                    <span class="material-symbols-outlined clear_search_home">
                        close
                    </span>
                </div>
                <button class="btn_close_search">Cancel</button>
            </div>
            <div class="search_result">
                <a href="/" class="search_result_item">
                    <img src="https://dummyimage.com/600x400/000/fff" alt="" class="beach_img_result">
                    <div class="d-flex flex-column">
                        <div class="beach_result_title">
                            MY KHE BEACH
                        </div>
                        <p class="beach_result_description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam et magni delectus dolore inventore ducimus quasi ad id consectetur sapiente unde eius sed, tempora repudiandae officiis. Iure dicta eius iusto?
                        </p>
                    </div>
                </a>
                <a class="search_result_item">
                    <img src="https://dummyimage.com/600x400/000/fff" alt="" class="beach_img_result">
                    <div class="d-flex flex-column">
                        <div class="beach_result_title">
                            MY KHE BEACH
                        </div>
                        <p class="beach_result_description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam et magni delectus dolore inventore ducimus quasi ad id consectetur sapiente unde eius sed, tempora repudiandae officiis. Iure dicta eius iusto?
                        </p>
                    </div>
                </a>
                <a class="search_result_item">
                    <img src="https://dummyimage.com/600x400/000/fff" alt="" class="beach_img_result">
                    <div class="d-flex flex-column">
                        <div class="beach_result_title">
                            MY KHE BEACH
                        </div>
                        <p class="beach_result_description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam et magni delectus dolore inventore ducimus quasi ad id consectetur sapiente unde eius sed, tempora repudiandae officiis. Iure dicta eius iusto?
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="search_backdrop"></div>
    </div>
    <div class="offcanvas_backdrop_custom" wire:ignore></div>
</header>