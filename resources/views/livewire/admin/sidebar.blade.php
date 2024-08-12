<aside class="border-end overflow-y-auto" id="aside_admin">
    <div class="d-flex flex-column gap-5">
        <button class="btn btn-close btn_close_aside d-lg-none"></button>
        <a href="{{route('admin.dashboard')}}" class="d-lg-block d-none">
            <img width="100%" height="auto" src="https://scontent.xx.fbcdn.net/v/t1.15752-9/452964084_892680496221769_3236605991899914280_n.png?stp=dst-png_p206x206&_nc_cat=103&ccb=1-7&_nc_sid=0024fc&_nc_ohc=L6PPvfSCUvIQ7kNvgFmIpSr&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_Q7cD1QGdQ94IfBihy34Dl0gDf2CC4EOPmLcVx3smda3hOjDXBw&oe=66E0278C" alt="">
        </a>
        <ul class="d-flex flex-column gap-2 admin_aside_list mt-2">
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa-solid fa-home"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{route('admin.beaches')}}">
                    <i class="fa-solid fa-mountain"></i>
                    Beach
                </a>
            </li>
            <li>
                <a href="{{route('admin.regions')}}">
                    <i class="fa-solid fa-earth-americas"></i>
                    Region
                </a>
            </li>
            <li>
                <a href="{{route('admin.cities')}}">
                    <i class="fa-solid fa-city"></i>
                    Cities
                </a>
            </li>
            <li>
                <a href="{{route('admin.blogs')}}">
                    <i class="fa-solid fa-newspaper"></i>
                    Blogs
                </a>
            </li>
            <li>
                <a href="{{route('admin.comments')}}">
                    <i class="fa-solid fa-comments"></i>
                    Comments
                </a>
            </li>
            <li>
                <a href="{{route('admin.content')}}">
                    <i class="fa-solid fa-info"></i>
                    Content
                </a>
            </li>
            <li>
                <a href="{{route('admin.image')}}">
                    <i class="fa-solid fa-image"></i>
                    Image
                </a>
            </li>
            <li>
                <a href="{{route('admin.video')}}">
                    <i class="fa-solid fa-video"></i>
                    Video
                </a>
            </li>
            <li>
                <a href="{{route('admin.accounts')}}">
                    <i class="fa-solid fa-user"></i>
                    Account
                </a>
            </li>
        </ul>
    </div>
</aside>