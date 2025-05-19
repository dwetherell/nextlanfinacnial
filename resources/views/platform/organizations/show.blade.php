@extends('layouts.master')

@section('title') View Organization @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Platform @endslot
        @slot('title') Organization Details @endslot
    @endcomponent

    <div class="card">
        <div class="card-body">
            <h5>{{ $organization->name }}</h5>
            <p><strong>Slug:</strong> {{ $organization->slug }}</p>
            <p><strong>Description:</strong> {{ $organization->description }}</p>

            @if($organization->logo_path)
                <p><strong>Logo:</strong><br>
                    <img src="{{ asset('storage/' . $organization->logo_path) }}" width="120">
                </p>
            @endif
        </div>
    </div>

@endsection
