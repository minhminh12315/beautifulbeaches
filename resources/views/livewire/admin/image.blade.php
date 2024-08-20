@extends('livewire.admin.index')
@section('content')
<section class="container">
    <header class="d-flex flex-column justify-content-center align-items-start gap-4 mb-5">
        <div class="d-flex flex-column justify-content-center align-items-start gap-1">
            <h1 class="text-5xl">Images</h1>
            <p class="text-secondary">
                Manage and create images for your beach destinations. You can add, edit, and delete images here.
            </p>
        </div>
    </header>

    
    {{$this -> table}}

</section>
@endsection

