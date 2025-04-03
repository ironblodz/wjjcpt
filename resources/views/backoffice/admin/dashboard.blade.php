@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Categories</h5>
                    <p class="card-text">Manage your gallery categories.</p>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">View Categories</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Photos</h5>
                    <p class="card-text">Manage your gallery photos.</p>
                    <a href="{{ route('admin.photos.index') }}" class="btn btn-primary">View Photos</a>
                </div>
            </div>
        </div>
    </div>
@endsection