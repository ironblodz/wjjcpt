@extends('layouts.admin')

@section('title', 'Photos')

@section('content')
    <div class="mb-3">
        <a href="{{ route('admin.photos.create') }}" class="btn btn-primary">Add New Photo</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Event</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($photos as $photo)
                        <tr>
                            <td>{{ $photo->id }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->title }}" style="width: 100px; height: auto;">
                            </td>
                            <td>{{ $photo->title }}</td>
                            <td>{{ $photo->event_name }}</td>
                            <td>{{ $photo->category->name }}</td>
                            <td>
                                <a href="{{ route('admin.photos.edit', $photo) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.photos.destroy', $photo) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection