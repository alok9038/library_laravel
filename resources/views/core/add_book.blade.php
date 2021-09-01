@extends('layouts.base')
@section('page_title','Manage books')
@section('content')
    <div class="container mt-4 mx-auto">
        <div class="card border-0 shadow-sm">
            <div class="card-header boder-0 bg-transparent h5">Add Book</div>
            <div class="card-body">
                @livewire('add-book')
            </div>
        </div>
    </div>
@endsection
