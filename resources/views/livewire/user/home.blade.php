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
                <a href="{{route('user.beachesWithRegion', $region->id)}}" class="region_item" >
                    <img src="https://i.pinimg.com/564x/19/6e/79/196e795131d346550d6ab3e7257e55b7.jpg" alt="">
                    <div class="region_title">
                        {{$region->name}}
                    </div>
                </a>
                @endforeach
            </div>
            <div class="beach_container d-flex flex-lg-row flex-column jutify-content-between align-items-start gap-5">
                <div class="card_beach">
                    <a href="" class="w-100 h-100 d-flex flex-column gap-2">
                        <div class="card_beach_img_wrapper">
                            <img src="https://i.pinimg.com/564x/70/b6/78/70b678bd0f6435d6e5e6e7f96c39af8e.jpg" alt="" class="card_beach_img">
                        </div>
                        <div class="card_beach_content">
                            <div class="d-flex flex-column gap-1 justify-content-start align-items-start">
                                <div class="card_beach_name">
                                    HALONG BAY
                                </div>
                                <div class="card_beach_city">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>
                                        HA LONG CITY
                                    </span>
                                </div>
                            </div>
                            <div class="card_beach_description">
                                Ha Long Bay, a UNESCO World Heritage site in northern Vietnam, boasts stunning landscapes with its thousands of limestone islands rising from crystal-clear waters. Visitors can enjoy scenic cruises, explore mysterious caves, and relax on pristine beaches. The bay's unique rock formations and tranquil environment offer a perfect escape into nature. Whether kayaking or simply taking in the views, Ha Long Bay promises an unforgettable experience.
                            </div>
                            <a href="/" class="btn_card_beach_explore">
                                Explore beach
                            </a>
                        </div>
                    </a>
                </div>
                <div class="card_beach">
                    <a href="" class="w-100 h-100 d-flex flex-column gap-2">
                        <div class="card_beach_img_wrapper">
                            <img src="https://i.pinimg.com/564x/4f/e2/c0/4fe2c012feee5f8137a57fc4822678a7.jpg" alt="" class="card_beach_img">
                        </div>
                        <div class="card_beach_content">
                            <div class="d-flex flex-column gap-1 justify-content-start align-items-start">
                                <div class="card_beach_name">
                                    MY KHE BEACH
                                </div>
                                <div class="card_beach_city">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>
                                        DA NANG CITY
                                    </span>
                                </div>
                            </div>
                            <div class="card_beach_description">
                                My Khe Beach in Da Nang is renowned for its pristine, white sandy shores and inviting turquoise waters.
                                Stretching for several kilometers along the coast, it offers a perfect blend of relaxation and activity,
                                with opportunities for swimming, sunbathing, and water sports. The beach is bordered by a lively promenade with local
                                eateries and shops, adding to its vibrant atmosphere. With its stunning sunrise views and tranquil ambiance,
                                My Khe Beach is an ideal destination for both relaxation and adventure.
                            </div>
                            <a href="/" class="btn_card_beach_explore">
                                Explore beach
                            </a>
                        </div>
                    </a>
                </div>
                <div class="card_beach">
                    <a href="" class="w-100 h-100 d-flex flex-column gap-2">
                        <div class="card_beach_img_wrapper">
                            <img src="https://statics.vinpearl.com/bai-bien-dep-o-phu-quoc_1648306936.png" alt="" class="card_beach_img">
                        </div>
                        <div class="card_beach_content">
                            <div class="d-flex flex-column gap-1 justify-content-start align-items-start">
                                <div class="card_beach_name">
                                    BAI DAI
                                </div>
                                <div class="card_beach_city">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>
                                        PHU QUOC ISLAND
                                    </span>
                                </div>
                            </div>
                            <div class="card_beach_description">
                                Bai Dai on Phu Quoc Island is celebrated for its unspoiled, golden sandy stretch and crystal-clear blue waters. This serene beach offers a perfect setting for relaxation, with its gentle waves and peaceful environment. Visitors can enjoy leisurely walks along the shore, indulge in water activities, or savor fresh seafood at nearby beachside restaurants. The lush surroundings and stunning sunsets make Bai Dai a picturesque retreat for anyone seeking both tranquility and natural beauty.
                            </div>
                            <a href="/" class="btn_card_beach_explore">
                                Explore beach
                            </a>
                        </div>
                    </a>
                </div>
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
        <div class="row row-cols-lg-2 row-cols-md-1 g-5 preview_card_blog_container">
            <div class="col">
                <div class="card_blog_vertical">
                    <a href="">
                        <div class="card_blog_img_container">
                            <img src="https://i.pinimg.com/564x/b3/97/04/b39704283dcce1a48ebf74c092993b49.jpg" alt="" class="card_blog_img">
                            <span class="badge blog_of_beach">
                                <i class="fa-solid fa-location-dot"></i>
                                DA NANG
                            </span>
                        </div>
                        <div class="card_blog_content">
                            <div class="card_blog_title">
                                My Khe Beach: A Weekend Adventure in Da Nang
                            </div>
                            <div class="card_blog_description">
                                My Khe Beach in Da Nang offers a pristine, white sandy shores and inviting turquoise waters. Stretching for several kilometers along the coast, it offers a perfect blend of relaxation and activity, with opportunities for swimming, sunbathing, and water sports. The beach is bordered by a lively promenade with local eateries and shops, adding to its vibrant atmosphere. With its stunning sunrise views and tranquil ambiance, My Khe Beach is an ideal destination for both relaxation and adventure.
                            </div>
                        </div>
                        <div class="sub_blog_container">
                            <div class="author_of_blog">
                                <img src="https://i.pinimg.com/564x/b3/97/04/b39704283dcce1a48ebf74c092993b49.jpg" alt="" class="author_img">
                                <div class="d-flex flex-column jutify-content-between align-items-start gap-1">
                                    <span class="author_name">John Doe</span>
                                    <span class="author_region">Viet Nam</span>
                                </div>
                            </div>
                            <div class="date_of_blog">
                                January 15, 2023
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column jutify-content-between align-items-center gap-5">
                    <div class="card_blog_horizontal">
                        <a href="">
                            <img src="https://i.pinimg.com/564x/b3/97/04/b39704283dcce1a48ebf74c092993b49.jpg" alt="" class="card_blog_img">
                            <div class="card_blog_content">
                                <span class="badge blog_of_beach">
                                    <i class="fa-solid fa-location-dot"></i>
                                    DA NANG
                                </span>
                                <div class="card_blog_title">
                                    My Khe Beach: A Weekend Adventure in Da Nang
                                </div>
                                <div class="card_blog_description">
                                    My Khe Beach in Da Nang offers a pristine, white sandy shores and inviting turquoise waters. Stretching for several kilometers along the coast, it offers a perfect blend of relaxation and activity, with opportunities for swimming, sunbathing, and water sports. The beach is bordered by a lively promenade with local eateries and shops, adding to its vibrant atmosphere. With its stunning sunrise views and tranquil ambiance, My Khe Beach is an ideal destination for both relaxation and adventure.
                                </div>
                                <div class="sub_blog_container">
                                    <div class="author_of_blog">
                                        <img src="https://i.pinimg.com/564x/b3/97/04/b39704283dcce1a48ebf74c092993b49.jpg" alt="" class="author_img">
                                        <div class="d-flex flex-column jutify-content-between align-items-start gap-1">
                                            <span class="author_name">John Doe</span>
                                            <span class="author_region">Viet Nam</span>
                                        </div>
                                    </div>
                                    <div class="date_of_blog">
                                        January 15, 2023
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card_blog_horizontal">
                        <a href="">
                            <img src="https://i.pinimg.com/564x/b3/97/04/b39704283dcce1a48ebf74c092993b49.jpg" alt="" class="card_blog_img">
                            <div class="card_blog_content">
                                <span class="badge blog_of_beach">
                                    <i class="fa-solid fa-location-dot"></i>
                                    DA NANG
                                </span>
                                <div class="card_blog_title">
                                    My Khe Beach: A Weekend Adventure in Da Nang
                                </div>
                                <div class="card_blog_description">
                                    My Khe Beach in Da Nang offers a pristine, white sandy shores and inviting turquoise waters. Stretching for several kilometers along the coast, it offers a perfect blend of relaxation and activity, with opportunities for swimming, sunbathing, and water sports. The beach is bordered by a lively promenade with local eateries and shops, adding to its vibrant atmosphere. With its stunning sunrise views and tranquil ambiance, My Khe Beach is an ideal destination for both relaxation and adventure.
                                </div>
                                <div class="sub_blog_container">
                                    <div class="author_of_blog">
                                        <img src="https://i.pinimg.com/564x/b3/97/04/b39704283dcce1a48ebf74c092993b49.jpg" alt="" class="author_img">
                                        <div class="d-flex flex-column jutify-content-between align-items-start gap-1">
                                            <span class="author_name">John Doe</span>
                                            <span class="author_region">Viet Nam</span>
                                        </div>
                                    </div>
                                    <div class="date_of_blog">
                                        January 15, 2023
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card_blog_horizontal">
                        <a href="">
                            <img src="https://i.pinimg.com/564x/b3/97/04/b39704283dcce1a48ebf74c092993b49.jpg" alt="" class="card_blog_img">
                            <div class="card_blog_content">
                                <span class="badge blog_of_beach">
                                    <i class="fa-solid fa-location-dot"></i>
                                    DA NANG
                                </span>
                                <div class="card_blog_title">
                                    My Khe Beach: A Weekend Adventure in Da Nang
                                </div>
                                <div class="card_blog_description">
                                    My Khe Beach in Da Nang offers a pristine, white sandy shores and inviting turquoise waters. Stretching for several kilometers along the coast, it offers a perfect blend of relaxation and activity, with opportunities for swimming, sunbathing, and water sports. The beach is bordered by a lively promenade with local eateries and shops, adding to its vibrant atmosphere. With its stunning sunrise views and tranquil ambiance, My Khe Beach is an ideal destination for both relaxation and adventure.
                                </div>
                                <div class="sub_blog_container">
                                    <div class="author_of_blog">
                                        <img src="https://i.pinimg.com/564x/b3/97/04/b39704283dcce1a48ebf74c092993b49.jpg" alt="" class="author_img">
                                        <div class="d-flex flex-column jutify-content-between align-items-start gap-1">
                                            <span class="author_name">John Doe</span>
                                            <span class="author_region">Viet Nam</span>
                                        </div>
                                    </div>
                                    <div class="date_of_blog">
                                        January 15, 2023
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card_blog_horizontal">
                        <a href="">
                            <img src="https://i.pinimg.com/564x/b3/97/04/b39704283dcce1a48ebf74c092993b49.jpg" alt="" class="card_blog_img">
                            <div class="card_blog_content">
                                <span class="badge blog_of_beach">
                                    <i class="fa-solid fa-location-dot"></i>
                                    DA NANG
                                </span>
                                <div class="card_blog_title">
                                    My Khe Beach: A Weekend Adventure in Da Nang
                                </div>
                                <div class="card_blog_description">
                                    My Khe Beach in Da Nang offers a pristine, white sandy shores and inviting turquoise waters. Stretching for several kilometers along the coast, it offers a perfect blend of relaxation and activity, with opportunities for swimming, sunbathing, and water sports. The beach is bordered by a lively promenade with local eateries and shops, adding to its vibrant atmosphere. With its stunning sunrise views and tranquil ambiance, My Khe Beach is an ideal destination for both relaxation and adventure.
                                </div>
                                <div class="sub_blog_container">
                                    <div class="author_of_blog">
                                        <img src="https://i.pinimg.com/564x/b3/97/04/b39704283dcce1a48ebf74c092993b49.jpg" alt="" class="author_img">
                                        <div class="d-flex flex-column jutify-content-between align-items-start gap-1">
                                            <span class="author_name">John Doe</span>
                                            <span class="author_region">Viet Nam</span>
                                        </div>
                                    </div>
                                    <div class="date_of_blog">
                                        January 15, 2023
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
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
            <div class="btn_signInUp_encourage">
                <a href="{{route('login')}}" class="btn_encourage_signin">Sign in</a>
                <a href="{{route('register')}}" class="btn_encourage_signup">Sign up</a>
            </div>
        </div>
    </div>

</section>
@endsection