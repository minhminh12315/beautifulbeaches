<?php

namespace App\Livewire\User;

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

    public function mount()
    {
        $this->sections = [
            ['title' => '', 'description' => '', 'images' => []],
        ];
        Log::info(Auth::user()->id);
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

        try {
            Log::info('Store method started.');
    
            // Tạo blog
            $blog = Blogs::create([
                'title' => $this->title,
                'content' => $this->content,
                'user_id' => Auth::user()->id,
                'beach_id' => 1,
            ]);
            Log::info('Blog created successfully', ['blog_id' => $blog->id]);
    
            foreach ($this->sections as $section) {
                Log::info('Processing section', ['section' => $section]);
    
                // Tạo blog section
                $blogSection = new BlogSection();
                $blogSection->title = $section['title'];
                $blogSection->description = $section['description'];
                $blogSection->blog_id = $blog->id;
                $blogSection->save();
                Log::info('Blog section saved', ['blog_section_id' => $blogSection->id]);
    
                foreach ($section['images'] as $image) {
                    Log::info('Processing image', ['image' => $image->getClientOriginalName()]);
    
                    // Lưu trữ ảnh
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $imagePath = $image->storeAs('public/assets/images', $imageName);
                    Log::info('Image stored', ['image_name' => $imageName, 'image_path' => $imagePath]);
    
                    // Tạo bản ghi BlogImage
                    BlogImage::create([
                        'blog_section_id' => $blogSection->id,
                        'path' => $imagePath,
                    ]);
                    Log::info('Blog image created successfully', ['blog_section_id' => $blogSection->id]);
                }
            }
    
            Log::info('Store method completed successfully.');
        } catch (\Exception $e) {
            Log::error('Error in store method', ['error' => $e->getMessage()]);
        }

    }
    public function render()
    {
        return view('livewire.user.blogging');
    }
}
