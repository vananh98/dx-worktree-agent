@extends('layouts.app')

@section('title', 'Add User')

@section('content')
    <h1 class="h3 mb-3">Add User</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        @include('users._form')

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
