<?php

namespace App\Livewire\User;

use App\Models\Beaches;
use App\Models\BlogImage;
use App\Models\Blogs;
use App\Models\BlogSection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Blogging extends Component
{
    use WithFileUploads;

    public $title;
    public $content;
    public $sections = [];
    public $beaches;
    public $beach_id;

    public function mount()
    {
        
        $this->beaches = Beaches::all();
    }

    public function addSection()
    {
        $this->sections[] = ['title' => '', 'description' => '', 'images' => []];
    }

    public function removeSection($index)
    {
        unset($this->sections[$index]);
        $this->sections = array_values($this->sections);
    }

    public function addImage($index)
    {
        $this->sections[$index]['images'][] = null;
    }

    public function removeImage($sectionIndex, $imageIndex)
    {
        unset($this->sections[$sectionIndex]['images'][$imageIndex]);
        $this->sections[$sectionIndex]['images'] = array_values($this->sections[$sectionIndex]['images']);
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'beach_id' => 'required',
            'sections.*.title' => 'required',
            'sections.*.description' => 'required',
            'sections.*.images.*' => 'required',
        ], [
            'title.required' => 'The title field is required',
            'content.required' => 'The content field is required',
            'beach_id.required' => 'The beach field is required',
            'sections.*.title.required' => 'The section title field is required',
            'sections.*.description.required' => 'The section description field is required',
            'sections.*.images.*.required' => 'The section image field is required',
        ]);
        try {
            // Tạo blog
            $blog = Blogs::create([
                'title' => $this->title,
                'content' => $this->content,
                'user_id' => Auth::user()->id,
                'beach_id' => $this->beach_id,
            ]);
    
            foreach ($this->sections as $section) {
    
                // Tạo blog section
                $blogSection = new BlogSection();
                $blogSection->title = $section['title'];
                $blogSection->description = $section['description'];
                $blogSection->blog_id = $blog->id;
                $blogSection->save();
                
    
                foreach ($section['images'] as $image) {
                    
    
                    // Lưu trữ ảnh
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $imagePath = $image->storeAs('public/assets/images', $imageName);
                    
    
                    // Tạo bản ghi BlogImage
                    BlogImage::create([
                        'blog_section_id' => $blogSection->id,
                        'path' => $imagePath,
                    ]);
                    
                }
            }
    
            session()->flash('message', 'Blog created successfully');
            $this->reset();
        } catch (\Exception $e) {
            Log::error('Error in store method', ['error' => $e->getMessage()]);
            session()->flash('error', 'Something went wrong');
        }

    }
    public function render()
    {
        return view('livewire.user.blogging');
    }
}
