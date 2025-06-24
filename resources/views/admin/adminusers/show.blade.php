@extends('layouts.admin')
@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="m-0 text-dark">User Details</h3>
            <a href="{{ route('all_users') }}" class="btn btn-outline-dark btn-sm">Back to Users</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-header header-dark">
                <h5 id="a" class="mb-0">Employee Information</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 text-center mb-4 mb-md-0">
                        <div class="profile-image-container mb-3">
                            <img src="{{ asset($user->profile_picture) }}" alt="User Image" class="user-image">
                        </div>
                        <h5 class="text-dark">User ID</h5>
                        <p class="text-muted mb-0">{{$user->id}}</p>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6 info-section">
                                <div class="info-label">Name</div>
                                <div class="info-value">{{ $user->name }}</div>
                            </div>
                            <div class="col-md-6 info-section">
                                <div class="info-label">Email</div>
                                <div class="info-value">{{$user->email}}</div>
                            </div>
                            <div class="col-md-6 info-section">
                                <div class="info-label">Phone</div>
                                <div class="info-value">{{ $user->phone }}</div>
                            </div>
                            <div class="col-md-6 info-section">
                                <div class="info-label">Salary</div>
                                @if (Auth::guard('admin')->user()->role =='hr')
                                <div class="info-value">{{ $user->salary }}</div>
                                @else
                                <div class="info-value">****</div>
                                @endif

                            </div>
                            <div class="col-md-6 info-section">
                                <div class="info-label">Department</div>
                                <div class="info-value">{{ $user->department->name }}</div>
                            </div>
                            <div class="col-md-6 info-section">
                                <div class="info-label">Joined Date</div>
                                <div class="info-value">{{ $user->created_at }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white d-flex justify-content-end">
    <a href="{{ route('admin.edit_user', ['id' => $user->id]) }}" class="btn btn-warning me-2 equal-width-btn">Edit</a>
    <form method="POST" action="{{ route('admin.user_softdelete', ['id' => $user->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger equal-width-btn">Delete</button>
    </form>
</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection

<style>
    /* Main color scheme - Golden theme */
    :root {
        --primary-golden: #d4b773;
        --golden-dark: #b8a05f;
        --golden-darker: #9c8948;
        --golden-light: #e6d198;
        --golden-lighter: #f5f0e6;
        --text-dark: #8b7355;
        --text-light: #6f5a42;
    }

    body {
        background: linear-gradient(135deg, #f5f0e6, #e6d198);
        min-height: 100vh;
    }

    .card {
        border: 2px solid var(--golden-light) !important;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(212, 183, 115, 0.2) !important;
    }

    .card-header.header-dark {
        background: linear-gradient(135deg, #d4b773, #b8a05f);
        color: white !important;
        padding: 15px 20px;
        border-bottom: 2px solid var(--golden-dark);
    }

    .card-body {
        padding: 25px;
        background-color: var(--golden-lighter);
    }

    /* Profile image styling */
    .profile-image-container {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto;
        border: 4px solid var(--primary-golden);
        padding: 4px;
        background: linear-gradient(135deg, #d4b773, #b8a05f);
        box-shadow: 0 4px 15px rgba(212, 183, 115, 0.3);
    }

    .user-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid white;
    }

    /* Information sections */
    .info-section {
        margin-bottom: 18px;
        padding: 15px;
        border-radius: 8px;
        background: white;
        border: 2px solid var(--golden-light);
        box-shadow: 0 2px 8px rgba(212, 183, 115, 0.1);
        transition: all 0.3s ease;
    }

    .info-section:hover {
        border-color: var(--primary-golden);
        box-shadow: 0 4px 12px rgba(212, 183, 115, 0.2);
        transform: translateY(-2px);
    }

    .info-label {
        font-size: 14px;
        font-weight: 700;
        color: var(--golden-darker);
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .info-value {
        font-size: 16px;
        color: var(--text-dark);
        font-weight: 500;
    }

    /* Button styling */
    .btn-warning {
        background: linear-gradient(135deg, #d4b773, #b8a05f) !important;
        border: 2px solid var(--golden-dark) !important;
        color: white !important;
        font-weight: 600;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .btn-warning:hover {
        background: linear-gradient(135deg, #b8a05f, #9c8948) !important;
        border-color: var(--golden-darker) !important;
        color: white !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(212, 183, 115, 0.3);
    }

    .btn-danger {
        background: linear-gradient(135deg, #9c8948, #8b7355) !important;
        border: 2px solid var(--text-light) !important;
        color: white !important;
        font-weight: 600;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .btn-danger:hover {
        background: linear-gradient(135deg, #8b7355, #6f5a42) !important;
        border-color: #5d4936 !important;
        color: white !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(139, 115, 85, 0.3);
    }

    .btn-outline-dark {
        color: var(--text-dark) !important;
        border: 2px solid var(--primary-golden) !important;
        background: transparent;
        font-weight: 600;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .btn-outline-dark:hover {
        background: var(--primary-golden) !important;
        color: white !important;
        border-color: var(--golden-dark) !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(212, 183, 115, 0.3);
    }

    /* Card footer */
    .card-footer {
        border-top: 2px solid var(--golden-light) !important;
        padding: 15px 20px;
        background: linear-gradient(135deg, #f5f0e6, #e6d198) !important;
    }

    /* Text colors */
    .text-dark {
        color: var(--text-dark) !important;
        font-weight: 600;
    }

    .text-muted {
        color: var(--golden-darker) !important;
        font-weight: 500;
    }

    .equal-width-btn {
        min-width: 100px;
        text-align: center;
        padding: 10px 20px;
        font-size: 14px;
        font-weight: 600;
    }

    /* Optional: Make the form and button display as inline elements so spacing works correctly */
    .card-footer form {
        display: inline-block;
        margin: 0;
    }

    #a {
        color: white !important;
        font-weight: 600;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    }

    h3 {
        color: var(--text-dark) !important;
        font-weight: 700;
        text-shadow: 1px 1px 2px rgba(212, 183, 115, 0.2);
    }

    h5 {
        color: var(--text-dark) !important;
        font-weight: 600;
    }
</style>