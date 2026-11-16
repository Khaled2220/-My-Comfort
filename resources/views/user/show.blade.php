@extends('layouts.main')

@section('title', 'User Details')

@section('content')

<div class="user-details-page">

    <div class="page-header">
        <h2>User Details</h2>
    </div>
    <br>

    <div class="form-container">

        <div class="form-group">
            <label>ID:</label>
            <p>{{ $user->id }}</p>

            <br>

            <label>Full Name:</label>
            <p>{{ $user->full_name }}</p>

            <br>

            <label>Email:</label>
            <p>{{ $user->email }}</p>

            <br>

            <label>Phone:</label>
            <p>{{ $user->phone ?? 'Not provided' }}</p>

            <br>

            <label>Address:</label>
            <p>{{ $user->address ?? 'Not provided' }}</p>
  
            <br>

            <label>User Type:</label>
            <p>{{ $user->isAdmin() ? 'Admin' : 'User' }}</p>
  
            <br>

            <label>Created At:</label>
            <p>{{ $user->created_at?->format('Y-m-d H:i') ?? 'N/A' }}</p>

            <br>

            <label>Last Updated:</label>
            <p>{{ $user->updated_at?->format('Y-m-d H:i') ?? 'N/A' }}</p>
        </div>
        <br>

        <div class="form-actions">
            @can('update', $user)
                <a href="{{ route('user.edit', $user) }}" class="btn edit-btn">
                    Edit User
                </a>
            @endcan

            <a href="{{ route('user.index') }}" class="btn btn-back">
                Back to Users
            </a>
        </div>
    </div>
</div>
@endsection
