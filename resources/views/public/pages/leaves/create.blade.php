@extends('layouts.public')
@section('content')

<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="card my-3 border-0 shadow">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
  <div style="background: linear-gradient(to right, #d4b773, #d4b773); border-radius: 15px; padding: 20px;">
    <h1 style="
        color: white;
        text-transform: capitalize;
        padding-left: 20px;
        font-weight: bold;
        font-size: 32px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.4);
        ">
      Leaves
    </h1>
  </div>
</div>
                <div class="card-body p-3 p-lg-4">
                    <form method="POST" action="{{ route('leaves.store') }}" class="leave-form">
                        @csrf

                        <div class="form-group custom-form-group">
                            <label for="leave_type_id" class="form-label">Leave Type</label>
                            <div class="select-wrapper">
                                <select class="form-control" id="leave_type_id" name="leave_type_id" required>
                                    <option value="" disabled selected>Select type of leave</option>
                                    @foreach($leaveTypes as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('leave_type_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group custom-form-group">
                            <label for="start_date" class="form-label">Start Date</label>
                            <div class="input-icon-wrapper">
                                <input type="date" class="form-control" id="start_date" name="start_date" required>
                                <span class="input-icon calendar-icon"></span>
                            </div>
                            @error('start_date')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group custom-form-group">
                            <label for="end_date" class="form-label">End Date</label>
                            <div class="input-icon-wrapper">
                                <input type="date" class="form-control" id="end_date" name="end_date" required>
                                <span class="input-icon calendar-icon"></span>
                            </div>
                            @error('end_date')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group custom-form-group">
                            <label for="reason" class="form-label">Reason for Leave</label>
                            <textarea class="form-control" id="reason" name="reason" rows="3" placeholder="Please explain your reason for requesting leave..."></textarea>
                            @error('reason')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="action-buttons row mt-4">
                            <div class="col-12 col-md-6 mb-2">
                                <button type="submit" class="btn submit-btn w-100">
                                    <span class="btn-text">Submit Request</span>
                                    <span class="btn-icon">→</span>
                                </button>
                            </div>
                            <div class="col-12 col-md-6">
                                <a href="{{ route('leaves.index') }}" class="btn cancel-btn w-100">
                                    <span class="btn-text">Cancel</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
<style>
    :root {
        --primary: #ffbf00;
        --primary-light: #ffd54f;
        --primary-dark: #e6b800;
        --primary-ultra-light: #fff9e6;
        --black: #000000;
        --black-soft: #212121;
        --white: #FFFFFF;
        --gray-100: #F8F9FA;
        --gray-200: #E9ECEF;
        --gray-300: #DEE2E6;
        --gray-400: #CED4DA;
        --gray-500: #ADB5BD;
        --error: #FF3B30;
    }

    body {
        background-color: #f8f9fa;
        color: var(--black-soft);
        font-family: 'Poppins', 'Segoe UI', sans-serif;
    }

    .border{
        border: 1px solid #d4b773;
        border-radius: 8px;
        background-color: #d4b773;
        margin-top: 30px;
        padding-top: 10px;
    }

    

    .bg-gradient-primary {
        background: linear-gradient(45deg, #ffbf00, #ffd54f);
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(255, 191, 0, 0.25);
    }

    .card-header h1 {
        font-weight: 600;
        font-size: 1.5rem;
        margin: 0;
        padding: 12px 15px;
    }

    .form-label {
        font-weight: 500;
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
    }

    .form-control {
        border: 1px solid var(--gray-200);
        border-radius: 8px;
        padding: 10px 14px;
        font-size: 0.95rem;
        transition: all 0.2s ease;
    }

    .form-control:focus {
        box-shadow: 0 0 0 3px rgba(255, 191, 0, 0.15);
        border-color: var(--primary);
    }

    .select-wrapper {
        position: relative;
    }

    .select-wrapper::after {
        content: "";
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 6px solid var(--primary);
        pointer-events: none;
    }

    select.form-control {
        appearance: none;
        cursor: pointer;
        padding-right: 35px;
    }

    .input-icon-wrapper {
        position: relative;
    }

    input[type="date"] {
        cursor: pointer;
    }

    input[type="date"]::-webkit-calendar-picker-indicator {
        opacity: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        cursor: pointer;
    }

    .calendar-icon {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        width: 16px;
        height: 16px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23ffbf00' viewBox='0 0 16 16'%3E%3Cpath d='M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
    }

    textarea.form-control {
        min-height: 100px;
        resize: vertical;
    }

    .btn {
        border-radius: 8px;
        padding: 12px 20px;
        font-weight: 500;
        font-size: 0.95rem;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        box-shadow: 0 3px 5px rgba(0, 0, 0, 0.08);
    }

    .submit-btn {
        background: #d4b773;
        border: none;
        color: var(--white);
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .submit-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0%;
        height: 100%;
        background-color: #dcd6c8;
        transition: all 0.3s ease;
        z-index: -1;
    }

    .submit-btn:hover::before {
        width: 100%;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(255, 191, 0, 0.25);
    }

    .cancel-btn {
        background-color: var(--white);
        border: 1px solid var(--gray-300);
        color: var(--black-soft);
    }

    .cancel-btn:hover {
        background-color: var(--gray-100);
        border-color: var(--gray-400);
        transform: translateY(-2px);
    }

    .text-danger {
        color: var(--error) !important;
        font-size: 0.8rem;
        margin-top: 0.4rem;
        font-weight: 400;
    }

    .custom-form-group {
        margin-bottom: 1.25rem;
        position: relative;
    }

    .custom-form-group::after {
        content: '';
        position: absolute;
        bottom: -0.625rem;
        left: 0;
        width: 100%;
        height: 1px;
        background: linear-gradient(to right, var(--primary-ultra-light), transparent);
        opacity: 0.4;
    }

    .custom-form-group:last-of-type::after {
        display: none;
    }

    @media (max-width: 768px) {
        .card-header h1 {
            font-size: 1.3rem;
        }
        
        .btn {
            padding: 10px 16px;
        }
    }
</style>
@endpush