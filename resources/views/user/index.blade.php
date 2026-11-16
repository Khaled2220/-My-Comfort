@extends('layouts.main')

@section('title', 'Users List')

@section('content')

<div class="users-page">

    {{-- Success Message --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Error Message --}}
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    {{-- Page Header --}}
    <div class="page-header">

        <h2>Users List</h2>

        @can('create', \App\Models\User::class)
            <a href="{{ route('user.create') }}" class="btn add-btn">
                Add User
            </a>
        @endcan

    </div>

    {{-- Users Table --}}
    <div class="table-responsive">

        <table class="table table-bordered table-striped users-table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($users as $user)

                    <tr>

                        <td>{{ $user->id }}</td>

                        <td>{{ $user->full_name }}</td>

                        <td>{{ $user->email }}</td>

                        <td>
                            {{ $user->isAdmin() ? 'Admin' : 'User' }}
                        </td>

                        <td>
                            {{ $user->created_at?->format('Y-m-d') }}
                        </td>

                        <td>

                            <div class="action-buttons">

                                {{-- Show Button --}}
                                @can('view', $user)
                                    <a
                                        href="{{ route('user.show', $user) }}"
                                        class="btn show-btn">
                                        Show
                                    </a>
                                @endcan

                                {{-- Edit Button --}}
                                @can('update', $user)
                                    <a
                                        href="{{ route('user.edit', $user) }}"
                                        class="btn edit-btn">
                                        Edit
                                    </a>
                                @endcan

                                {{-- Delete Button --}}
                                @can('delete', $user)

                                    <form
                                        action="{{ route('user.destroy', $user) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this user?')">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn delete-btn">
                                            Delete
                                        </button>

                                    </form>

                                @endcan

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="6" class="text-center">
                            No Users Found
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection
