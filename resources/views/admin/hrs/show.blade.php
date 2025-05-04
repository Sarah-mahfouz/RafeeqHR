@extends('layouts.admin')
@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="m-0">{{ Auth::guard('admin')->user()->role }} Details</h3>
            <a href="{{ route('hr.index') }}" class="btn btn-success btn-sm">Back to HRs</a>
        </div>
        
        <div class="card shadow-custom">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div style="background: linear-gradient(45deg, #d4b773, #b39457); box-shadow: 0 4px 20px 0 rgba(212, 183, 115, 0.14), 0 7px 10px -5px rgba(212, 183, 115, 0.4);" class="shadow-dark border-radius-lg pt-4 pb-3">
                        <h1 class="text-white text-capitalize ps-3">HR Details</h1>
                    </div>
                </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 text-center mb-4 mb-md-0">
                        <div class="profile-image-container mb-3">
                            <img src="{{ asset($hr->profile_picture) }}" alt="User Image" class="user-image">
                        </div>
                        <h5 class="fw-bold">User ID</h5>
                        <p class="text-secondary mb-0">{{$hr->id}}</p>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6 info-section">
                                <div class="info-label">Name</div>
                                <div class="info-value">{{ $hr->name }}</div>
                            </div>
                            <div class="col-md-6 info-section">
                                <div class="info-label">Email</div>
                                <div class="info-value">{{$hr->email}}</div>
                            </div>
                            <div class="col-md-6 info-section">
                                <div class="info-label">Joined Date</div>
                                <div class="info-value">{{ $hr->created_at->format('Y-m-d') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white d-flex justify-content-end">
                <a href="{{ route('hr.edit', ['id' => $hr->id]) }}" class="btn btn-gold me-2 equal-width-btn">Edit</a>
                <form method="POST" action="{{ route('hr.soft_delete', ['id' => $hr->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger equal-width-btn">Delete</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Main color scheme with gold (#d4b773) theme */
        :root {
            --primary-gold: #d4b773;
            --primary-gold-dark: #b39a5f;
            --primary-gold-light: #e8d8af;
            --secondary-gold: #c1a55e;
            --tertiary-gold: #e5d7b4;
            --gold-text: #7d6b42;
            --gold-highlight: #f3ebd7;
            --gold-shadow: rgba(212, 183, 115, 0.35);
        }

        body {
            background-color: #f8f5ed;
            color: #333;
            font-family: 'Roboto', 'Segoe UI', sans-serif;
        }

        .container {
            max-width: 1200px;
        }

        h3 {
            color: var(--gold-text);
            font-weight: 600;
        }

        .shadow-custom {
            box-shadow: 0 8px 24px var(--gold-shadow) !important;
        }

        /* .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
        } */

        .card:hover {
            box-shadow: 0 12px 30px var(--gold-shadow) !important;
        }

        .bg-gradient-gold {
            background: linear-gradient(135deg, var(--primary-gold) 0%, var(--primary-gold-dark) 100%);
        }

        .shadow-gold {
            box-shadow: 0 4px 20px 0 rgba(212, 183, 115, 0.2), 0 7px 10px -5px rgba(212, 183, 115, 0.4) !important;
        }

        .border-radius-lg {
            border-radius: 8px;
        }

        /* Profile image styling */
        .profile-image-container {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
            border: 4px solid var(--primary-gold);
            padding: 3px;
            box-shadow: 0 5px 15px rgba(212, 183, 115, 0.3);
            transition: all 0.3s ease;
        }

        .profile-image-container:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(212, 183, 115, 0.4);
        }

        .user-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        /* Information sections */
        .info-section {
            margin-bottom: 18px;
            padding: 15px;
            border-radius: 8px;
            background-color: var(--gold-highlight);
            border-left: 4px solid var(--primary-gold);
            transition: all 0.2s ease;
        }

        .info-section:hover {
            background-color: white;
            transform: translateX(3px);
            box-shadow: 0 4px 12px rgba(212, 183, 115, 0.2);
        }

        .info-label {
            font-size: 14px;
            font-weight: 600;
            color: var(--primary-gold-dark);
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-value {
            font-size: 16px;
            color: var(--gold-text);
            font-weight: 500;
        }

        /* Equal width buttons */
        .equal-width-btn {
            min-width: 110px;
            text-align: center;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 500;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        /* Gold button styles */
        .btn-gold {
            background-color: var(--primary-gold);
            border-color: var(--primary-gold);
            color: white;
        }
        
        .btn-gold:hover {
            background-color: var(--primary-gold-dark);
            border-color: var(--primary-gold-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(212, 183, 115, 0.4);
        }

        .btn-gold:active {
            transform: translateY(0);
        }

        /* Card footer */
        .card-footer {
            border-top: 1px solid var(--tertiary-gold);
            padding: 18px 20px;
        }

        /* Make the form display as inline element so spacing works correctly */
        .card-footer form {
            display: inline-block;
            margin: 0;
        }

        /* Keep the danger button for Delete */
        .btn-danger {
            background-color: #d4b773;
            border-color: #dc3545;
            transition: all 0.3s ease;
        }
        
        .btn-danger:hover {
            background-color: #c82333;
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(220, 53, 69, 0.3);
        }
        
        .btn-danger:active {
            transform: translateY(0);
        }
        
        /* Keep the success button for the Back link */
        .btn-success {
            background-color:rgb(240, 190, 74);
            border-color: #198754;
            transition: all 0.3s ease;
        }
        
        .btn-success:hover {
            background-color: #d4b773;
            box-shadow: 0 4px 8px rgba(25, 135, 84, 0.3);
        }
    </style>
@endsection