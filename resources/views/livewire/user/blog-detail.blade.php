@extends('livewire.user.index')
@section('content')
<section id="BlogDetail">
    <div class="blog">
        <div class="BlogTitleContainer">
            <div class="BlogTitle text-center ">{{ $blog->title }}</div>
            <div class="dateBlog text-center m-2 ">{{ \Carbon\Carbon::parse($blog->created_at)->format('M j Y') }}</div>
            <p class="text-center m-2">{{ $blog->user->name }}</p>
        </div>
        @if($blog->image)
        <div class="beachImageContainer">
            <img src="{{ Storage::url($blog->image) }}" class="w-100" alt="Beach Image">
        </div>
        @endif

        <!-- Section Blog -->
        <div class="section-blog container">
            <p class="my-5 fs-4 text-center">{{ $blog->content }}</p>

            @if($blog->blogSections)
            @foreach($blog->blogSections as $key => $section)
            @if($section->title)
            <div class="titleBlog_2">
                {{ $section->title }}
            </div>
            @endif
            @if($section->description)
            <div class="blogContentSection mt-4 textContent spaced-paragraphs">
                {{ $section->description }}
            </div>
            @endif
            <div class="row mt-4">
                @if($section->images)
                @foreach($section->images as $image)
                <div class="col">
                    <img src="{{ Storage::url($image->path) }}" alt="{{ $image->title }}" class="img_custom_beachBlog">
                </div>
                @endforeach
                @endif
            </div>
            @endforeach
            @endif

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

    </div>

    <!-- Comment -->
    <div class="blog_comment_container container">
        <h1 class="mb-4">Comments</h1>
        @if($comments)
        <div class="card card_comment">
            <div class="card-body overflow-auto">
                @foreach($comments as $comment)
                <div class="d-flex flex-row align-items-start justify-content-start gap-3 mb-3">
                    <div class="avatar_comment">
                        @if($comment->user->avatar)
                        <img src="{{ Storage::url($comment->user->avatar) }}" alt="{{ $comment->user->name }}"
                            class="border rounded-circle img-fluid" width="50" height="50">
                        @else
                        @if(Auth::user())
                        <img src="https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg"
                            alt="{{ Auth::user()->name }}" class="border rounded-circle img-fluid" width="50"
                            height="50">
                        @endif
                        @endif
                    </div>
                    <div class="comment_content">
                        <div class="comment_content_item">
                            <div class="fw-bold">{{ $comment->user->name }}</div>
                            <p>{{ $comment->content }}</p>
                        </div>
                        <p>{{ $comment->created_at-> diffForHumans() }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        @else
        <p>Write the first comment!</p>
        @endif

        <!-- Write Comment -->
        @if(Auth::user())
        <div class="d-flex align-items-center justify-content-start gap-3 mt-4 w-100">
            @if(Auth::user()->avatar)
            <img src="{{ Storage::url(Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}"
                class="border rounded-circle" width="50" height="50">
            @else
            <img src="https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg"
                alt="{{ Auth::user()->name }}" class="border rounded-circle img-fluid" width="50" height="50">
            @endif
            <form wire:submit.prevent="storeComment" class="d-flex flex-row gap-2 position-relative cmt_form_submit">
                <div class="form-group">
                    <input class="" wire:model="content" type="text" placeholder="Comment as {{ Auth::user()->name }}">
                </div>
                <button type="submit" class="btn_send_comment">
                    <span class="material-symbols-outlined">
                        send
                    </span>
                </button>
            </form>
        </div>
        @else
        <p>Please login to comment</p>
        <button wire:click="login" type="button"></button>
        @endif
    </div>
</section>
@endsection