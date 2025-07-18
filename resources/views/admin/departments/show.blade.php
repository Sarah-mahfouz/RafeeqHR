@extends('layouts.admin')
@section('content')
@if (session('message'))
<div class="alert alert-success text-center" role="alert" style="background-color: #d4b773; border-color: #c4a763; color: #8b7c4a;">
    {{ session('message') }}
</div>
@endif

<style>
/* Custom Golden Theme Styles */
.bg-gradient-golden {
    background: linear-gradient(45deg, #d4b773 0%, #c4a763 50%, #b89a54 100%);
}

.card {
    border: 1px solid #d4b773;
    box-shadow: 0 2px 8px rgba(212, 183, 115, 0.2);
}

.card-header {
    background: transparent;
}

.table thead th {
    background-color: #f8f6f0;
    color: #8b7c4a;
    border-bottom: 2px solid #d4b773;
}

.table tbody tr {
    border-bottom: 1px solid rgba(212, 183, 115, 0.2);
}

.table tbody tr:hover {
    background-color: rgba(212, 183, 115, 0.1);
}

.btn-success {
    background-color: #d4b773;
    border-color: #d4b773;
    color: #fff;
}

.btn-success:hover {
    background-color: #c4a763;
    border-color: #c4a763;
}

.btn-warning {
    background-color: #e8d099;
    border-color: #e8d099;
    color: #8b7c4a;
}

.btn-warning:hover {
    background-color: #dcc688;
    border-color: #dcc688;
}

.btn-danger {
    background-color: #b89a54;
    border-color: #b89a54;
    color: #fff;
}

.btn-danger:hover {
    background-color: #a68949;
    border-color: #a68949;
}

.pagination-dark .pagination .page-link {
    background-color: #f8f6f0;
    border-color: #d4b773;
    color: #8b7c4a;
}

.pagination-dark .pagination .page-link:hover {
    background-color: #d4b773;
    border-color: #d4b773;
    color: #fff;
}

.pagination-dark .pagination .page-item.active .page-link {
    background-color: #d4b773;
    border-color: #d4b773;
    color: #fff;
}

.avatar {
    border: 2px solid rgba(212, 183, 115, 0.3);
}

.text-secondary {
    color: #8b7c4a !important;
}
</style>

  <div class="container-fluid py-2">
    <div class="row">
      <div class="col-12">

        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-golden shadow-dark border-radius-lg pt-4 pb-3">
              <h1 class="text-white text-capitalize ps-3"> {{ $department->name }} Department</h1>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Name</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">E-mail</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Phone</th>
                    
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Salary</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Department</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Hire Date</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Address</th>
                    
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="{{ asset($user->profile_picture) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{$user->name}}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{$user->email}}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$user->phone}}</p>
                    </td>
                    <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{$user->salary}}</p>
                    </td>
                    <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{isset($user->department->name) ? $user->department->name : " "}}</p>
                    </td>
                    <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{isset($user->hire_date) ? $user->hire_date : " "}}</p>
                    </td>
                    <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{isset($user->address) ? $user->address : " "}}</p>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex justify-content-center gap-2">
                          <a href="{{ route('admin.show_user', ['id' => $user->id]) }}" class="btn btn-sm btn-success">Show</a>
                            <a href="{{ route('admin.edit_user', ['id' => $user->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form method="POST" action="{{ route('admin.user_softdelete', ['id' => $user->id]) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="pagination-dark">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>

@endsection