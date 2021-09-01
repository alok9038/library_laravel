@extends('layouts.base')
@section('page_title','Add Entry')
@section('content')
    <div class="container mt-4 mx-auto">
        <div class="card border-0 shadow-sm">
            <div class="card-header boder-0 bg-transparent h5">Add Entry Page</div>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control shadow-none @error('title')  is-invalid @enderror">
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="author">Author</label>
                            <input type="text" name="author" id="author" class="form-control shadow-none @error('author')  is-invalid @enderror">
                        </div>
                        <div class="mb-3 col">
                            <label for="edition">Edition</label>
                            <input type="text" name="edition" id="edition" class="form-control shadow-none @error('edition')  is-invalid @enderror">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="language">Language</label>
                        <input type="text" name="language" id="language" class="form-control shadow-none @error('language')  is-invalid @enderror">
                    </div>
                    <div class="mb-3">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" class="form-control shadow-none @error('price')  is-invalid @enderror">
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="nop">No of pages</label>
                            <input type="text" name="nop" id="nop" class="form-control shadow-none @error('nop')  is-invalid @enderror">
                        </div>
                        <div class="mb-3 col">
                            <label for="isbn">ISBN</label>
                            <input type="text" name="isbn" id="isbn" class="form-control shadow-none @error('isbn')  is-invalid @enderror">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-dark float-end shadow-none">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
