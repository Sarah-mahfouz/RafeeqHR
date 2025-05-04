@extends('layouts.admin')
@section('content')
@if (session('message'))
<div class="alert alert-success text-center" role="alert" style="background-color: #e6d6b3 !important; color: #7d6a43 !important; border-color: #d4b773 !important;">
  {{ session('message') }}
</div>
@endif
<div class="container-fluid py-2">
  <div class="row">
    <div class="col-12">
      <div class="card my-4" style="background-color: #f5efe0; border: 1px solid #e6d6b3;">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div style="background: linear-gradient(45deg, #d4b773, #b39457); box-shadow: 0 4px 20px 0 rgba(212, 183, 115, 0.14), 0 7px 10px -5px rgba(212, 183, 115, 0.4);" class="shadow-dark border-radius-lg pt-4 pb-3">
            <h1 class="text-white text-capitalize ps-3">Deleted HRs</h1>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr style="background-color: #e6d6b3;">
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Name</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">E-mail</th>
                  <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Phone</th>
                  <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Salary</th>
                  <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($hrs as $hr)
                <tr style="{{$loop->even ? 'background-color: #f5efe0;' : 'background-color: #ede4d0;'}}">
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="{{ asset($hr->profile_picture) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$hr->name}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{$hr->email}}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$hr->created_at->diffForHumans()}}</p>
                  </td>
                  <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{$hr->updated_at->diffForHumans()}}</p>
                  </td>

                  <td class="align-middle text-center">
                    <div class="d-flex justify-content-center gap-2">
                      <form method="POST" action="{{ route('hr.restore', ['id' => $hr->id]) }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-sm" style="background-color: #d4b773; color: white;">Restore</button>
                      </form>
                      <form method="POST" action="{{ route('hr.destroy', ['id' => $hr->id]) }}" class="d-inline">
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
  <div class="pagination-dark" style="background-color: #f5efe0; padding: 10px; border-radius: 5px;">
    {{ $hrs->links('pagination::bootstrap-4') }}
  </div>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>

<style>
  .pagination-dark .pagination .page-item.active .page-link {
    background-color: #d4b773 !important;
    border-color: #c1a978 !important;
    color: white !important;
  }
  
  .pagination-dark .pagination .page-link {
    color: #7d6a43;
    background-color: #f5efe0;
    border-color: #e6d6b3;
  }
  
  .pagination-dark .pagination .page-link:hover {
    background-color: #e6d6b3;
    border-color: #d4b773;
  }
</style>
@endsection