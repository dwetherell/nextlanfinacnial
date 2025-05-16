@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') Starter Page @endslot
    @endcomponent

    <div class="card">
        <div class="card-body">
            <h5>Welcome, {{ Auth::user()->name }}</h5>

            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>

            <p><strong>Role(s):</strong>
                @foreach(Auth::user()->getRoleNames() as $role)
                    <span class="badge bg-primary">{{ $role }}</span>
                @endforeach
            </p>
        </div>
    </div>

@endsection
