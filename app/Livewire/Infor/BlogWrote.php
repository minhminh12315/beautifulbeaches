<?php

namespace App\Livewire\Infor;

use App\Models\Blogs;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class BlogWrote extends Component
{
    public $blogs;
    public $userId;
    public function mount(){
        $this -> userId = auth()->user()->id;
        $this->blogs = Blogs::where('user_id', $this->userId)->get();
    }
    public function deleteBlog($id){
        Blogs::find($id)->delete();
        $this->blogs = Blogs::where('user_id', $this->userId)->get();
    }
    public function editBlog($id){
        return redirect()->route('user.bloggingEdit', $id);
    }
    public function render()
    {
        return view('livewire.infor.blog-wrote');
    }
}
