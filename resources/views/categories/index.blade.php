@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Categories</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">New Category</a>
    </div>

    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Parent</th>
                <th>Active</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->parent?->name ?? '-' }}</td>
                    <td>
                        <span class="badge {{ $category->is_active ? 'bg-success' : 'bg-secondary' }}">
                            {{ $category->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td class="text-end">
                        <a href="{{ route('categories.show', $category) }}" class="btn btn-sm btn-outline-secondary">View</a>
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this category?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No categories found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $categories->links() }}
@endsection
