@extends('livewire.user.index')
@section('content')
<div class="ps-5 pe-5 mt-5">
    <div id="BlogDetail" class="row">
        <div class="col-6 border-end">
            <h1 class="mb-4">Blogging</h1>
            <!-- Form to create the blog -->
            <form wire:submit.prevent="store">

                <!-- Beach -->
                <div class="mb-3">
                    <label for="beach" class="form-label fw-bold">Beach</label>
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
                    <label for="title" class="form-label fw-bold">Title</label>
                    <input type="text" id="title" wire:model.live="title" class="form-control"
                        placeholder="Enter blog title">
                </div>
                @error('title') <span class="error text-danger">{{ $message }}</span> @enderror

                <!-- Image -->
                <div class="mb-3">
                    <label for="image" class="form-label fw-bold">Image</label>
                    <input type="file" id="image" wire:model="thumbnail" class="form-control">
                    @error('image') <span class="error text-danger">{{ $message }}</span> @enderror
                    @if($thumbnail)
                        <img src="{{$thumbnail->temporaryUrl()}}" alt="" class="w-100 mt-2">
                    @elseif($thumbnailToEdit)
                        <img src="{{Storage::url($thumbnailToEdit)}}" alt="" class="w-100 mt-2">
                    @endif
                </div>

                <!-- Content -->
                <div class="mb-3">
                    <label for="content" class="form-label fw-bold">Content</label>
                    <textarea id="content" wire:model.live="content" class="form-control" rows="4"
                        placeholder="Enter blog content"></textarea>
                </div>
                @error('content') <span class="error text-danger">{{ $message }}</span> @enderror

                <!-- Sections -->
                <div class="mb-4">
                    <h1>Sections</h1>
                    @if(count($sections) === 0)
                        <p class="mb-3">No sections added yet.</p>
                    @else

                        @foreach($sections as $index => $section)



                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        <h3 class="mb-3">Section {{ $index + 1 }}</h3>
                                        <button type="button"
                                            class="btn btn-danger d-flex align-items-center justify-content-center"
                                            wire:click="removeSection({{ $index }})">
                                            <span class="material-symbols-outlined text-light">
                                                delete
                                            </span>
                                        </button>
                                    </div>

                                    <!-- Section Title -->
                                    <div class="mb-3">
                                        <label for="sections.{{ $index }}.title" class="form-label fw-bold">Section
                                            Title</label>
                                        <input type="text" wire:model.live="sections.{{ $index }}.title" class="form-control"
                                            placeholder="Enter section title">
                                    </div>

                                    <!-- Section Description -->
                                    <div class="mb-3">
                                        <label for="sections.{{ $index }}.description" class="form-label fw-bold">Section
                                            Description</label>
                                        <textarea wire:model.live="sections.{{ $index }}.description" class="form-control"
                                            rows="3" placeholder="Enter section description"></textarea>
                                    </div>

                                    <!-- Images -->
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Images</label>

                                        <!-- Hiển thị và chỉnh sửa các ảnh cũ -->
                                        @if (isset($section['oldImage']))
                                            @foreach($section['oldImage'] as $imageIndex => $image)
                                                <div class="input-group mb-2">
                                                    <!-- Input để chỉnh sửa ảnh cũ -->
                                                    <input type="file" wire:model="sections.{{ $index }}.oldImage.{{ $imageIndex }}"
                                                        class="form-control">
                                                    <button type="button"
                                                        class="btn btn-danger d-flex align-items-center justify-content-center"
                                                        wire:click="removeOldImage({{ $index }}, {{ $imageIndex }})">
                                                        <span class="material-symbols-outlined text-light">
                                                            delete
                                                        </span>
                                                    </button>
                                                    <!-- Hiển thị ảnh cũ -->
                                                    @if (is_string($image))
                                                        <img src="{{ Storage::url($image) }}" class="w-100 mb-2 mt-2" alt="Preview">
                                                    @elseif (is_object($image))
                                                        <img src="{{ $image->temporaryUrl() }}" class="w-100 mb-2 mt-2" alt="Preview">
                                                    @endif
                                                </div>
                                            @endforeach
                                        @endif

                                        <!-- Hiển thị các ảnh mới -->
                                        @if (isset($section['images']))
                                            @foreach($section['images'] as $imageIndex => $image)
                                                <div class="input-group mb-2">
                                                    <input type="file" wire:model="sections.{{ $index }}.images.{{ $imageIndex }}"
                                                        class="form-control">
                                                    <button type="button"
                                                        class="btn btn-danger d-flex align-items-center justify-content-center mt-2"
                                                        wire:click="removeImage({{ $index }}, {{ $imageIndex }})">
                                                        <span class="material-symbols-outlined text-light">
                                                            delete
                                                        </span>
                                                    </button>
                                                    @if (is_object($image))
                                                        <img src="{{ $image->temporaryUrl() }}" class="w-100 mb-2" alt="Preview">
                                                    @endif
                                                </div>
                                            @endforeach
                                        @endif

                                        <!-- Nút thêm ảnh mới -->
                                        <button type="button" class="btn btn-secondary w-100"
                                            wire:click="addImage({{ $index }})">Add Image</button>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    @endif
                    <button type="button" class="btn_primary_custom" wire:click="addSection">Add Section</button>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn_secondary_custom">Submit</button>
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
            <h1 class="mb-2 text-center">Preview</h1>
            <div class="BlogTitleContainer">
                <div class="BlogTitle text-center">{{ $title }}</div>
                @if ($title)
                    <div class="dateBlog text-center m-2">{{ \Carbon\Carbon::now()->format('M j Y') }}</div>
                @endif
            </div>
            @if($thumbnail)
                <img src="{{$thumbnail->temporaryUrl()}}" alt="" class="w-100">
            @elseif($thumbnailToEdit)
                <img src="{{Storage::url($thumbnailToEdit)}}" alt="" class="w-100">
            @endif

            <p class="my-5 fs-4 text-center text-wrap">{{ $content }}</p>
            @if(count($sections) > 0 && $sections[0]['title'] !== null)
                @foreach($sections as $section)
                    <div class="mb-3">
                        <h3>{{ $section['title'] }}</h3>
                        <p class="fs-5">{{ $section['description'] }}</p>
                        <div class="row">

                            @if (isset($section['oldImage']))
                                @foreach($section['oldImage'] as $imageIndex => $image)
                                    @if (is_string($image))
                                        <img src="{{ Storage::url($image) }}" class="w-100 mb-2 mt-2" alt="Preview">
                                    @elseif (is_object($image))
                                        <img src="{{ $image->temporaryUrl() }}" class="w-100 mb-2" alt="Preview">
                                    @endif
                                @endforeach

                            @endif

                            <!-- Hiển thị preview ảnh trong từng section -->
                            @if(($section['images'] !== null) && (count($section['images']) > 0))
                                @foreach($section['images'] as $image)
                                    @if (is_object($image) && method_exists($image, 'temporaryUrl'))
                                        <div class="col">
                                            <img src="{{ $image->temporaryUrl() }}" class="img_custom_beachBlog" alt="Preview">
                                        </div>
                                    @endif
                                @endforeach
                            @endif

                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection