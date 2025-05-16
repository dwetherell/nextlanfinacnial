@extends('layouts.master')

@section('title') Employer Detail @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Platform @endslot
        @slot('title') Employer @endslot
    @endcomponent

    <div class="card">
        <div class="card-body">
            <h5>{{ $employer->name }}</h5>

            <p><strong>Industry:</strong> {{ $employer->industry ?? '-' }}</p>
            <p><strong>Contact:</strong> {{ $employer->contact_name }} ({{ $employer->contact_email }})</p>
            <p><strong>Contribution:</strong> ${{ number_format($employer->contribution_amount_monthly ?? 0, 2) }}</p>
        </div>
    </div>

@endsection
