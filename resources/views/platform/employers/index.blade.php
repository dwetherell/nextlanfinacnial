@extends('layouts.master')

@section('title') Employers @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Platform @endslot
        @slot('title') Employers @endslot
    @endcomponent

    <div class="card">
        <div class="card-body">
            <h5>Employers</h5>

            <a href="{{ route('platform.employers.create') }}" class="btn btn-sm btn-success mb-3">+ Add Employer</a>

            <table class="table table-striped mb-0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Industry</th>
                    <th>Contact</th>
                    <th>Contribution</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employers as $index => $employer)
                    <tr>
                        <th scope="row">{{ $loop->iteration + ($employers->currentPage() - 1) * $employers->perPage() }}</th>
                        <td><a href="{{ route('platform.employers.show', $employer) }}">{{ $employer->name }}</a></td>
                        <td>{{ $employer->industry ?? '-' }}</td>
                        <td>{{ $employer->contact_name ?? '-' }}<br><small>{{ $employer->contact_email }}</small></td>
                        <td>${{ number_format($employer->contribution_amount_monthly ?? 0, 2) }}</td>
                        <td>
                            <a href="{{ route('platform.employers.edit', $employer) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form method="POST" action="{{ route('platform.employers.destroy', $employer) }}" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this employer?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                {{ $employers->links() }}
            </div>
        </div>
    </div>

@endsection
