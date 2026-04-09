@extends('layouts.admin.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Submission #{{ $submission->id }}</h5>
            <a href="{{ route('admin.contact-submissions.index') }}" class="btn btn-sm btn-label-primary">Back</a>
        </div>
        <div class="card-body">
            <div class="row g-4">
                <div class="col-md-6">
                    <h6>Name</h6>
                    <p>{{ $submission->name }}</p>
                </div>
                <div class="col-md-6">
                    <h6>Email</h6>
                    <p>{{ $submission->email }}</p>
                </div>
                <div class="col-12">
                    <h6>Subject</h6>
                    <p>{{ $submission->subject }}</p>
                </div>
                <div class="col-12">
                    <h6>Message</h6>
                    <p class="mb-0" style="white-space: pre-wrap;">{{ $submission->message }}</p>
                </div>
                <div class="col-md-6">
                    <h6>IP Address</h6>
                    <p>{{ $submission->ip_address ?: 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <h6>Submitted</h6>
                    <p>{{ $submission->created_at->format('d M Y h:i A') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
