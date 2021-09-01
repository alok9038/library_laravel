@extends('layouts.base')
@section('content')
    <div class="row row-cols-1 container mx-auto mt-3 row-cols-lg-3">
        <div class="col">
            <div class="card border-0 bg-info py-3 bg-opacity-10 shadow-sm" style="border-radius: 15px">
                <div class="card-body text-info">
                    <h3>Total Books</h3>
                    <h5 class="mt-3">400 + </h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 bg-danger  py-3 bg-opacity-10 shadow-sm" style="border-radius: 15px">
                <div class="card-body text-danger">
                    <h3>Total Books</h3>
                    <h5 class="mt-3">400 + </h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 bg-success py-3  bg-opacity-10 shadow-sm" style="border-radius: 15px">
                <div class="card-body text-success">
                    <h3>Active Order</h3>
                    <h5 class="mt-3">400 + </h5>
                </div>
            </div>
        </div>
    </div>
@endsection
