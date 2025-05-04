@extends('layouts.public')
@section('content')
<div class="container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="card leave-card">
                <div class="card-header position-relative">
                    <div class="header-banner">
                        <h1 class="page-title">Leave Details</h1>
                    </div>
                </div>
                
                <div class="card-body p-4">
                    <!-- Status Badge -->
                    <div class="status-badge-container mb-4">
                        @if($leave->status == 'Pending')
                            <span class="badge status-pending">{{ $leave->status }}</span>
                        @elseif($leave->status == 'Approved')
                            <span class="badge status-approved">{{ $leave->status }}</span>
                        @elseif($leave->status == 'Rejected')
                            <span class="badge status-rejected">{{ $leave->status }}</span>
                        @endif
                    </div>
                    
                    <div class="info-grid">
                        <!-- Leave Type -->
                        <div class="info-item">
                            <h5 class="info-label">Leave Type</h5>
                            <p class="info-value">{{ $leave->leavetype->name }}</p>
                        </div>
                        
                        <!-- Duration -->
                        <div class="info-item">
                            <h5 class="info-label">Duration</h5>
                            <p class="info-value">{{ $leave->total_days }} day(s)</p>
                        </div>
                        
                        <!-- Start Date -->
                        <div class="info-item">
                            <h5 class="info-label">Start Date</h5>
                            <p class="info-value">{{ $leave->start_date->format('d/m/Y') }}</p>
                        </div>
                        
                        <!-- End Date -->
                        <div class="info-item">
                            <h5 class="info-label">End Date</h5>
                            <p class="info-value">{{ $leave->end_date->format('d/m/Y') }}</p>
                        </div>
                    </div>
                    
                    <!-- Reason -->
                    @if(!empty($leave->reason))
                    <div class="reason-container mt-4">
                        <h5 class="info-label">Reason</h5>
                        <div class="reason-content">
                            <p>{{ $leave->reason }}</p>
                        </div>
                    </div>
                    @endif
                    
                    <!-- Rejection Reason -->
                    @if($leave->status == 'rejected' && !empty($leave->rejection_reason))
                    <div class="rejection-container mt-4">
                        <h5 class="info-label">Rejection Reason</h5>
                        <div class="rejection-content">
                            <p>{{ $leave->rejection_reason }}</p>
                        </div>
                    </div>
                    @endif
                    
                    <!-- Action Buttons -->
                    <div class="action-buttons mt-5">
                        <a href="{{ route('leaves.index') }}" class="btn btn-back">
                            <i class="fas fa-arrow-left me-2"></i>Back to List
                        </a>
                        @if($leave->status == 'Pending')
                        <a href="{{ route('leaves.edit', $leave->id) }}" class="btn btn-edit">
                            <i class="fas fa-edit me-2"></i>Edit
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --white: #ffffff;
        --primary: #333333;
        --light-primary: #555555;
        --gold: #d4b773;
        --light-gold: #e6ca86;
        --dark-gold: #c4a763;
        --gray: #f5f5f5;
        --dark-gray: #e0e0e0;
        
        /* New colors */
        --soft-bg: #f8f9fa;
        --border-light: #eaeaea;
        --text-muted: #6c757d;
        --pending: #3498db;
        --approved: #2ecc71;
        --rejected: #e74c3c;
    }

    /* Card styling */
    .leave-card {
        background-color: var(--white);
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .leave-card:hover {
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
    }
    
    /* Header styling */
    .card-header {
        padding: 0;
        background: transparent;
        border: none;
        border-radius: 8px;
    }
    
    .header-banner {
        background: linear-gradient(135deg, var(--gold), var(--light-gold));
        border-left: 10px solid var(--dark-gold);
        padding: 28px 30px;
        position: relative;
        overflow: hidden;
        border-radius: 10px;
    }
    
    .header-banner::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 150px;
        height: 100%;
        background: linear-gradient(to right, transparent, rgba(255,255,255,0.15));
    }
    
    .page-title {
        color: var(--white);
        text-transform: capitalize;
        font-weight: 700;
        font-size: 28px;
        letter-spacing: 1.2px;
        margin: 0;
        position: relative;
        z-index: 2;
    }
    
    /* Status badge */
    .status-badge-container {
        display: flex;
        justify-content: flex-end;
    }
    
    .badge {
        font-size: 0.85rem;
        font-weight: 600;
        padding: 8px 18px;
        border-radius: 30px;
        letter-spacing: 0.5px;
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }
    
    .status-pending {
        background-color: var(--pending);
        color: white;
    }
    
    .status-approved {
        background-color: var(--approved);
        color: white;
    }
    
    .status-rejected {
        background-color: var(--rejected);
        color: white;
    }
    
    /* Info grid styling */
    .info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
    }
    
    .info-item {
        position: relative;
    }
    
    .info-label {
        color: var(--text-muted);
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }
    
    .info-value {
        color: var(--primary);
        font-size: 1.1rem;
        font-weight: 500;
        padding: 12px 15px;
        background-color: var(--soft-bg);
        border-radius: 8px;
        border-left: 4px solid var(--gold);
        margin: 0;
    }
    
    /* Reason and rejection styling */
    .reason-container, .rejection-container {
        margin-top: 30px;
    }
    
    .reason-content, .rejection-content {
        background-color: var(--soft-bg);
        border-radius: 10px;
        padding: 15px 20px;
        border-left: 4px solid var(--gold);
    }
    
    .reason-content p, .rejection-content p {
        margin: 0;
        color: var(--primary);
        font-size: 1.05rem;
        line-height: 1.6;
    }
    
    .rejection-content {
        border-left-color: var(--rejected);
        background-color: rgba(231, 76, 60, 0.05);
    }
    
    /* Button styling */
    .action-buttons {
        display: flex;
        gap: 15px;
    }
    
    .btn {
        padding: 10px 20px;
        font-weight: 600;
        border-radius: 8px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    
    .btn-back {
        background-color: var(--white);
        color: var(--primary);
        border: 2px solid var(--border-light);
    }
    
    .btn-back:hover {
        background-color: #d4b773;
        color: var(--white);
        border-color: var(--primary);
        transform: translateY(-2px);
    }
    
    .btn-edit {
        background-color: var(--gold);
        color: var(--white);
        border: 2px solid var(--gold);
    }
    
    .btn-edit:hover {
        background-color: var(--dark-gold);
        border-color: var(--dark-gold);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(212, 183, 115, 0.3);
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .info-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }
        
        .action-buttons {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
        }
    }
</style>
@endsection