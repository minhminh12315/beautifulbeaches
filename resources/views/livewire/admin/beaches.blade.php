@extends('livewire.admin.index')
@section('content')
    <section>
        <h1>Dashboard</h1>
        {{$this -> table}}
    </section>
@endsection