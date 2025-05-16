@extends('layouts.master')

@section('title') Create Employer @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Platform @endslot
        @slot('title') Create Employer @endslot
    @endcomponent

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('platform.employers.store') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Industry</label>
                    <input class="form-control" name="industry" value="{{ old('industry') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Contact Name</label>
                    <input class="form-control" name="contact_name" value="{{ old('contact_name') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Contact Email</label>
                    <input class="form-control" type="email" name="contact_email" value="{{ old('contact_email') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Contribution Amount</label>
                    <input class="form-control" type="number" step="0.01" name="contribution_amount_monthly" value="{{ old('contribution_amount_monthly') }}">
                </div>

                <button class="btn btn-primary">Create Employer</button>
            </form>
        </div>
    </div>

@endsection
