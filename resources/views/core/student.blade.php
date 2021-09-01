@extends('layouts.base')
@section('page_title','Manage books')
@section('content')
    <div class="container mt-4 mx-auto">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <table class="table table-hover table-borderless">
                    <tr>
                        <th>#id</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>ISBN</th>
                        <th>Price</th>
                        <th>Edition</th>
                        <th>Language</th>
                        <th>Action</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
