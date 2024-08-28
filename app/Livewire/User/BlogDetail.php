<?php

namespace App\Livewire\User;

use App\Models\Blogs;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class BlogDetail extends Component
{

    public $blog;
    public $comments;
    public $content;
    public $relatedBlogs;

    public function mount($id)
    {
        $this->blog = Blogs::find($id);
        $this->comments = Comments::where('blog_id', $id)->get();
        $this->relatedBlogs = Blogs::where('beach_id', $id)->orderBy('created_at', 'desc')->limit(3)->get();
    }

    public function storeComment()
    {
        $comment = new Comments();
        $comment->blog_id = $this->blog->id;
        // $comment->user_id = Auth::user()->id;
        $comment->user_id = 1;
        $comment->content = $this->content;
        $comment->save();
        Log::info('comment saved: '. $comment->id);

        $this->comments = Comments::where('blog_id', $this->blog->id)->get();
        $this->content = '';
    }
    public function render()
    {
        return view('livewire.user.blog-detail');
    }
}
