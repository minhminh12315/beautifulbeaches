@extends('livewire.user.index')
@section('content')
<!-- Blog Detail Section -->
<section id="BlogDetail">
    <div class="BlogTitleContainer">
        <div class="BlogTitle text-center ">{{ $beach->name }}</div>
        <div class="dateBlog text-center m-2 ">{{ \Carbon\Carbon::parse($beach->created_at)->format('M j Y') }}</div>
    </div>

    <!-- Beach Image -->
    <div class="beachImageContainer">
        <img src="{{ Storage::url($beach->image) }}" class="w-100 h-100" alt="Beach Image">
    </div>

    <div class="container">
        <p class="my-5 fs-4 text-center">{{$beach->description}}</p>
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
                <img src="{{ Storage::url($image->path) }}" class="img_custom_beachBlog" alt="Beach Image">
            </div>
            @endforeach
        </div>
        @endforeach

        @if ($relatedBlogs)
        <div class="ArticlesSection mt-5">
            <div class="row">
                <div class="col-12 subTitle text-center">Travel Blog</div>
                <div class="col-12 latestArticles text-center">Related Blogs</div>
            </div>
            <div class="row mt-5">
                @foreach ($relatedBlogs as $rb )
                <div class="col-12 col-lg-4 mt-4">
                    <div class="articlesContainer">
                        <a href="{{route('user.blogDetail',$rb->id)}}">
                            <div class="imgArticleContainer">
                                <img src="{{Storage::url($rb->image)}}" class="img-fluid imgArticle hoverOpacity" alt>
                            </div>
                            <div class="inForContainer w-100">
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <div class="date">{{ \Carbon\Carbon::parse($rb->created_at)->format('M j Y') }}</div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="titleArticle">{{$rb->title}}</div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="subTitleArticle textContent">{{$rb -> content}}</div>
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
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>

    <!-- Blog Content Sections -->

</section>
<script src="{{ asset('asset/BeachDetails.js') }}"></script>
@endsection