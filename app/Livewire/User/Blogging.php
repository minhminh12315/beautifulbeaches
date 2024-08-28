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
    public $thumbnail;

    public $thumbnailToEdit;
    public $statusEdit = false;
    public $blogIdToEdit;



    public function mount($id = null)
    {
        $this->beaches = Beaches::all();
        if ($id) {
            $this->blogIdToEdit = $id;
            $this->statusEdit = true;
            $blogs = Blogs::find($id);
            if ($blogs) {
                $this->title = $blogs->title;
                $this->content = $blogs->content;
                $this->beach_id = $blogs->beach_id;
                $this->thumbnailToEdit = $blogs->image;
                foreach ($blogs->blogSections as $section) {
                    $sectionData = [
                        'id' => $section->id,
                        'title' => $section->title,
                        'description' => $section->description,
                        'images' => [],
                        'oldImage' => []
                    ];

                    if ($section->images) {
                        foreach ($section->images as $key => $image) {
                            $sectionData['oldImage'][$image->id] = $image->path;
                        }
                    }

                    // Thêm sectionData vào mảng sections
                    $this->sections[] = $sectionData;
                }
            } else {
                session()->flash('error', 'Blog not found');
                return redirect()->route('some.route');
            }
        }
        Log::info($this->sections);
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
    public function removeOldImage($sectionIndex, $imageIndex)
    {
        // Kiểm tra nếu section có tồn tại và chứa ảnh cũ
        if (isset($this->sections[$sectionIndex]['oldImage'][$imageIndex])) {
            // Loại bỏ ảnh từ mảng 'oldImage' trong section tương ứng
            unset($this->sections[$sectionIndex]['oldImage'][$imageIndex]);

            // Re-index mảng 'oldImage' để tránh vấn đề với các chỉ số mảng
            // $this->sections[$sectionIndex]['oldImage'] = array_values($this->sections[$sectionIndex]['oldImage']);
        }
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
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'title.required' => 'The title field is required',
            'content.required' => 'The content field is required',
            'beach_id.required' => 'The beach field is required',
            'sections.*.title.required' => 'The section title field is required',
            'sections.*.description.required' => 'The section description field is required',
            'sections.*.images.*.required' => 'The section image field is required',
            'thumbnail.required' => 'The thumbnail field is required',
            'thumbnail.image' => 'The thumbnail must be an image',
            'thumbnail.mimes' => 'The thumbnail must be a file of type: jpeg, png, jpg',
            'thumbnail.max' => 'The thumbnail file size must not exceed 2MB',
        ]);
        try {
            $thumbnailName = time()  . '_' . $this->thumbnail->getClientOriginalName();
            $thumbnailPath = $this->thumbnail->storeAs('public/assets/images', $thumbnailName);
            Log::info('Thumbnail Path: ' . $thumbnailPath);

            // Tạo blog
            $blog = new Blogs();
            $blog->title = $this->title;
            $blog->content = $this->content;
            $blog->user_id = Auth::user()->id;
            $blog->beach_id = $this->beach_id;
            $blog->image = $thumbnailPath;
            $blog->save();



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
            return redirect()->route('user.blogs');
        } catch (\Exception $e) {
            Log::error('Error in store method', ['error' => $e->getMessage()]);
            session()->flash('error', 'Something went wrong');
        }
    }
    public function updateBlog()
{
    Log::info('updated');
    $this->validate([
        'title' => ['required'],
        'content' => ['required'],
        'beach_id' => ['required'],
        'thumbnailToEdit' => ['required']
    ], [
        'title.required' => 'The title field is required',
        'content.required' => 'The content field is required',
        'beach_id.required' => 'The beach field is required',
        'thumbnailToEdit.required' => 'The thumbnail field is required',
    ]);

    try {
        $blog = Blogs::find($this->blogIdToEdit);
        if (!$blog) {
            session()->flash('error', 'Blog not found');
            return redirect()->route('user.blogs');
        }

        // Cập nhật nội dung và beach_id của blog
        $blog->title = $this->title;
        $blog->content = $this->content;
        $blog->beach_id = $this->beach_id;

        // Cập nhật thumbnail của blog nếu có
        if ($this->thumbnail) {
            $thumbnailName = time() . '_' . $this->thumbnail->getClientOriginalName();
            $thumbnailPath = $this->thumbnail->storeAs('public/assets/images', $thumbnailName);
            $blog->image = $thumbnailPath;
        }

        $blog->save();

        // Xử lý các section hiện tại
        $existingSectionIds = [];
        foreach ($this->sections as $sectionIndex => $section) {
            if (isset($section['id'])) {
                // Cập nhật section hiện tại
                $blogSection = BlogSection::find($section['id']);
                if ($blogSection) {
                    $blogSection->title = $section['title'];
                    $blogSection->description = $section['description'];
                    $blogSection->save();
                    $existingSectionIds[] = $blogSection->id;

                    if (isset($section['oldImage'])) {
                        $existingImageIds = $blogSection->images->pluck('id')->toArray();
                        $imageIdsToKeep = array_keys($section['oldImage']);
                        $imageIdsToDelete = array_diff($existingImageIds, $imageIdsToKeep);

                        // Xóa ảnh không còn cần thiết
                        foreach ($imageIdsToDelete as $imageId) {
                            $imageToDelete = BlogImage::find($imageId);
                            if ($imageToDelete) {
                                // Xóa tệp ảnh
                                if (file_exists(storage_path('app/' . $imageToDelete->path))) {
                                    unlink(storage_path('app/' . $imageToDelete->path));
                                }
                                // Xóa bản ghi ảnh khỏi cơ sở dữ liệu
                                $imageToDelete->delete();
                            }
                        }

                        foreach ($section['oldImage'] as $imageIndex => $image) {
                            if (is_object($image)) {
                                // Nếu hình ảnh cũ bị thay đổi, xóa ảnh cũ và lưu ảnh mới
                                $existingImage = BlogImage::find($imageIndex);
                                if ($existingImage) {
                                    $imageName = time() . '_' . $image->getClientOriginalName();
                                    $imagePath = $image->storeAs('public/assets/images', $imageName);
                                    $existingImage->path = $imagePath; // Cập nhật đường dẫn ảnh trong database
                                    $existingImage->save(); // Lưu lại
                                }
                            }
                        }
                    }

                    // Xử lý ảnh mới
                    if (isset($section['images'])) {
                        foreach ($section['images'] as $image) {
                            $imageName = time() . '_' . $image->getClientOriginalName();
                            $imagePath = $image->storeAs('public/assets/images', $imageName);

                            BlogImage::create([
                                'blog_section_id' => $blogSection->id,
                                'path' => $imagePath,
                            ]);
                        }
                    }
                }
            } else {
                // Thêm mới section
                $blogSection = new BlogSection();
                $blogSection->title = $section['title'];
                $blogSection->description = $section['description'];
                $blogSection->blog_id = $blog->id;
                $blogSection->save();

                $existingSectionIds[] = $blogSection->id;

                // Xử lý ảnh mới
                if (isset($section['images'])) {
                    foreach ($section['images'] as $image) {
                        $imageName = time() . '_' . $image->getClientOriginalName();
                        $imagePath = $image->storeAs('public/assets/images', $imageName);

                        BlogImage::create([
                            'blog_section_id' => $blogSection->id,
                            'path' => $imagePath,
                        ]);
                    }
                }
            }
        }

        // Xóa các section không còn tồn tại nữa
        $sectionsToDelete = BlogSection::where('blog_id', $blog->id)
            ->whereNotIn('id', $existingSectionIds)
            ->get();

        foreach ($sectionsToDelete as $sectionToDelete) {
            // Xóa các hình ảnh liên quan
            BlogImage::where('blog_section_id', $sectionToDelete->id)->delete();
            $sectionToDelete->delete();
        }

        session()->flash('message', 'Blog updated successfully');
        return redirect()->route('user.blogs');
    } catch (\Exception $e) {
        Log::error('Error in update method', ['error' => $e->getMessage()]);
        session()->flash('error', 'Something went wrong');
    }
}

    public function render()
    {
        return view('livewire.user.blogging');
    }
}
