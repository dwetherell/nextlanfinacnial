@extends('layouts.master')

@section('title') @lang('User Detail') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Platform @endslot
        @slot('title') User Detail @endslot
    @endcomponent

    <div class="card">
        <div class="card-body">
            <h5>{{ $user->name }}</h5>

            <p><strong>First Name :</strong> {{ $user->first_name }}</p>
            <p><strong>Last Name:</strong> {{ $user->first_name }}</p>

            <p><strong>Email:</strong> {{ $user->email }}</p>

            <p><strong>Roles:</strong>
                @foreach($user->getRoleNames() as $role)
                    <span class="badge bg-primary">{{ $role }}</span>
                @endforeach
            </p>
        </div>
    </div>

@endsection
