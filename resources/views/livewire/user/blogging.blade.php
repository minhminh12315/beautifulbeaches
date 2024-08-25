@extends('livewire.user.index')
@section('content')
<div class="ps-5 pe-5 mt-5">
    <div class="row">
        <div class="col-6">
            <h1 class="mb-4">Blogging</h1>
            <!-- Form to create the blog -->
            <form wire:submit.prevent="store">

                <!-- Beach -->
                <div class="mb-3">
                    <label for="beach" class="form-label">Beach</label>
                    <select id="beach" wire:model="beach_id" class="form-select">
                        <option value="" selected>Please choose a beach</option>
                        @if($beaches)
                            @foreach($beaches as $beach)
                                <option value="{{ $beach->id }}">{{ $beach->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                @error('beach_id') <span class="error text-danger">{{ $message }}</span> @enderror

                <!-- Title -->
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" wire:model.live="title" class="form-control"
                        placeholder="Enter blog title">
                </div>
                @error('title') <span class="error text-danger">{{ $message }}</span> @enderror

                <!-- Content -->
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea id="content" wire:model.live="content" class="form-control" rows="4"
                        placeholder="Enter blog content"></textarea>
                </div>
                @error('content') <span class="error text-danger">{{ $message }}</span> @enderror

                <!-- Sections -->
                <div class="mb-4">
                    <h2 class="h4">Sections</h2>
                    @if(count($sections) === 0)
                        <p class="mb-3">No sections added yet.</p>
                    @else

                        @foreach($sections as $index => $section)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h3 class="h5 mb-3">Section {{ $index + 1 }}</h3>

                                    <!-- Section Title -->
                                    <div class="mb-3">
                                        <label for="sections.{{ $index }}.title" class="form-label">Section Title</label>
                                        <input type="text" wire:model.live="sections.{{ $index }}.title" class="form-control"
                                            placeholder="Enter section title">
                                    </div>

                                    <!-- Section Description -->
                                    <div class="mb-3">
                                        <label for="sections.{{ $index }}.description" class="form-label">Section
                                            Description</label>
                                        <textarea wire:model.live="sections.{{ $index }}.description" class="form-control"
                                            rows="3" placeholder="Enter section description"></textarea>
                                    </div>

                                    <!-- Images -->
                                    <div class="mb-3">
                                        <label class="form-label">Images</label>
                                        @foreach($section['images'] as $imageIndex => $image)
                                            <div class="input-group mb-2">
                                                <input type="file" wire:model="sections.{{ $index }}.images.{{ $imageIndex }}"
                                                    class="form-control">
                                                <button type="button" class="btn btn-danger"
                                                    wire:click="removeImage({{ $index }}, {{ $imageIndex }})">Remove</button>
                                            </div>

                                            @if (is_object($image))
                                                <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail mb-2" alt="Preview">
                                            @endif
                                        @endforeach
                                        <button type="button" class="btn btn-secondary" wire:click="addImage({{ $index }})">Add
                                            Image</button>
                                    </div>

                                    <button type="button" class="btn btn-danger" wire:click="removeSection({{ $index }})">Remove
                                        Section</button>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <button type="button" class="btn btn-primary" wire:click="addSection">Add Section</button>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-success">Submit</button>
                @if(session()->has('message'))
                    <div class="alert alert-success mt-3">{{ session('message') }}</div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>

        <div class="col-6">
            <h1 class="mb-4">Preview</h1>
            <h2>{{ $title }}</h2>
            <p>{{ $content }}</p>
            @if(count($sections) > 0 && $sections[0]['title'] !== null)
                <div class="card mb-3">
                    <div class="card-body">
                        @foreach($sections as $section)
                            <h3 class="h5">{{ $section['title'] }}</h3>
                            <p>{{ $section['description'] }}</p>
                            <div class="row">
                                @if(($section['images'] !== null) && (count($section['images']) > 0))
                                    @foreach($section['images'] as $image)
                                        @if (is_object($image) && method_exists($image, 'temporaryUrl'))
                                            <div class="col-{{ 12 / min(3, count($section['images'])) }} mb-3">

                                                <img src="{{ $image->temporaryUrl() }}" class="img-fluid img-thumbnail" alt="Preview">
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection