@extends('layouts.app')

@section('title', 'User Detail')

@section('content')
    <h1 class="h3 mb-3">User Detail</h1>

    <table class="table table-bordered bg-white" style="max-width: 600px;">
        <tr>
            <th style="width: 150px;">ID</th>
            <td>{{ $user->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $user->created_at->format('Y-m-d H:i') }}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{ $user->updated_at->format('Y-m-d H:i') }}</td>
        </tr>
    </table>

    <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
@endsection
