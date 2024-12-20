@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Listing</h1>
    <form action="{{ route('listings.update', $listing->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $listing->name }}" required>
        </div>
        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input type="text" name="latitude" class="form-control" value="{{ $listing->latitude }}" required>
        </div>
        <div class="form-group">
            <label for="longitude">Longitude</label>
            <input type="text" name="longitude" class="form-control" value="{{ $listing->longitude }}" required>
        </div>
        <div class="form-group">
            <label for="user_id">User ID</label>
            <input type="text" name="user_id" class="form-control" value="{{ $listing->user_id }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection