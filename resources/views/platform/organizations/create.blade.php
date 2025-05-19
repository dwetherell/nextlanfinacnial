@extends('layouts.master')

@section('title') Create Organization @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Platform @endslot
        @slot('title') Create Organization @endslot
    @endcomponent

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('platform.organizations.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Slug (optional)</label>
                    <input class="form-control" name="slug" value="{{ old('slug') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description">{{ old('description') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Logo (optional)</label>
                    <input class="form-control" type="file" name="logo_path">
                </div>

                <button class="btn btn-primary">Create Organization</button>
            </form>
        </div>
    </div>

@endsection
