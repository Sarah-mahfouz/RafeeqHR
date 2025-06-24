@extends('layouts.public')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div style="
    background: linear-gradient(to right, #2c2c2c, #1a1a1a);
    border-left: 8px solid #d4b773;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    padding: 20px 0;
">
                        <h1 style="
        color: #fff;
        text-transform: capitalize;
        padding-left: 24px;
        font-weight: 600;
        font-size: 30px;
        letter-spacing: 1px;
    ">
                            Document Details
                        </h1>
                    </div>

                </div>
                <div class="card-body px-4 pb-2">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5 class="text-black">Document Title:</h5>
                            <p>{{ $document->title }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-black">Document Type:</h5>
                            <p>{{ $document->document_type->name }}</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5 class="text-black">Uploaded By:</h5>
                            <p>{{ $document->user->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-black">Uploaded On:</h5>
                            <p>{{ $document->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5 class="text-black">Status:</h5>
                            <p>
                                @if($document->status == 'pending')
                                <span class="badge bg-warning">Pending</span>
                                @elseif($document->status == 'approved')
                                <span class="badge bg-success">Approved</span>
                                @elseif($document->status == 'rejected')
                                <span class="badge bg-danger">Rejected</span>
                                @endif
                            </p>
                        </div>
                        @if($document->expiry_date)
                        <div class="col-md-6">
                            <h5 class="text-black">Expiry Date:</h5>
                            <p>{{ $document->expiry_date->format('d/m/Y') }}</p>
                        </div>
                        @endif
                    </div>

                    @if($document->notes)
                    <div class="row mb-4">
                        <div class="col-12">
                            <h5 class="text-black">Notes:</h5>
                            <p>{{ $document->notes }}</p>
                        </div>
                    </div>
                    @endif

                    

                    <div class="row mb-0">
                        <div class="col-md-12">
                            <a href="{{ route('docs.index') }}" class="btn btn-gold">Back to List</a>
                            @if($document->status == 'pending')
                            <a href="{{ route('docs.edit', $document->id) }}" class="btn btn-black">Edit</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --white: #ffffff;
        --black: #000000;
        --light-black: #212121;
        --gold: #d4b773;
        --light-gold: #e8d7a8;
        --dark-gold: #b8a05c;
        --gray: #f5f5f5;
        --dark-gray: #e0e0e0;
    }

    .btn-gold {
        background-color: var(--gold);
        color: var(--white);
        border-color: var(--gold);
        transition: all 0.3s ease;
    }

    .btn-gold:hover {
        background-color: var(--white);
        color: var(--gold);
        border-color: var(--gold);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-black {
        background-color: var(--black);
        color: var(--white);
        border-color: var(--black);
        transition: all 0.3s ease;
    }

    .btn-black:hover {
        background-color: var(--white);
        color: var(--black);
        border-color: var(--black);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .bg-black {
        background-color: var(--black);
        color: var(--white);
    }

    .bg-gold {
        background-color: var(--gold);
        color: var(--white);
    }

    .bg-light-black {
        background-color: var(--light-black);
        color: var(--white);
    }

    .text-black {
        color: var(--black);
        font-weight: 600;
    }

    .card {
        background-color: var(--white);
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .card-body p {
        font-size: 1rem;
        color: var(--light-black);
        padding-left: 5px;
        border-left: 3px solid var(--gold);
        margin-top: 5px;
    }

    .badge {
        padding: 8px 12px;
        font-size: 0.8rem;
        font-weight: 500;
        border-radius: 4px;
    }

    .bg-warning {
        background-color: var(--gold) !important;
        color: var(--white) !important;
    }

    .bg-success {
        background-color: var(--dark-gold) !important;
        color: var(--white) !important;
    }

    .bg-danger {
        background-color: #8b6d3b !important;
        color: var(--white) !important;
    }

    .border-radius-lg {
        border-radius: 8px;
    }
</style>
@endsection