@extends('livewire.user.index')
@section('content')
<!-- Blog Detail Section -->
<section id="BlogDetail" class="BlogDetailContainer">

    <!-- Blog Title and Meta Information -->
    <div class="BlogTitleContainer">
        <div class="BlogTitle text-center">{{ $beach->name }}</div>
        <div class="dateBlog text-center m-2">Apr 7 2023</div>
    </div>

    <!-- Beach Image -->
    <div class="beachImageContainer">
        <img src="{{ Storage::url($beach->image) }}" class="img-fluid beachImage" alt="Beach Image">
    </div>

    <!-- Blog Content Sections -->
    @foreach($beach->beachSections as $beachDetail)
        <div class="titleBlog_2">{{ $beachDetail->title }}</div>
        <div class="blogContentSection mt-4 textContent spaced-paragraphs">
            <p>
                {{ $beachDetail->description }}
            </p>
        </div>
        <div class="row">
        @foreach($beachDetail->beachImages as $image)
            <div class="col">
                <img src="{{ Storage::url($image->path) }}" class="img-fluid" alt="Beach Image">
            </div>
        @endforeach
        </div>
    @endforeach

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