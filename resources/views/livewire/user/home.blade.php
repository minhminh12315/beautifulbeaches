@extends('livewire.user.index')
@section('content')
<section id="user_homepage">
    <!-- Video -->
    <div class="video_container">
        <video autoplay loop muted>
            <source src="/asset/video/Untitled video - Made with Clipchamp (1).mp4" type="video/mp4">
        </video>
        <div class="video_content">
            <div class="video_content_title">Beautiful Beaches In Vietnam</div>
            <p class="video_content_description">Discover the hidden gems of Vietnam's beautiful beaches and indulge in pristine waters, vibrant marine life, and serene landscapes that promise unforgettable experiences.</p>
            <a href="{{route('user.beaches')}}" class="btn_explore_beaches">EXPLORE BEACHES</a>
        </div>
    </div>

    <!-- region -->
    <div class="container beach_each_region_container">
        <div class="beach_each_region_item">
            <div class="beach_each_region_title">
                Discover Vietnam's Coastal Paradise
            </div>
            <div class="beach_each_region_description">
                Explore the breathtaking beauty of Vietnam's coastline, where each region offers its own unique charm. From the tranquil shores of the north to the vibrant beach scenes of the south, uncover hidden gems and picturesque spots that cater to every beach lover's dream.
            </div>
            <a href="{{route('user.beaches')}}" class="btn_explore_beaches">More Beaches</a>
        </div>
        <div class="beach_each_region_content">
            <div class="region_container d-flex flex-lg-row flex-column jutify-content-between align-items-center gap-5">
                @foreach ($regions as $region )
                <a href="{{route('user.beachesWithRegion', $region->id)}}" class="region_item">
                    <img src="https://i.pinimg.com/564x/19/6e/79/196e795131d346550d6ab3e7257e55b7.jpg" alt="">
                    <div class="region_title">
                        {{$region->name}}
                    </div>
                </a>
                @endforeach
            </div>
            <div class="beach_container d-flex flex-lg-row flex-column jutify-content-between align-items-start gap-5">
                @foreach ($three_beaches as $tb )
                <div class="card_beach">
                    <a href="{{route('user.beachDetails',$tb -> id)}}" class="w-100 h-100 d-flex flex-column gap-2">
                        <div class="card_beach_img_wrapper">
                            <img src="{{Storage::url($tb -> image)}}" alt="" class="card_beach_img">
                        </div>
                        <div class="card_beach_content">
                            <div class="d-flex flex-column gap-1 justify-content-start align-items-start">
                                <div class="card_beach_name">
                                    {{$tb->name}}
                                </div>
                                <div class="card_beach_city">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>
                                        {{$tb->city->name}}
                                    </span>
                                </div>
                            </div>
                            <div class="card_beach_description">
                                {{$tb->description}}
                            </div>
                            <a href="{{route('user.beachDetails',$tb -> id)}}" class="btn_card_beach_explore">
                                Explore beach
                            </a>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- blog -->
    <div class="blog_container_home container">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="blog_home_title">
                Travel Blog
            </div>
            <div class="blog_home_description">
                We share our experiences, tips and travel stories to inspire and guide our readers in their own wanderlust adventures. From hidden gems to popular destinations, we showcase the beauty and diversity of the world, and promote responsible and sustainable travel.
            </div>
            <a href="{{route('user.blogs')}}" class="btn_blog_home">
                Read More
            </a>
        </div>
        <div class="row g-5 preview_card_blog_container">
            <div class="col-lg-6 col-12">
                @if ($mainBlogs)
                <div class="card_blog_vertical">
                    <a href="{{route('user.blogDetail',$mainBlogs -> id)}}">
                        <div class="card_blog_img_container">
                            <img src="https://i.pinimg.com/564x/b3/97/04/b39704283dcce1a48ebf74c092993b49.jpg" alt="" class="card_blog_img">
                            <span class="badge blog_of_beach">
                                <i class="fa-solid fa-location-dot"></i>
                                {{$mainBlogs -> beach -> name}}
                            </span>
                        </div>
                        <div class="card_blog_content">
                            <div class="card_blog_title">
                                {{$mainBlogs -> title}}
                            </div>
                            <div class="card_blog_description">
                                {{$mainBlogs -> content}}
                            </div>
                        </div>
                        <div class="sub_blog_container">
                            <div class="author_of_blog">
                                <img src="https://i.pinimg.com/564x/b3/97/04/b39704283dcce1a48ebf74c092993b49.jpg" alt="" class="author_img">
                                <div class="d-flex flex-column jutify-content-between align-items-start gap-1">
                                    <span class="author_name">{{$mainBlogs -> user -> fullname}}</span>
                                    <span class="author_region">{{$mainBlogs -> user -> city -> name}}</span>
                                </div>
                            </div>
                            <div class="date_of_blog">
                                {{\Carbon\Carbon::parse($mainBlogs -> created_at)->format('M j Y')}}
                            </div>
                        </div>
                    </a>
                </div>
                @endif
            </div>
            <div class="col-lg-6 col-12">
                <div class="d-flex flex-column jutify-content-between align-items-center gap-5">
                    @if ($otherBlogs)
                    @foreach ($otherBlogs as $ob )
                    <div class="card_blog_horizontal">
                        <a href="{{route('user.blogDetail',$ob -> id)}}">
                            <img src="{{$ob -> image}}" alt="" class="card_blog_img">
                            <div class="card_blog_content">
                                <span class="badge blog_of_beach">
                                    <i class="fa-solid fa-location-dot"></i>
                                    {{$ob -> beach -> name}}
                                </span>
                                <div class="card_blog_title">
                                    {{$ob -> title}}
                                </div>
                                <div class="card_blog_description">
                                    {{$ob -> content}}
                                </div>
                                <div class="sub_blog_container">
                                    <div class="author_of_blog">
                                        <img src="https://i.pinimg.com/564x/b3/97/04/b39704283dcce1a48ebf74c092993b49.jpg" alt="" class="author_img">
                                        <div class="d-flex flex-column jutify-content-between align-items-start gap-1">
                                            <span class="author_name">
                                                {{$ob -> user -> fullname}}
                                            </span>
                                            <span class="author_region">
                                                {{$ob -> user -> city -> name}}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="date_of_blog">
                                        {{\Carbon\Carbon::parse($ob -> created_at)->format('M j Y')}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>


    <!-- encourage write blog -->
    <div class="encourage_write_blog_container">
        <img src="https://i.pinimg.com/564x/ac/93/46/ac9346bf9586def789953adfdab8f069.jpg" class="encourage_write_blog_img" alt="">
        <div class="encourage_write_blog_content">
            <div class="encourage_write_blog_title">
                Join Our Blogging Community
            </div>
            <div class="encourage_write_blog_description">
                Want to share your travel stories and insights? Log in to start writing your own blog posts or create an account to join our vibrant community of writers. We’ll showcase your work on our platform and help you connect with a wider audience.
            </div>
            @auth
            <div class="btn_signInUp_encourage">
                <a href="{{route('user.blogging')}}" class="btn_encourage_signup">Blogging</a>
            </div>
            @endauth
            @guest
            <div class="btn_signInUp_encourage">
                <a href="{{route('login')}}" class="btn_encourage_signin">Sign in</a>
                <a href="{{route('register')}}" class="btn_encourage_signup">Sign up</a>
            </div>
            @endguest
        </div>
    </div>

</section>
@endsection