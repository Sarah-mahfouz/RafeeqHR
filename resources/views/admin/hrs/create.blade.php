@extends('layouts.admin')
@section('content')
<style>
    .card-header {
        color: white !important;
    }

    .form-control,
    .form-select {
        border: 1px solid #e6d6b3 !important;
        background-color: #f9f6f0 !important;
    }

    .card {
        border: 1px solid #e6d6b3 !important;
        background-color: #f5efe0 !important;
    }

    #head {
        color: white;
    }

    #a {
        color: white !important;
    }
    
    .form-label {
        color: #7d6a43 !important;
        font-weight: 500;
    }
    
    .btn-success {
        background-color: #c1a978 !important;
        border-color: #b39457 !important;
    }
    
    .btn-danger {
        background-color: #dc3545 !important;
        border-color: #b02a37 !important;
    }
    
    .alert-danger {
        background-color: #f8d7da !important;
        border-color: #d4b773 !important;
        color: #7d6a43 !important;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div style="background: linear-gradient(45deg, #d4b773, #b39457); box-shadow: 0 4px 20px 0 rgba(212, 183, 115, 0.14), 0 7px 10px -5px rgba(212, 183, 115, 0.4);" class="shadow-dark border-radius-lg pt-4 pb-3">
                        <h1 class="text-white text-capitalize ps-3">New HR</h1>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('hr.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input name="name" type="text" class="form-control" id="name" value="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="email" value="">
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
                        <div class="row justify-content-center">
                            <div class="col-md-6 mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input name="profile_picture" type="text" class="form-control" id="function" value="">
                            </div>
                        </div>
                </div>
                <div class="d-flex justify-content-end mb-2 me-2">
                    <button type="submit" class="btn btn-success me-2">Save</button>
                    <button type="button" class="btn btn-danger me-2">Cancel</button>
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
</body>

</html>
@endsection