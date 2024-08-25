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

    public function mount($id)
    {
        $this->blog = Blogs::find($id);
        $this->comments = Comments::where('blog_id', $id)->get();
    }

    public function storeComment()
    {
        $comment = new Comments();
        $comment->blog_id = $this->blog->id;
        $comment->user_id = Auth::user()->id;
        $comment->content = $this->content;
        $comment->save();
        Log::info('comment saved: '. $comment->id);

        $this->comments = Comments::where('blog_id', $this->blog->id)->get();
        $this->content = '';
        $this->save();
    }
    public function render()
    {
        return view('livewire.user.blog-detail');
    }
}
