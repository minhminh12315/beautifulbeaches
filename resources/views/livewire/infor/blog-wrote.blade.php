@extends('livewire.infor.index')
@section('content')
<section id="BlogDetail" class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Blogs Written</h1>
        <div class="btn-showAsideSetting d-lg-none d-block">
            <span class="material-symbols-outlined">
                menu
            </span>
        </div>
    </div>
    <div class="row mt-5">
        @if ($blogs)
        @foreach ($blogs as $b )
        <div class="col-12 col-lg-4 mt-4">
            <div class="articlesContainer">
                <a href="{{route('user.blogDetail',$b->id)}}">
                    <div class="imgArticleContainer position-relative">
                        <img src="{{Storage::url($b->image)}}" class="img-fluid imgArticle hoverOpacity" alt>
                        <div class="aciton_group">
                            <span class="material-symbols-outlined btn_edit_blog" wire:click.prevent="editBlog({{$b -> id}})">
                                edit
                            </span>
                            <span class="material-symbols-outlined btn_delete_blog" wire:click.prevent="deleteBlog({{$b -> id}})" wire:confirm="Are you sure you want to delete this blog?">
                                delete
                            </span>
                        </div>
                    </div>
                    <div class="inForContainer w-100">
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="date">{{ \Carbon\Carbon::parse($b->created_at)->format('M j Y') }}</div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="titleArticle">{{$b->title}}</div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="subTitleArticle textContent">{{$b -> content}}</div>
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
        @endif
    </div>
</section>
@endsection