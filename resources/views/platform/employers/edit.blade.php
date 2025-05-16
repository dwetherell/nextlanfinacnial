@extends('layouts.master')

@section('title') Edit Employer @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Platform @endslot
        @slot('title') Edit Employer @endslot
    @endcomponent

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('platform.employers.update', $employer) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control" name="name" value="{{ old('name', $employer->name) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Industry</label>
                    <input class="form-control" name="industry" value="{{ old('industry', $employer->industry) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Contact Name</label>
                    <input class="form-control" name="contact_name" value="{{ old('contact_name', $employer->contact_name) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Contact Email</label>
                    <input class="form-control" type="email" name="contact_email" value="{{ old('contact_email', $employer->contact_email) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Contribution Amount</label>
                    <input class="form-control" type="number" step="0.01" name="contribution_amount_monthly" value="{{ old('contribution_amount_monthly', $employer->contribution_amount_monthly) }}">
                </div>

                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

@endsection
