@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
    <h1 class="h3 mb-3">Edit Category</h1>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        @include('categories._form')

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
