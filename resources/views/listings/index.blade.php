@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listings</h1>
    <a href="{{ route('listings.create') }}" class="btn btn-primary">Create Listing</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listings as $listing)
            <tr>
                <td>{{ $listing->id }}</td>
                <td>{{ $listing->name }}</td>
                <td>{{ $listing->latitude }}</td>
                <td>{{ $listing->longitude }}</td>
                <td>
                    <a href="{{ route('listings.edit', $listing->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('listings.destroy', $listing->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection