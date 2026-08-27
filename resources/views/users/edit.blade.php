@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <h1 class="h3 mb-3">Edit User</h1>

    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        @include('users._form', ['user' => $user])

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
