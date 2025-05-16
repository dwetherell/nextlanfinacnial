@extends('layouts.master')

@section('title') @lang('Edit User') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Platform @endslot
        @slot('title') Edit User @endslot
    @endcomponent

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('platform.users.update', $user) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input class="form-control" name="first_name" value="{{ old('first_name', $user->first_name) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input class="form-control" name="last_name" value="{{ old('last_name', $user->last_name) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control" name="name" value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" name="email" value="{{ old('email', $user->email) }}" required>
                </div>

                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

@endsection
