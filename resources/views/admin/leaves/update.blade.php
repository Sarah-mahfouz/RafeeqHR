@extends('layouts.admin')
@section('content')
<style>
  .card-header {
    color: white !important;
  }
  .form-control, .form-select {
    border: 1px solid #d4b773 !important;
  }
  .card {
    border: 1px solid #d4b773 !important;
    box-shadow: 0 2px 8px rgba(212, 183, 115, 0.2);
  }
  #head{
    color: white;
  }
  #a{
    color: white !important;
  }
  
  /* Golden Theme Styles */
  .bg-gradient-golden {
    background: linear-gradient(45deg, #d4b773 0%, #c4a763 50%, #b89a54 100%);
  }
  
  .form-control:focus, .form-select:focus {
    border-color: #d4b773 !important;
    box-shadow: 0 0 0 0.2rem rgba(212, 183, 115, 0.25) !important;
  }
  
  .form-label {
    color: #8b7c4a !important;
    font-weight: 600;
  }
  
  .btn-warning {
    background-color: #d4b773 !important;
    border-color: #d4b773 !important;
    color: #fff !important;
  }
  
  .btn-warning:hover {
    background-color: #c4a763 !important;
    border-color: #c4a763 !important;
  }
  
  .alert-success {
    background-color: rgba(212, 183, 115, 0.1) !important;
    border-color: #d4b773 !important;
    color: #8b7c4a !important;
  }
  
  .form-control option {
    background-color: #f8f6f0;
  }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-golden shadow-dark border-radius-lg pt-4 pb-3">
              <h1 class="text-white text-capitalize ps-3">Employee Leave Balance </h1>
            </div>
            </div>
                <div class="card-body text-center">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    
                    <form method="POST" action="{{ route('admin.leave-balances.update') }}" class="mb-4">
                        @csrf
                        <div class="row g-3 align-items-end">
                            <div class="col-md-3">
                                <label class="form-label">Employee</label>
                                <select name="user_id" class="form-control" required>
                                    @if ($balance)
                                    <option selected value="{{ $balance->user->id }}">{{ $balance->user->name }}</option>
                                    @else
                                    <option value="">Select Employee</option>
                                    @endif
                                    
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Leave Type</label>
                                <select name="leave_type_id" class="form-control" required>
                                    <option value="">Select Leave Type</option>
                                    @foreach ($leaveTypes as $leaveType)
                                        <option value="{{ $leaveType->id }}">{{ $leaveType->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Year</label>
                                <input type="number" name="year" class="form-control" value="{{ $year }}" required>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Allocated Days</label>
                                <input type="number" name="allocated" class="form-control" step="0.01" min="0" required>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-warning px-4">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection