@extends('layouts.master')

@section('title') Organizations @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Platform @endslot
        @slot('title') Organizations @endslot
    @endcomponent

    <div class="card">
        <div class="card-body">
            <h5>Organizations</h5>

            <a href="{{ route('platform.organizations.create') }}" class="btn btn-sm btn-success mb-3">+ Add Organization</a>

            <table class="table table-striped mb-0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Logo</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($organizations as $index => $organization)
                    <tr>
                        <th scope="row">{{ $loop->iteration + ($organizations->currentPage() - 1) * $organizations->perPage() }}</th>
                        <td><a href="{{ route('platform.organizations.show', $organization) }}">{{ $organization->name }}</a></td>
                        <td>{{ $organization->slug }}</td>
                        <td>{{ Str::limit($organization->description, 50) }}</td>
                        <td>
                            @if($organization->logo_path)
                                <img src="{{ asset('storage/' . $organization->logo_path) }}" alt="Logo" width="40">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('platform.organizations.edit', $organization) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form method="POST" action="{{ route('platform.organizations.destroy', $organization) }}" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this organization?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                {{ $organizations->links() }}
            </div>
        </div>
    </div>

@endsection
