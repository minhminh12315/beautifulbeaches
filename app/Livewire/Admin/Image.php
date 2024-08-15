<?php

namespace App\Livewire\Admin;

use App\Models\Images;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class Image extends Component
{
    use WithFileUploads;
    public $images;
    public $distinctTypes;

    public $title;
    public $description;
    public $path;
    public $image_type;
    public $newtypeToAdd;
    public $imageToEdit;
    public $imageToDelete;

    public $oldImage;
    public function mount()
    {
        $this->images = Images::all();
        $this->distinctTypes = Images::distinct()->pluck('type');
        $this->title = '';
        $this->description = '';
        $this->path = '';
        $this->image_type = '';
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'title' => 'required|string|min:3',
            'description' => 'required|string|max:255',
            'path' => 'required|mimes:jpeg,png,jpg|max:2048',
            'image_type' => 'required|string|min:3|max:255'
        ], [
            'title.required' => 'The title field is required.',
            'description.required' => 'The description field is required.',
            'path.required' => 'The path field is required.',
            'path.mimes' => 'The path must be a JPEG, PNG, or JPG image.',
            'path.max' => 'The path file is too large (max. 2MB).',
            'image_type.required' => 'The type field is required.',
            'image_type.min' => 'The type must be at least 3'
        ]);
    }
    public function toggleModalAdd()
    {
        $this->dispatch('toggleModalAdd')->self();
        $this->title = '';
        $this->description = '';
        $this->path = '';
        $this->image_type = '';
    }

    public function newImageType()
    {
        $distinctTypesArray = $this->distinctTypes->toArray();

        if (in_array($this->newtypeToAdd, $distinctTypesArray)) {
            flash()->info('The content type already exists.');
            $this->newtypeToAdd = '';
        } else {
            $this->distinctTypes->push($this->newtypeToAdd);
            $this->newtypeToAdd = '';
            flash()->success('Added new type content successfully.');
        }
    }

    public function saveContent()
    {
        $imageName = time() . '_' . $this->path->getClientOriginalName();
        $imagePath = $this->path->storeAs('public/assets/images', $imageName);
        $publicPath = 'assets/images/' . $imageName;

        Log::info($publicPath);
        Log::info($this->title);
        Log::info($this->description);
        Log::info($this->image_type);

        $image = new Images();
        $image->title = $this->title;
        $image->description = $this->description;
        $image->path = $publicPath;
        $image->type = $this->image_type;
        $image->save();

        // Close modal and refresh data
        $this->dispatch('closeModal')->self();
        flash()->success('Image added successfully.');
        $this->images = Images::all();
        $this->title = '';
        $this->description = '';
        $this->path = null;
        $this->image_type = null;
        $this->distinctTypes = Images::distinct()->pluck('type'); // Refresh distinctTypes
        $this->newtypeToAdd = '';
    }

    public function showDeleteImage($id)
    {
        $this->dispatch('toggleModalDelete')->self();
        $this->imageToDelete = $id;
    }

    public function confirmDelete()
    {
        if ($this->imageToDelete) {
            $image = Images::find($this->imageToDelete);
            if ($image) {
                $image->delete();
                $this->images = Images::all();
                flash()->success('Images deleted successfully');
                $this->dispatch('closeModal')->self();
            } else {
                flash()->error('Images not found');
            }
        } else {
            flash()->error('No Images selected');
        }
    }
    public function showEditImage($id)
    {
        $image = Images::find($id);
        if ($image) {
            $this->title = $image->title;
            $this->description = $image->description;
            $this->image_type = $image->type;
            $this->oldImage = $image->path;
            $this->distinctTypes = Images::distinct()->pluck('type');
            $this->imageToEdit = $id;
            $this->dispatch('toggleModalEdit');
        } else {
            flash()->error('Content not found.');
            $this->dispatch('closeModal')->self();
        }
    }

    public function editContent()
    {
        $image = Images::find($this->imageToEdit);
        if ($image) {
            $image->title = $this->title;
            $image->description = $this->description;
            $image->type = $this->image_type;
            if ($this->path) {
                $imageName = time() . '_' . $this->path->getClientOriginalName();
                $imagePath = $this->path->storeAs('public/assets/images', $imageName);
                $publicPath = 'assets/images/' . $imageName;
                $image->path = $publicPath;
            }
            else{
                $image->path = $this->oldImage; // If no new image uploaded, keep the old one.
            }
            $image->save();
            $this->dispatch('closeModal')->self();
            flash()->success('Content edited successfully.');
            $this->images = Images::all();
            $this->title = '';
            $this->description = '';
            $this->image_type = '';
            $this->imageToEdit = null;
            $this->distinctTypes = Images::distinct()->pluck('type');
        } else {
            flash()->error('Content not found.');
            $this->dispatch('closeModal')->self();
        }
    }
    public function render()
    {
        return view('livewire.admin.image');
    }
}
