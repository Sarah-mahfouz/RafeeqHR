@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-lg border-0">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="shadow-lg border-radius-lg pt-4 pb-3" style="background: linear-gradient(135deg, #d4b773, #c2a85f);">
                        <h1 class="text-white text-capitalize ps-3">Edit Employee Info</h1>
                    </div>
                </div>
                <div class="card-body" id="o" style="background-color: #fdfcfa;">
                    <form method="POST" action="{{ route('admin.user_update', ['id' => $user->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label" style="color: #8b7355; font-weight: 600;">Name</label>
                                <div style="border: 2px solid #d4b773; border-radius: 8px; padding: 3px;">
                                    <input name="name" type="text" class="form-control border-0" style="box-shadow: none;" id="name" value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label" style="color: #8b7355; font-weight: 600;">Email</label>
                                <div style="border: 2px solid #d4b773; border-radius: 8px; padding: 3px;">
                                    <input name="email" type="email" class="form-control border-0" style="box-shadow: none;" id="email" value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="old_password" style="color: #8b7355; font-weight: 600;">Current Password</label>
                                <div style="border: 2px solid #d4b773; border-radius: 8px; padding: 3px;">
                                    <input type="password" name="old_password" id="old_password" class="form-control border-0" style="box-shadow: none;" required>
                                </div>
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="department_id" class="form-label" style="color: #8b7355; font-weight: 600;">Department</label>
                                <div style="border: 2px solid #d4b773; border-radius: 8px; padding: 3px;">
                                    <select name="department_id" class="form-select border-0" style="box-shadow: none;" id="status">
                                        <option value="" selected>Select Department</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label" style="color: #8b7355; font-weight: 600;">Password</label>
                                <div style="border: 2px solid #d4b773; border-radius: 8px; padding: 3px;">
                                    <input name="password" type="password" class="form-control border-0" style="box-shadow: none;" id="function" value="">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password_confirmation" class="form-label" style="color: #8b7355; font-weight: 600;">Confirm Password</label>
                                <div style="border: 2px solid #d4b773; border-radius: 8px; padding: 3px;">
                                    <input name="password_confirmation" type="password" class="form-control border-0" style="box-shadow: none;" id="function" value="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label" style="color: #8b7355; font-weight: 600;">Phone</label>
                                <div style="border: 2px solid #d4b773; border-radius: 8px; padding: 3px;">
                                    <input name="phone" type="number" class="form-control border-0" style="box-shadow: none;" id="employed" value="{{ $user->phone }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="salary" class="form-label" style="color: #8b7355; font-weight: 600;">Salary</label>
                                <div style="border: 2px solid #d4b773; border-radius: 8px; padding: 3px;">
                                    <input name="salary" type="number" class="form-control border-0" style="box-shadow: none;" id="employed" value="{{ $user->salary }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="jobtitle" class="form-label" style="color: #8b7355; font-weight: 600;">Job Title</label>
                                <div style="border: 2px solid #d4b773; border-radius: 8px; padding: 3px;">
                                    <input name="job_title" type="text" class="form-control border-0" style="box-shadow: none;" id="employed" value="{{ $user->job_title }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="hire_date" class="form-label" style="color: #8b7355; font-weight: 600;">Hire date</label>
                                <div style="border: 2px solid #d4b773; border-radius: 8px; padding: 3px;">
                                    <input name="hire_date" type="date" class="form-control border-0" style="box-shadow: none;" id="employed" value="{{ $user->hire_date }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-md-6 mb-3">
                                        <label for="profile_picture" class="form-label" style="color: #8b7355; font-weight: 600;">profile picture</label>
                                        <div style="border: 2px solid #d4b773; border-radius: 8px; padding: 3px;">
                                            <input name="profile_picture" type="text"
                                                class="form-control border-0" style="box-shadow: none;" id="employed"
                                                value="{{ $user->profile_picture }}">
                                        </div>
                                    </div>
                            <div class="col-md-6 mb-3">
                                <label for="address" class="form-label" style="color: #8b7355; font-weight: 600;">Address</label>
                                <div style="border: 2px solid #d4b773; border-radius: 8px; padding: 3px;">
                                    <input name="address" type="text" class="form-control border-0" style="box-shadow: none;" id="employed" value="{{ $user->address }}">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mb-2 me-2">
                            <button type="submit" class="btn me-2" style="background-color: #d4b773; border: 3px solid #b8a05f; color: white; font-weight: 600; box-shadow: 0 0 10px rgba(212, 183, 115, 0.3);">Save Changes</button>
                            <button type="button" class="btn me-2" style="background-color: #8b7355; border: 3px solid #6f5a42; color: white; font-weight: 600; box-shadow: 0 0 10px rgba(139, 115, 85, 0.3);">Cancel</button>
                        </div>
                    </form>

                    @if ($errors->any())
                        <div class="alert" style="background-color: #f5f0e6; border-color: #d4b773; color: #8b7355;">
                            <ul style="margin-bottom: 0;">
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

<style>
.input-frame:focus-within {
    box-shadow: 0 0 0 0.2rem rgba(212, 183, 115, 0.25);
    border-color: #b8a05f !important;
}

.form-control:focus, .form-select:focus {
    box-shadow: none !important;
    border: none !important;
}

.card {
    border: 1px solid #e6dcc8 !important;
}

.btn:hover {
    transform: translateY(-2px);
    transition: all 0.3s ease;
    box-shadow: 0 0 15px rgba(212, 183, 115, 0.5) !important;
}

.btn {
    border-radius: 8px !important;
    padding: 10px 20px !important;
    transition: all 0.3s ease;
}
</style>

<script>
document.getElementById('profile_picture_input').addEventListener('change', function(event) {
    const [file] = event.target.files;
    if (file) {
        document.getElementById('preview').src = URL.createObjectURL(file);
    }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection