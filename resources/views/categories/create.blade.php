@extends('layouts.app')

@section('title', 'New Category')

@section('content')
    <h1 class="h3 mb-3">New Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        @include('categories._form')

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
