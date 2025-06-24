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
  
  .btn-success {
    background-color: #d4b773 !important;
    border-color: #d4b773 !important;
    color: #fff !important;
  }
  
  .btn-success:hover {
    background-color: #c4a763 !important;
    border-color: #c4a763 !important;
  }
  
  .btn-danger {
    background-color: #b89a54 !important;
    border-color: #b89a54 !important;
    color: #fff !important;
  }
  
  .btn-danger:hover {
    background-color: #a68949 !important;
    border-color: #a68949 !important;
  }
  
  .alert-danger {
    background-color: rgba(184, 154, 84, 0.1) !important;
    border-color: #b89a54 !important;
    color: #8b7c4a !important;
  }
  
  .text-danger {
    color: #b89a54 !important;
  }
  
  .border-secondary {
    border-color: #d4b773 !important;
  }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 p-4">
            <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-golden shadow-dark border-radius-lg pt-4 pb-3">
              <h1 class="text-white text-capitalize ps-3">Edit HR Info</h1>
            </div>
            </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('hr.update' ,['id' => $hr->id]) }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input name="name" type="text" class="form-control" id="name" value="{{ $hr->name }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="email" value="{{ $hr->email }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="old_password">Current Password</label>
                            <input type="password" name="old_password" id="old_password" class="form-control border border-secondary" required>
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="function" value="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input name="password_confirmation" type="password" class="form-control" id="function" value="">
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6 mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input name="profile_picture" type="text" class="form-control" id="function" value="{{ $hr->profile_picture }}">
                            </div>
                        </div>
                        </div>
                        <div class="d-flex justify-content-end mb-2 me-2">
                            <button type="button" class="btn btn-danger me-2">Cancel</button>
                            <button type="submit" class="btn btn-success">Save Changes</button>
                        </div>
                    </form>
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection