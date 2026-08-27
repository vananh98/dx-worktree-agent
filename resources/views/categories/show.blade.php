@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <h1 class="h3 mb-3">{{ $category->name }}</h1>

    <table class="table table-bordered w-auto">
        <tr>
            <th>Slug</th>
            <td>{{ $category->slug }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $category->description ?? '-' }}</td>
        </tr>
        <tr>
            <th>Parent</th>
            <td>{{ $category->parent?->name ?? '-' }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $category->is_active ? 'Active' : 'Inactive' }}</td>
        </tr>
    </table>

    <a href="{{ route('categories.edit', $category) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to list</a>
@endsection
