<?php

namespace App\Livewire\Admin;

use App\Models\Texts;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Content extends Component
{
    public $contents;
    public $distinctTypes;

    public $content_text;
    public $content_type;

    public $newtypeToAdd;
    public $contentIdToDelete;

    public $contentIdToEdit;
    public function mount()
    {
        $this->contents = Texts::all();
        $this->distinctTypes = Texts::distinct()->pluck('type');
    }
    public function toggleModalAdd()
    {
        $this->dispatch('toggleModalAdd')->self();
        $this->content_text = '';
        $this->content_type = '';
        $this->distinctTypes = Texts::distinct()->pluck('type');
    }
    public function newcontenttype()
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
        Log::info($this->content_type);
        Log::info($this->content_text);

        $this->validate([
            'content_text' => 'required|string',
            'content_type' => 'required|string',
        ], [
            'content_text.required' => 'The content text field is required.',
            'content_type.required' => 'The content type field is required.',
        ]);

        $content = new Texts();
        $content->content = $this->content_text;
        $content->type = $this->content_type;
        $content->save();

        $this->dispatch('closeModal');
        $this->content_text = '';
        $this->content_type = '';
        $this->contents = Texts::all();
        $this->distinctTypes = Texts::distinct()->pluck('type');

        flash()->success('Content added successfully.');
    }

    public function showDeleteContent($id)
    {
        $this->dispatch('toggleModalDelete')->self();
        $this->contentIdToDelete = $id;
    }

    public function confirmDelete()
    {
        if ($this->contentIdToDelete) {
            $content = Texts::find($this->contentIdToDelete);
            if ($content) {
                $content->delete();
                $this->contents = Texts::all();
                flash()->success('Content deleted successfully');
                $this->dispatch('closeModal')->self();
            } else {
                flash()->error('Content not found');
            }
        } else {
            flash()->error('No content selected');
        }
    }
    public function showEditContent($id) {
        $content = Texts::find($id);
        if($content){
            $this -> content_text = $content->content;
            $this -> content_type = $content->type;
            $this->distinctTypes = Texts::distinct()->pluck('type');
            $this -> contentIdToEdit = $id;
            $this -> dispatch('toggleModalEdit');
        }
        else{
            flash()->error('Content not found.');
            $this->dispatch('closeModal')->self();
        }
    }

    public function editContent() {

        $this->validate([
            'content_text' => 'required|string',
            'content_type' => 'required|string',
        ], [
            'content_text.required' => 'The content text field is required.',
            'content_type.required' => 'The content type field is required.',
        ]);
        $content = Texts::find($this->contentIdToEdit);
        if($content){
            $content->content = $this->content_text;
            $content->type = $this->content_type;
            $content->save();
            $this->dispatch('closeModal')->self();
            $this->content_text = '';
            $this->content_type = '';
            $this->contents = Texts::all();
            $this->distinctTypes = Texts::distinct()->pluck('type');
            flash()->success('Content edited successfully.');
            $this->contentIdToEdit = null;
        }
        else{
            flash()->error('Content not found.');
            $this->dispatch('closeModal')->self();
        }

    }
    public function render()
    {
        return view('livewire.admin.content');
    }
}
