@extends('livewire.user.index')
@section('content')
<!-- Blog Detail Section -->
<section id="BlogDetail" class="BlogDetailContainer">
    <!-- Blog Title and Meta Information -->
    <div class="BlogTitleContainer">
        <div class="BlogTitle text-center">Plan the Perfect Vacation</div>
        <div class="dateBlog text-center m-2">Apr 7 2023</div>
        <div class="authorBlog text-center">
            <span class="author">Thomas William</span>
        </div>
    </div>
    <!-- Main Image -->
    <div class="BigImageContainer hoverBigger">
        <img src="./copu.png" class="img-fluid BigImage" alt="Big Image">
    </div>
    <!-- Blog Content Sections -->
    <div class="blogContentContainer_1">
        <!-- Text Content Section 1 -->
        <div class="blogContentSection_1 mt-4 textContent">
            There are so many places to explore, so many adventures waiting for you. What makes a great travel
            destination? It depends on what kind of traveler you are: whether it's culture, natural beauty or history
            that interests you most; whether your idea of fun is hiking through mountains or lounging on white-sand
            beaches; if food is more important than sights when planning an itinerary (and vice versa).
        </div>
        <!-- Text Content Section 2 -->
        <div class="blogContentSection_2 mt-4 textContent">
            There are also practical considerations like cost and time spent traveling from place to place and maybe
            even how much luggage space there is in the car/plane/train compartment where we'll be sleeping tonight!
            But no matter what kind of traveler they are or what they're looking for out of their next trip abroad,
            everyone should consider many factors before booking their flight(s).
        </div>
        <!-- Comment Section -->
        <div class="blogContentSection_3 mt-5">
            <div id="feedBack" class="swiper mySwiper hover">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="feedBackContainer row">
                            <div class="feedBack col-12">
                                <div class="content">
                                    I had the most amazing trip thanks to this travel agency. They took care of
                                    everything from flights to accommodations and even helped me plan out my
                                    itinerary. I highly recommend them.
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="formAvatar d-flex justify-content-center">
                                    <div class="avatarContainer">
                                        <img src="./a1.jpg" class="img-fluid avatar" alt="Jasper's Avatar">
                                    </div>
                                    <div class="detailAvatar">
                                        <div class="name">Jasper</div>
                                        <div class="location">San Francisco</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Duplicate comments for demo -->
                    <div class="swiper-slide">
                        <div class="feedBackContainer row">
                            <div class="feedBack col-12">
                                <div class="content">
                                    I had the most amazing trip thanks to this travel agency. They took care of
                                    everything from flights to accommodations and even helped me plan out my
                                    itinerary. I highly recommend them.
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="formAvatar d-flex justify-content-center">
                                    <div class="avatarContainer">
                                        <img src="./a1.jpg" class="img-fluid avatar" alt="Jasper's Avatar">
                                    </div>
                                    <div class="detailAvatar">
                                        <div class="name">Jasper</div>
                                        <div class="location">San Francisco</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="feedBackContainer row">
                            <div class="feedBack col-12">
                                <div class="content">
                                    I had the most amazing trip thanks to this travel agency. They took care of
                                    everything from flights to accommodations and even helped me plan out my
                                    itinerary. I highly recommend them.
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="formAvatar d-flex justify-content-center">
                                    <div class="avatarContainer">
                                        <img src="./a1.jpg" class="img-fluid avatar" alt="Jasper's Avatar">
                                    </div>
                                    <div class="detailAvatar">
                                        <div class="name">Jasper</div>
                                        <div class="location">San Francisco</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- Text Content Section 4 -->
        <div class="blogContentSection_4 mt-5 textContent">
            Our team of experienced travel experts is here to help you plan every aspect of your trip, from flights
            and accommodations to activities and tours. We understand that everyone's travel preferences are unique,
            which is why we take the time to get to know you and your travel style before creating a personalized
            itinerary. Once the project starts, it is important to check in with the handyman on a regular basis to
            ensure the job is being completed correctly. The homeowner should also ensure that the handyman is
            following safety protocols.
        </div>
        <!-- Image Gallery -->
        <div class="blogContentSection_5 mt-3">
            <div class="row">
                <div class="col-12 mt-3 col-lg-6">
                    <div class="imgContainer hoverBigger">
                        <img src="./img_1.jpg" class="img-fluid BigImage" alt>
                    </div>
                </div>
                <div class="col-12 mt-3 col-lg-6">
                    <div class="imgContainer hoverBigger">
                        <img src="./img_1.jpg" class="img-fluid BigImage" alt>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Additional Blog Content Section -->
    <div class="blogContentContainer_2 mt-4 row">
        <div class="col-12 titleBlog_2">Business & Holiday Travel</div>
        <div class="col-12 mt-4 textContent">
            Business travel is an exciting and rewarding experience that offers many opportunities for personal
            growth and professional development. Our team of experienced travel experts can help you plan your
            business travel plans, from flights and accommodations to activities and tours. We understand that
            everyone's business travel preferences are unique, which is why we take the time to get to know you and
            your business style before creating a personalized itinerary. Once the project starts, it is important
            to check in with the handyman on a regular basis to ensure the job is being completed correctly. The
            business owner should also ensure that the handyman is following safety protocols.
        </div>
        <div class="col-12 mt-5">
            <div class="BigImageContainer hoverBigger">
                <img src="./copu.png" class="img-fluid BigImage" alt="Big Image">
            </div>
        </div>
    </div>
    <!-- Articles Section -->
    <div class="ArticlesSection mt-5">
        <div class="row">
            <div class="col-12 subTitle text-center">Travel Blog</div>
            <div class="col-12 latestArticles text-center">Latest Articles</div>
        </div>
        <div class="row mt-5">
            <!-- Article 1 -->
            <div class="col-12 col-lg-4 mt-4">
                <div class="articlesContainer">
                    <div class="imgArticleContainer">
                        <img src="./img_1.jpg" class="img-fluid imgArticle hoverOpacity" alt>
                    </div>
                    <div class="inForContainer w-100">
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="date">April 7, 2023</div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="titleArticle">Discover the Hidden Gems</div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="subTitleArticle textContent">Benefits of traveling alone, from the
                                    freedom to discover new places with new friends.</div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="btnContainer hoverBtn">
                                    <button class="btn btnReadMore">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Article 2 -->
            <div class="col-12 col-lg-4 mt-4">
                <div class="articlesContainer">
                    <div class="imgArticleContainer">
                        <img src="./img_1.jpg" class="img-fluid imgArticle hoverOpacity" alt>
                    </div>
                    <div class="inForContainer w-100">
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="date">April 7, 2023</div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="titleArticle">Discover the Hidden Gems</div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="subTitleArticle textContent">Benefits of traveling alone, from the
                                    freedom to discover new places with new friends.</div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="btnContainer hoverBtn">
                                    <button class="btn btnReadMore">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Article 3 -->
            <div class="col-12 col-lg-4 mt-4">
                <div class="articlesContainer">
                    <div class="imgArticleContainer">
                        <img src="./img_1.jpg" class="img-fluid imgArticle hoverOpacity" alt>
                    </div>
                    <div class="inForContainer w-100">
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="date">April 7, 2023</div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="titleArticle">Discover the Hidden Gems</div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="subTitleArticle textContent">Benefits of traveling alone, from the
                                    freedom to discover new places with new friends.</div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="btnContainer hoverBtn">
                                    <button class="btn btnReadMore">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('asset/BeachDetails.js') }}"></script>
@endsection
