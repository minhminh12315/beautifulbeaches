@extends('livewire.user.index')
@section('content')
    <!-- Blog Detail Section -->
    <section id="BlogDetail" class="BlogDetailContainer">
        <!-- Blog Title and Meta Information -->
        <div class="BlogTitleContainer">
            <div class="BlogTitle text-center">XYZ Thiên Đường Giữa Lòng Thiên Nhiên</div>
            <div class="dateBlog text-center m-2">Apr 7 2023</div>
        </div>
        <!-- Main Image -->
        <div class="BigImageContainer hoverBigger">
            <img src="./copu.png" class="img-fluid BigImage" alt="Big Image">
        </div>
        <!-- Blog Content Sections -->
        <div class="blogContentContainer_1 mt-5">
            <div class="titleBlog_2">The Beauty of the Coastline</div>

            <!-- Text Content Section 1 -->
            <!-- Combined Text Content Section -->
            <div class="blogContentSection mt-4 textContent spaced-paragraphs">
                <p>
                    The soft whispers of waves gently caressing the shore, golden sands stretching endlessly under the warm
                    sun,
                    and crystal-clear waters that reflect the azure sky—this is a paradise where nature’s beauty unfolds at
                    every turn. As you walk along the shoreline, the refreshing sea breeze fills the air with a hint of
                    salt,
                    while the vibrant colors of the surrounding flora and fauna paint a picture of serenity and peace.
                    Whether
                    you're an early riser who loves to watch the sunrise over the horizon or someone who prefers the
                    tranquility
                    of dusk, the coast offers a spectacular view that captivates the soul.
                </p>

                <p>
                    This coastal escape is more than just a place—it's an experience. The allure of this coastal gem lies in
                    its
                    perfect blend of relaxation and adventure. Picture yourself basking in the sun on the soft sands, with
                    the
                    rhythmic sounds of the ocean creating a symphony of calm. Or perhaps you’re more inclined to explore the
                    vibrant underwater world just a few meters from the shore, where a kaleidoscope of marine life awaits.
                    From
                    the thrill of water sports to the simple joy of a beachside picnic, this seaside retreat offers an
                    irresistible charm that draws visitors from all walks of life, leaving them with memories that last a
                    lifetime.
                </p>

                <p>
                    Our team of experienced travel experts is here to help you plan every aspect of your trip, from flights
                    and accommodations to activities and tours. We understand that everyone's travel preferences are unique,
                    which is why we take the time to get to know you and your travel style before creating a personalized
                    itinerary. Whether you're seeking relaxation or adventure, we can tailor your journey to match your
                    desires.
                    Once the project starts, it is important to check in with the handyman on a regular basis to ensure the
                    job is being completed correctly. The homeowner should also ensure that the handyman is following safety
                    protocols.
                </p>
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
            <div class="col-12 titleBlog_2">The Beauty of Coastal Cuisine</div>
            <div class="col-12 mt-4 textContent spaced-paragraphs">
                <p>Coastal cuisine is a celebration of the sea’s bounty, where every dish tells a story of the ocean’s
                    depths. Freshly caught fish, still glistening with seawater, is transformed into mouthwatering
                    delicacies that burst with flavor. The simplicity of grilled seafood, seasoned with just a touch of salt
                    and lemon, allows the natural taste of the ocean to shine, making every bite a reminder of the waves
                    that brought it to shore.</p>

                <p>In coastal kitchens, the air is filled with the aroma of salt, seaweed, and sizzling seafood. Fishermen’s
                    catches are the stars of the table, paired with vibrant, locally sourced produce that mirrors the colors
                    of the coastline. Whether it’s a hearty bowl of seafood stew, rich with the flavors of shellfish and
                    herbs, or a platter of freshly shucked oysters, each dish is a testament to the close relationship
                    between the sea and those who live by it.</p>

                <p>The beauty of coastal cuisine lies in its ability to capture the essence of the sea in every meal. From
                    the delicate sweetness of crabmeat to the robust, smoky flavor of grilled octopus, coastal dishes are a
                    sensory journey that brings the ocean to your plate. Each dish is not just a meal, but an experience—a
                    way to taste the rhythm of the tides and the life beneath the waves.</p>

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
