@extends('layouts.master')

@section('title') Edit Organization @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Platform @endslot
        @slot('title') Edit Organization @endslot
    @endcomponent

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('platform.organizations.update', $organization) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control" name="name" value="{{ old('name', $organization->name) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input class="form-control" name="slug" value="{{ old('slug', $organization->slug) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description">{{ old('description', $organization->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Logo</label>
                    <input class="form-control" type="file" name="logo_path">
                    @if($organization->logo_path)
                        <img src="{{ asset('storage/' . $organization->logo_path) }}" alt="Logo" width="60" class="mt-2">
                    @endif
                </div>

                <button class="btn btn-primary">Update Organization</button>
            </form>
        </div>
    </div>

@endsection
