<?php

namespace App\Livewire\Admin;

use App\Models\Videos;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class Video extends Component
{
    use WithFileUploads;
    public $videos;
    public $title;
    public $description;
    public $path;
    public $videoToEdit;
    public $videoToDelete;
    public $distinctTypes;
    public $newtype = [];
    public $newtypeToAdd;
    public $type;
    public $videoPreview;
    public function mount()
    {
        $this->videos = Videos::all();
        $this->distinctTypes = Videos::distinct()->pluck('type');
        $this->newtype = [];
        Log::info($this->videos);
    }

    public function updated($propertyname){
        $this->validateOnly($propertyname, [
            'title' =>'required|string|min:10',
            'description' =>'required|string|max:255',
            'path' =>'required|mimes:mp4|max:102400',
            'newtype' =>'required|string ',
            'newtypeToAdd' =>'required|string|min:3|max:255',
            'videoPreview' =>'required|image|mimes:jpeg,png,jpg|max:2048',
            'type' =>'required|string|min:3|max:255'
        ],[
            'title.required' => 'The title field is required.',
            'description.required' => 'The description field is required.',
            'path.required' => 'The path field is required.',
            'path.mimes' => 'The path must be a video file (mp4, mov, ogg).',
            'path.max' => 'The path file is too large (max 100MB).',
            'title.min' => 'The title field is not enought characters',
            'description.max' => 'The description field is too long (max 255 characters).',
            'newtype.required' => 'The new type field is required.',
            'type.required' => 'The type field is required.'

        ]);
    }
    public function toggleModalAdd()
    {
        $this->dispatch('toggleModalAdd')->self();
        $this -> title = '';
        $this -> description = '';
        $this -> path = null;
        $this -> type = null;
    }

    public function newvideotype()
    {
        if (in_array($this->newtypeToAdd, $this->newtype)) {
            flash()->info('The video type already exists.');
            $this->newtypeToAdd = ''; 
        } else {
            $this->newtype[] = $this->newtypeToAdd;
            $this->newtypeToAdd = ''; 
            flash()->success('Added new type video successfully.');
        }
    }

    public function saveVideo(){
        Log::info($this->path->temporaryUrl());
    }
    public function showEditVideo($id){
        $video = Videos::find($id);
        if($video){
            $this->videoToEdit = Videos::find($id);
            $this -> title = $video->title;
            $this -> description = $video->description;
            $this -> type = $video->type;
            $this->dispatch('toggleModalEdit')->self();
        }
    }

    public function showDeleteVideo($id){
        $video = Videos::find($id);
        if($video){
            $this->videoToDelete = $video;
            $this->dispatch('toggleModalDelete')->self();
        }
    }

    public function editVideo(){
        $this->videoToEdit->title = $this->title;
        $this->videoToEdit->description = $this->description;
        $this->videoToEdit->type = $this->type;
        $this->videoToEdit->save();
        flash()->success('Video updated successfully.');
        $this->dispatch('closeModal')->self();
        $this->videos = Videos::all();
        $this->title = '';
        $this->description = '';
        $this->type = null;
        $this->videoToEdit = null;
        $this->videoToDelete = null;
        $this->newtype = [];
        $this->newtypeToAdd = '';
    }

    public function deleteVideo(){
        if($this->videoToDelete){
            $this->videoToDelete->delete();
            flash()->success('Video deleted successfully.');
            $this->dispatch('closeModal')->self();
            $this->videos = Videos::all();
        }
    }
    public function render()
    {
        return view('livewire.admin.video');
    }
}
