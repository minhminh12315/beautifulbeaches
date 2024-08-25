@extends('livewire.user.index')
@section('content')
<section>
    <div class="container">
        <div class="blog">
            <h1>{{ $blog->title }}</h1>
            <p>{{ $blog->content }}</p>
            <p>{{ $blog->user->name }}</p>
            <p>{{ $blog->created_at }}</p>
            @if($blog->image)
                <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
            @endif
            <div class="section-blog">
                @if($blog->blogSections)
                    @foreach($blog->blogSections as $key => $section)
                        <div class="card">
                            @if($section->title)
                                <div class="card-title">
                                    {{ $section->title }}
                                </div>
                            @endif
                            @if($section->description)
                                <div class="card-body">
                                    {{ $section->description }}
                                </div>
                            @endif
                            @if($section->image)
                                <img src="{{ Storage::url($section->image) }}" alt="{{ $section->title }}" class="img-fluid">
                            @endif
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <!-- Comment -->
        <div class="comment">
            <h3>Comments</h3>
            @if($comments)
                @foreach($comments as $comment)
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
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
                                <div class="ps-3">
                                    <div class="fw-bold">{{ $comment->user->name }}</div>
                                    <p>{{ $comment->content }}</p>
                                </div>
                            </div>
                            <p>{{ $comment->created_at->diff }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Write the first comment!</p>
            @endif

            <!-- Write Comment -->
            @if(Auth::user())
                <div class="d-flex">
                    @if(Auth::user()->avatar)
                        <img src="{{ Storage::url(Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}"
                            class="border rounded-circle img-fluid" width="50" height="50">
                    @else
                        <img src="https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg"
                            alt="{{ Auth::user()->name }}" class="border rounded-circle img-fluid" width="50" height="50">
                    @endif
                    <form wire:submit.prevent="storeComment">
                        <div class="form-group">
                            <input wire:model="content" type="text" placeholder="Comment as {{ Auth::user()->name }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Comment</button>
                    </form>
                </div>
            @else
                <p>Please login to comment</p>
                <button wire:click="login" type="button"></button>
            @endif
        </div>
    </div>
</section>
@endsection