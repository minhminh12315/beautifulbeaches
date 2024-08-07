@extends('livewire.user.index')
@section('content')
<section id="AboutUs">
    <!-- Section 1: Welcome title and background image -->
    <div id="section_1" class="WelcomeAboutUs">
        <div
            class="w-100 d-flex justify-content-center align-items-center WelcomeTitleContainer">
            <div class="WelcomeTitle">About Us</div>
        </div>
        <img src="./a1.jpg" class="backgroundTitle w-100" alt>
    </div>

    <!-- Section 2: Introduction -->
    <div id="section_2">
        <div class="row">
            <!-- Text Section -->
            <div class="col-12 col-lg-6">
                <div class="row textSection_2">
                    <div class="col-12">
                        <div class="pacifico-regular">Explore the
                            Vietnam's Beaches with us.
                        </div>
                        <div class="bigTitle">Your ideal <span
                                class="highlight">beach</span>
                            vacation starts here with our blogs
                        </div>
                        <div class="describeAboutUs">
                            We share the beauty of Vietnam's beaches
                            through engaging blog posts. Explore our
                            guides and tips for your next beach
                            adventure.
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="titleBlog">Local travel blog</div>
                        <div class="borderBlogContainer">
                            <div class="line_1"></div>
                            <div class="line_2"></div>
                        </div>
                        <div class="btnContainer">
                            <button class="btn btn_MoreInfor mt-5">MORE
                                INFOR
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image Section -->
            <div class="col-12 col-lg-6">
                <div class="beachImgContainer">
                    <div
                        class="imgContainer w-100 h-100 d-flex justify-content-center align-items-center">
                        <div class="imgContainer_1 hoverOpacity scaleNone">
                            <img class="img_1" src="./copu.png" alt>
                        </div>
                    </div>
                    <div class="imgContainer_2 d-none d-lg-block">
                        <img class="img_2 hoverOpacity" src="./a1.jpg"
                            alt>
                    </div>
                    <div class="imgContainer_3 d-none d-lg-block">
                        <img class="img_3 hoverOpacity"
                            src="./img_4.png" alt>
                    </div>
                    <div class="imgContainer_4 d-none d-lg-block">
                        <img class="img_4 hoverOpacity"
                            src="./img_1.jpg" alt>
                    </div>
                    <div class="imgContainer_5  d-none d-lg-block">
                        <img class="img_5 hoverOpacity"
                            src="./img_1.jpg" alt>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3: Carousel -->
    <div id="section_3" class="carouselContainer pt-lg-5">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./copu.png" class="img-fluid" alt>
                </div>
                <div class="swiper-slide">
                    <img src="./img_2.jpg" class="img-fluid" alt>
                </div>
                <div class="swiper-slide">
                    <img src="./img_1.jpg" class="img-fluid" alt>
                </div>
                <div class="swiper-slide">
                    <img src="./img_4.png" class="img-fluid" alt>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <!-- Section 4: Customer Stories -->
    <div id="section_4" class="peopleFeelingContainer pt-5">
        <div class="row">
            <div class="col-12">
                <div class="text-center subTitle">Happy Travelers Share
                    Their Experiences</div>
                <div class="titleSection text-center">Stories from
                    <span class="Satisfied">Satisfied</span>
                    Customers</div>
            </div>
        </div>
        <div class="row pt-4">
            <!-- Large Image Section -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="imgStoriesContainer ">
                    <img src="./img_1.jpg" class="imgStory img-fluid"
                        alt>
                </div>
            </div>
            <!-- Feedback Carousel -->
            <div class="col-12 col-lg-6 mt-4">
                <div id="feedBack" class="swiper mySwiper hover">
                    <div class="swiper-wrapper">
                        <!-- Feedback Slide -->
                        <div class="swiper-slide">
                            <div class="feedBackContainer row">
                                <div class="feedBack col-12">
                                    <div class="content">
                                        I had the most amazing
                                        trip thanks to this travel agency.
                                        They took care of everything from
                                        flights to
                                        accommodations and even helped me plan
                                        out my
                                        itinerary. I highly recommend them.
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="formAvatar d-flex justify-content-center">
                                        <div class="avatarContainer">
                                            <img src="./a1.jpg"
                                                class="img-fluid avatar"
                                                alt="Jasper's Avatar">
                                        </div>
                                        <div class="detailAvatar">
                                            <div class="name">Jasper</div>
                                            <div class="location">San
                                                Francisco</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat Feedback Slides -->
                        <div class="swiper-slide">
                            <div class="feedBackContainer row">
                                <div class="feedBack col-12">
                                    <div class="content">
                                        I had the most amazing
                                        trip thanks to this travel agency.
                                        They took care of everything from
                                        flights to
                                        accommodations and even helped me plan
                                        out my
                                        itinerary. I highly recommend them.
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="formAvatar d-flex justify-content-center">
                                        <div class="avatarContainer">
                                            <img src="./a1.jpg"
                                                class="img-fluid avatar"
                                                alt="Jasper's Avatar">
                                        </div>
                                        <div class="detailAvatar">
                                            <div class="name">Jasper</div>
                                            <div class="location">San
                                                Francisco</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat Feedback Slides -->
                        <div class="swiper-slide">
                            <div class="feedBackContainer row">
                                <div class="feedBack col-12">
                                    <div class="content">
                                        I had the most amazing
                                        trip thanks to this travel agency.
                                        They took care of everything from
                                        flights to
                                        accommodations and even helped me plan
                                        out my
                                        itinerary. I highly recommend them.
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="formAvatar d-flex justify-content-center">
                                        <div class="avatarContainer">
                                            <img src="./a1.jpg"
                                                class="img-fluid avatar"
                                                alt="Jasper's Avatar">
                                        </div>
                                        <div class="detailAvatar">
                                            <div class="name">Jasper</div>
                                            <div class="location">San
                                                Francisco</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- Below Image Section -->
            <div class="col-12 col-lg-6 mt-5">
                <div class="imgStoriesContainerBelow hover">
                    <img src="./img_2.jpg"
                        class="imgStoryBelow img-fluid"
                        alt>
                </div>
            </div>
            <!-- Small Image Section -->
            <div class="col-12 col-lg-6 mt-5">
                <div class="row">
                    <div class="col-6">
                        <div class="smallStrImg hover">
                            <img src="./img_1.jpg"
                                class="img-fluid" alt>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="smallStrImg hover">
                            <img src="./img_1.jpg"
                                class="img-fluid" alt>
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="smallStrImg hover">
                            <img src="./img_1.jpg"
                                class="img-fluid" alt>
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="smallStrImg hover">
                            <img src="./img_1.jpg"
                                class="img-fluid" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 5: Latest News -->
    <div id="section_5" class="peopleFeelingContainer pt-5">
        <div class="row">
            <div class="col-12">
                <div class="text-center subTitle">True Roaming
                    Tales</div>
                <div class="text-center titleSection">Latest <span
                        class="Satisfied">Useful</span> News</div>
            </div>
        </div>
        <div class="row mt-5">
            <!-- News Articles -->
            <div class="col-12 col-lg-6 mt-5">
                <div class="NewsContainer hover">
                    <img src="./copu.png" class="img-fluid imgNews" alt>
                    <div
                        class="date d-flex justify-content-center align-items-center">April
                        7,2024</div>
                    <div
                        class="titleNews d-flex justify-content-center align-items-center">New
                        Vietnam Tourism Trends</div>
                    <div
                        class="textNews d-flex justify-content-center align-items-center">Discover
                        the hidden gems of Vietnam's beautiful beaches
                        and lakes, and experience the vibrant culture
                        and history.</div>
                </div>
            </div>
            <!-- Repeat News Articles -->
            <div class="col-12 col-lg-6 mt-5">
                <div class="NewsContainer hover">
                    <img src="./copu.png" class="img-fluid imgNews" alt>
                    <div
                        class="date d-flex justify-content-center align-items-center">April
                        7,2024</div>
                    <div
                        class="titleNews d-flex justify-content-center align-items-center">New
                        Vietnam Tourism Trends</div>
                    <div
                        class="textNews d-flex justify-content-center align-items-center">Discover
                        the hidden gems of Vietnam's beautiful beaches
                        and lakes, and experience the vibrant culture
                        and history.</div>
                </div>
            </div>
            <!-- Repeat News Articles -->
            <div class="col-12 col-lg-6 mt-5">
                <div class="NewsContainer hover">
                    <img src="./copu.png" class="img-fluid imgNews" alt>
                    <div
                        class="date d-flex justify-content-center align-items-center">April
                        7,2024</div>
                    <div
                        class="titleNews d-flex justify-content-center align-items-center">New
                        Vietnam Tourism Trends</div>
                    <div
                        class="textNews d-flex justify-content-center align-items-center">Discover
                        the hidden gems of Vietnam's beautiful beaches
                        and lakes, and experience the vibrant culture
                        and history.</div>
                </div>
            </div>
            <!-- Repeat News Articles -->
            <div class="col-12 col-lg-6 mt-5">
                <div class="NewsContainer hover">
                    <img src="./copu.png" class="img-fluid imgNews" alt>
                    <div
                        class="date d-flex justify-content-center align-items-center">April
                        7,2024</div>
                    <div
                        class="titleNews d-flex justify-content-center align-items-center">New
                        Vietnam Tourism Trends</div>
                    <div
                        class="textNews d-flex justify-content-center align-items-center">Discover
                        the hidden gems of Vietnam's beautiful beaches
                        and lakes, and experience the vibrant culture
                        and history.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('asset/AboutUs.js') }}"></script>
@endsection
