@extends('layouts.public')
@section('content')

<style>
    body {
        background-color: #f9f5ea;
        color: #5d4037;
    }

    .profile-header {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(93, 64, 55, 0.2);
        position: relative;
        margin-bottom: 1.5rem;
        border: 1px solid #e6d7c3;
        overflow: hidden;
    }

    .profile-cover {
        height: 90px;
        background: linear-gradient(135deg, #d4b773, #fff8e1);
        border-radius: 15px 15px 0 0;
        position: relative;
    }

    .profile-picture-container {
        position: relative;
        display: inline-block;
    }

    .profile-picture {
        width: 160px;
        height: 160px;
        object-fit: cover;
        border: 5px solid #fff;
        border-radius: 50%;
        position: absolute;
        bottom: -60px;
        left: 50px;
        box-shadow: 0 5px 15px rgba(93, 64, 55, 0.3);
    }

    .profile-info {
        padding: 80px 30px 30px;
    }

    .profile-card {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(93, 64, 55, 0.1);
        padding: 25px;
        height: 100%;
        border-left: 4px solid #d4b773;
        transition: all 0.3s ease;
    }

    /* أنماط إضافية لزر رفع الصورة */
    .upload-form {
        position: relative;
        display: inline-block;
    }

    .upload-photo-btn {
        position: absolute;
        bottom: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #d4b773;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid white;
        cursor: pointer;
        box-shadow: 0 3px 8px rgba(93, 64, 55, 0.2);
        transition: all 0.3s ease;
    }

    .upload-photo-btn:hover {
        background-color: #c0a565;
        transform: scale(1.1);
    }

    .upload-photo-btn i {
        font-size: 16px;
    }

    /* بقية الأنماط كما هي */
    .profile-section-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #d7ccc8;
        color: #5d4037;
        display: flex;
        align-items: center;
    }

    .info-label {
        font-weight: 600;
        color: #5d4037;
        margin-bottom: 0.25rem;
    }

    .info-value {
        font-weight: 500;
        color: #6d4c41;
        padding-left: 8px;
        border-left: 3px solid #d4b773;
        margin-bottom: 0.25rem;
    }

    .status-badge {
        padding: 6px 12px;
        border-radius: 15px;
        font-weight: 600;
        font-size: 0.8rem;
        text-transform: uppercase;
    }

    .department-badge {
        background-color: rgba(255, 193, 7, 0.2);
        color: #b38f00;
        border: 1px solid #d4b773;
    }

    .position-badge {
        background-color: rgba(215, 204, 200, 0.3);
        color: #5d4037;
        border: 1px solid #d7ccc8;
    }

    .employee-name {
        color: #5d4037;
        font-weight: 700;
        font-size: 1.75rem;
        letter-spacing: 0.5px;
        margin-bottom: 0.25rem;
    }
    
    .job-title {
        color: #8d6e63;
        font-size: 1.1rem;
        margin-bottom: 0.75rem;
    }

    .row.g-4 {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 1.5rem;
    }
    
    .icon-orange {
        color: #d4b773;
        margin-right: 0.5rem;
    }
</style>

<div class="container py-5">
    <!-- Profile Header -->
    <div class="profile-header shadow-black">
        <div class="profile-cover"></div>
        <div class="profile-picture-container">
            <img src="{{ Auth::user()->profile_picture ?? '/api/placeholder/40/40' }}" alt="Profile Picture" class="profile-picture">
            <form action="{{ route('profile.picture.update') }}" method="POST" enctype="multipart/form-data" class="upload-form">
                @csrf
                <label for="profile_picture" class="upload-photo-btn" title="Change Profile Picture">
                    <i class="fas fa-camera"></i>
                    <input type="file" id="profile_picture" name="profile_picture" accept="image/*" style="display: none;" onchange="this.form.submit()">
                </label>
            </form>
        </div>

        <div class="profile-info">
            <h2 class="employee-name">{{ $user->name }}</h2>
            <p class="job-title">{{ $user->job_title }}</p>
            <div class="d-flex mt-2">
                <span class="status-badge department-badge me-2">{{ $user->department->name }}</span>
                <span class="status-badge position-badge">Full-time</span>
            </div>
        </div>
    </div>

    <!-- Profile Content -->
    <div class="row g-4">
        <!-- Personal Information -->
        <div class="col-lg-6">
            <div class="profile-card">
                <h3 class="profile-section-title">
                    <i class="bi bi-person-fill icon-orange"></i>Personal Information
                </h3>
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <p class="info-label">Full Name :</p>
                    </div>
                    <div class="col-sm-8">
                        <p class="info-value">{{ $user->name }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <p class="info-label">Email :</p>
                    </div>
                    <div class="col-sm-8">
                        <p class="info-value">{{ $user->email }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <p class="info-label">Phone :</p>
                    </div>
                    <div class="col-sm-8">
                        <p class="info-value">{{ $user->phone }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <p class="info-label">Address :</p>
                    </div>
                    <div class="col-sm-8">
                        <p class="info-value">{{ $user->address }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Employment Information -->
        <div class="col-lg-6">
            <div class="profile-card">
                <h3 class="profile-section-title">
                    <i class="bi bi-briefcase-fill icon-orange"></i>Employment Information
                </h3>
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <p class="info-label">Employee ID :</p>
                    </div>
                    <div class="col-sm-8">
                        <p class="info-value">{{ $user->id }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <p class="info-label">Department :</p>
                    </div>
                    <div class="col-sm-8">
                        <p class="info-value">{{ $user->department->name }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <p class="info-label">Job Title :</p>
                    </div>
                    <div class="col-sm-8">
                        <p class="info-value">{{ $user->job_title }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <p class="info-label">Salary :</p>
                    </div>
                    <div class="col-sm-8">
                        <p class="info-value">{{ number_format($user->salary, 0) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // معاينة الصورة قبل الرفع
    document.getElementById('profile_picture').addEventListener('change', function(e) {
        if (e.target.files.length > 0) {
            const reader = new FileReader();
            reader.onload = function(event) {
                document.querySelector('.profile-picture').src = event.target.result;
            };
            reader.readAsDataURL(e.target.files[0]);
        }
    });
</script>

@endsection