@extends('livewire.admin.index')
@section('content')
<section class="container">
    <header class="d-flex flex-column justify-content-center align-items-start gap-4 mb-5">
        <div class="d-flex flex-column justify-content-center align-items-start gap-1">
            <h1 class="text-5xl">Content</h1>
            <p class="text-secondary">
                Manage and create content for your beach destinations. You can add, edit, and delete contents here.
            </p>
        </div>
    </header>
    
    {{$this -> table}}
</section>
@endsection

