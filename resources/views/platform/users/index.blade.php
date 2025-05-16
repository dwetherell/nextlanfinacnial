@extends('layouts.master')

@section('title') @lang('Users') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Platform @endslot
        @slot('title') Users @endslot
    @endcomponent

    <div class="card">
        <div class="card-body">
            <h5>Users</h5>

            <table class="table table-striped mb-0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Roles</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $index => $user)
                    <tr>
                        <th scope="row">{{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}</th>
                        <td>{{ $user->first_name ?? '-' }}</td>
                        <td>{{ $user->last_name ?? '-' }}</td>
                        <td>{{ '@' . Str::slug($user->name, '_') }}</td>
                        <td>
                            @foreach($user->getRoleNames() as $role)
                                <span class="badge bg-primary">{{ $role }}</span>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('platform.users.edit', $user) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form method="POST" action="{{ route('platform.users.destroy', $user) }}" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this user?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                {{ $users->links() }}
            </div>
        </div>
    </div>

@endsection
