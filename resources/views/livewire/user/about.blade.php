@extends('livewire.user.index')
@section('content')
<section id="AboutUs">
    @if($section_1)
    <!-- Section 1: Welcome title and background image -->
    <div id="section_1" class="WelcomeAboutUs">
        <div
            class="w-100 d-flex justify-content-center align-items-center WelcomeTitleContainer">
            @if($AboutTilte)
            <div class="WelcomeTitle">{{ $AboutTilte->content }}</div>
            @endif
        </div>
        <img src="{{ Storage::url($section_1->path) }}" class="backgroundTitle w-100" alt>
    </div>
    @endif
    @if($section_2)
    <!-- Section 2: Introduction -->
    <div id="section_2">
        <div class="row">
            <!-- Text Section -->
            <div class="col-12 col-lg-6">
                <div class="row textSection_2">
                    <div class="col-12">
                        @if($textSection_1_1)
                        <div class="pacifico-regular">{{ $textSection_1_1->content }}
                        </div>
                        @endif
                        <div class="bigTitle">
                            {{-- {{ $textSection_1_2->content }} --}}
                            <div class="div">Your ideal <span class="highlight">beach</span> vacation starts here with our blogs</div>
                        </div>
                        @if($textSection_1_3)
                        <div class="describeAboutUs">
                            {{ $textSection_1_3->content }}
                        </div>
                        @endif
                    </div>
                    <div class="col-12">
                        @if($textSection_1_4)
                        <div class="titleBlog">{{ $textSection_1_4->content }}</div>
                        @endif
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
                            <img class="img_1" src="{{ Storage::url($section_2[0]) }}" alt>
                        </div>
                    </div>
                    <div class="imgContainer_2 d-none d-lg-block">
                        <img class="img_2 hoverOpacity" src="{{ Storage::url($section_2[1]) }}"
                            alt>
                    </div>
                    <div class="imgContainer_3 d-none d-lg-block">
                        <img class="img_3 hoverOpacity"
                            src="{{ Storage::url($section_2[2]) }}" alt>
                    </div>
                    <div class="imgContainer_4 d-none d-lg-block">
                        <img class="img_4 hoverOpacity"
                            src="{{ Storage::url($section_2[3]) }}" alt>
                    </div>
                    <div class="imgContainer_5  d-none d-lg-block">
                        <img class="img_5 hoverOpacity"
                            src="{{ Storage::url($section_2[4]) }}" alt>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- Section 3: Carousel -->
    <div id="section_3" class="carouselContainer pt-lg-5">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach($section_3 as $path)
                <div class="swiper-slide">
                    <img src="{{ Storage::url($path)}}" class="img-fluid" alt>
                </div>
                {{-- <div class="swiper-slide">
                    <img src="./img_2.jpg" class="img-fluid" alt>
                </div>
                <div class="swiper-slide">
                    <img src="./img_1.jpg" class="img-fluid" alt>
                </div>
                <div class="swiper-slide">
                    <img src="./img_4.png" class="img-fluid" alt>
                </div> --}}
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    @if($section_4)
    <!-- Section 4: Customer Stories -->
    <div id="section_4" class="peopleFeelingContainer pt-5">
        <div class="row">
            <div class="col-12">
                @if($textSection_2_1)
                <div class="text-center subTitle">{{ $textSection_2_1->content }}</div>
                @endif
                <div class="titleSection text-center">Stories from
                    <span class="Satisfied">Satisfied</span>
                    Customers
                </div>
                    {{-- <div class="titleSection text-center">
                        {{ $textSection_2_2->content }}
                    </div> --}}
            </div>
        </div>
        <div class="row pt-4">
            <!-- Large Image Section -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="imgStoriesContainer ">
                    <img src="{{ Storage::url($section_4[0])}}" class="imgStory img-fluid"
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
                                            <img src="{{ Storage::url($section_4[0])}}"
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
                                            <img src="{{ Storage::url($section_4[0])}}"
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
                                            <img src="{{ Storage::url($section_4[0])}}"
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
                    <img src="{{ Storage::url($section_4[1])}}"
                        class="imgStoryBelow img-fluid"
                        alt>
                </div>
            </div>
            <!-- Small Image Section -->
            <div class="col-12 col-lg-6 mt-5">
                <div class="row">
                    <div class="col-6">
                        <div class="smallStrImg hover">
                            <img src="{{ Storage::url($section_4[2])}}"
                                class="img-fluid h-100 w-100" alt>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="smallStrImg hover">
                            <img src="{{ Storage::url($section_4[3])}}"
                                class="img-fluid h-100 w-100" alt>
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="smallStrImg hover">
                            <img src="{{ Storage::url($section_4[4])}}"
                                class="img-fluid h-100 w-100" alt>
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="smallStrImg hover">
                            <img src="{{ Storage::url($section_4[5])}}"
                                class="img-fluid h-100 w-100" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Section 5: Latest News -->
    <div id="section_5" class="peopleFeelingContainer pt-5">
        <div class="row">
            <div class="col-12">
                @if($textSection_3_1)
                <div class="text-center subTitle">
                    {{ $textSection_3_1->content }}
                </div>
                @endif
                <div class="text-center titleSection">Latest <span
                        class="Satisfied">Useful</span> News
                </div>
                {{--
                <div class="text-center titleSection">
                    {{ $textSection_3_2->content }}
                </div> --}}
            </div>
        </div>
        <div class="row mt-5">
            <!-- News Articles -->
            @foreach($beaches as $beach)
            <div class="col-12 col-lg-6 mt-5">
                <div class="NewsContainer hover">
                   <a href="{{ route('user.beachDetails', ['id' => $beach->id]) }}">
                    <img src="{{storage::url($beach->image)}}" class="img-fluid imgNews" alt>
                    <div
                        class="date d-flex justify-content-center align-items-center">{{ $beach->updated_at }}</div>
                    <div
                        class="titleNews d-flex justify-content-center align-items-center">{{ $beach->name }}</div>
                    <div
                        class="textNews d-flex justify-content-center align-items-center">{{Str::limit($beach->description,300) }}</div>
                   </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<script src="{{ asset('asset/AboutUs.js') }}"></script>
@endsection
