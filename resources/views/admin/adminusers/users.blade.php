@extends('layouts.admin')
@section('content')

<div class="container-fluid py-2">
  <div class="row">
    <div class="col-12">
      <div class="d-flex align-items-center justify-content-between mb-4">

        <div id="employeesSearchContainer">
          <div id="employeesFilterGroup">
            <form method="GET" action="{{ route('all_users') }}" id="employeesSearchForm" class="employeesForm">
              <div class="d-flex gap-2">
                <div id="employeesSearchWrapper">
                  <input name="search" type="text" id="employeesSearchInput" placeholder="Search employees">
                  <button type="submit" id="employeesSearchButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#5D4037" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                  </button>
                </div>
                <!-- Department Filter Form -->
                <select name="department_id" id="employeesDepartmentFilter" onchange="this.form.submit()">
                  <option selected>All Departments</option>
                  @foreach ($departments as $department)
                  <option value="{{ $department->id }}">{{$department->name}}</option>
                  @endforeach
                </select>
              </div>
            </form>
          </div>
        </div>
        <div class="d-flex justify-content-between gap-2">
          <a href="{{ route('employees.download.pdf') }}" class="btn btn-custom-orange">
            <i class="fas fa-file-pdf"></i> Export to PDF
          </a>
          <a class="btn btn-custom-black" href="{{ route('admin.create') }}" type="button">Add new user</a>
        </div>
      </div>

      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-custom-black shadow-custom border-radius-lg pt-4 pb-3">
            <h1 class="text-white text-capitalize ps-3">Employees</h1>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table text-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-black font-weight-bolder opacity-8">Employee Name</th>
                  <th class="text-uppercase text-black font-weight-bolder opacity-8 ps-2">Email</th>
                  <th class="text-uppercase text-black font-weight-bolder opacity-8 ps-2">Phone</th>
                  <th class="text-center text-uppercase text-black font-weight-bolder opacity-8">Salary</th>
                  <th class="text-center text-uppercase text-black font-weight-bolder opacity-8">Department</th>
                  <th class="text-center text-uppercase text-black font-weight-bolder opacity-8">Hire Date</th>
                  <th class="text-uppercase text-black font-weight-bolder opacity-8 ps-2">Address</th>
                  <th class="text-center text-uppercase text-black font-weight-bolder opacity-8">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr class="table-row-hover">
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
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$user->email}}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$user->phone}}</p>
                  </td>
                  @if (Auth::guard('admin')->user()->role =='hr')
                  <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{$user->salary}}</p>
                  </td>
                  @else
                  <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">****</p>
                  </td>
                  @endif

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
                      <a href="{{ route('admin.show_user', ['id' => $user->id]) }}" class="btn btn-sm"  style="background-color:rgb(169, 121, 106); color: white ;">Show</a>
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
</div>

<div class="pagination-custom">
  {{ $users->links('pagination::bootstrap-4') }}
</div>

<style>
  /* General Styles */
  body {
    background-color: #FFF9E6; /* لون بيج فاتح للخلفية */
    color: #000;
  }

  .card {
    border: 1px solid #d4b773; /* حدود صفراء ذهبية خفيفة */
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(255, 193, 7, 0.2);
    background-color: #FFFBEE; /* بيج فاتح جداً للبطاقات */
  }

  /* Search Input Styles */
  #employeesSearchWrapper {
    display: flex;
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(255, 193, 7, 0.2);
    border: 2px solid #d4b773; /* حدود صفراء ذهبية */
    width: 250px;
  }

  #employeesSearchInput {
    flex: 1;
    padding: 12px 16px;
    font-size: 16px;
    border: transparent;
    outline: none;
    background-color: #FFFDF0; /* بيج فاتح جداً */
    color: #000;
    width: 100%;
  }

  #employeesSearchInput::placeholder {
    color: #d4b773; /* ذهبي داكن للنص العائم */
  }

  #employeesSearchButton {
    background-color: #d4b773; /* صفراء ذهبية */
    border: none;
    cursor: pointer;
    padding: 0 15px;
    transition: background-color 0.3s;
  }

  #employeesSearchButton:hover {
    background-color: #d4b773; /* صفراء أغمق عند التمرير */
  }

  /* Department Filter Styles */
  #employeesFilterGroup {
    display: flex;
    gap: 15px;
  }

  #employeesDepartmentFilter {
    padding: 12px 16px;
    height: 1%;
    font-size: 16px;
    border: 2px solid #d4b773; /* حدود صفراء */
    border-radius: 8px;
    background-color: #FFFDF0; /* بيج فاتح */
    color: #000;
    cursor: pointer;
    outline: none;
    box-shadow: 0 2px 6px rgba(255, 193, 7, 0.2);
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23FFD700' viewBox='0 0 16 16'><path d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/></svg>");
    background-repeat: no-repeat;
    background-position: calc(100% - 16px) center;
    padding-right: 40px;
    min-width: 180px;
  }

  #employeesDepartmentFilter:hover {
    border-color: #d4b773; /* صفراء أغمق عند التمرير */
  }

  /* Button Styles */
  .btn-custom-orange {
    background-color: #d4b773; /* صفراء ذهبية */
    color: #5D4037; /* بني داكن للنص */
    border: none;
    transition: all 0.3s;
    font-weight: 600;
    padding: 10px 20px;
  }

  .btn-custom-orange:hover {
    background-color: #d4b773 /* صفراء أغمق عند التمرير */
    box-shadow: 0 4px 8px rgba(255, 193, 7, 0.4);
    color: #3E2723; /* بني داكن جداً للنص */
  }

  .btn-custom-black {
    background-color: #d4b773; /* صفراء برتقالية */
    color: white;
    border: none;
    transition: all 0.3s;
    font-weight: 600;
    padding: 10px 20px;
  }

  .btn-custom-black:hover {
    background-color:#d4b773; /* صفراء محمرة */
    box-shadow: 0 4px 8px rgba(255, 193, 7, 0.4);
    color: white;
  }

  /* Header Styles */
  .bg-custom-black {
    background-color: #d4b773; /* صفراء برتقالية للعنوان */
  }

  .shadow-custom {
    box-shadow: 0 4px 10px rgba(255, 193, 7, 0.4);
  }

  /* Table Styles */
  .table thead th {
    font-weight: 600;
    border-bottom: 2px solid #d4b773; /* حدود صفراء ذهبية */
    padding: 12px 8px;
    font-size: 12px;
    color: #5D4037; /* بني داكن للنص */
  }

  .table tbody tr {
    border-bottom: 1px solid #FFE082; /* صفراء فاتحة للحدود */
    transition: all 0.2s;
  }

  .table-row-hover:hover {
    background-color: #FFF8E1; /* بيج فاتح عند التمرير */
  }

  .avatar {
    border: 2px solid #d4b773; /* حدود صفراء ذهبية */
  }

  /* Action Button Styles */
  .btn-success {
    background-color: #d4b773 !important; /* صفراء برتقالية */
    color: white !important;
    border: none !important;
    transition: all 0.3s;
  }

  .btn-success:hover {
    background-color: #d4b773 !important; /* صفراء محمرة */
    box-shadow: 0 4px 8px rgba(255, 193, 7, 0.4);
  }

  .btn-warning {
    background-color: #d4b773 !important; /* صفراء فاتحة */
    color: #5D4037 !important; /* بني داكن للنص */
    border: none !important;
    transition: all 0.3s;
  }

  .btn-warning:hover {
    background-color: #d4b773 !important; /* صفراء أغمق قليلاً */
    box-shadow: 0 4px 8px rgba(255, 193, 7, 0.4);
  }

  .btn-danger {
    background-color: #FFFDE7 !important; /* بيج فاتح جداً */
    color: #d4b773 !important; /* صفراء محمرة */
    border: 1px solid #d4b773!important; /* حدود صفراء ذهبية */
    transition: all 0.3s;
  }

  .btn-danger:hover {
    background-color: #d4b773 !important; /* صفراء محمرة */
    color: white !important;
    border: 1px solid #d4b773 !important;
  }

  /* Pagination Styles */
  .pagination-custom {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }

  .pagination-custom ul.pagination {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(255, 193, 7, 0.2);
  }

  .pagination-custom .page-item.active .page-link {
    background-color: #d4b773; /* صفراء ذهبية */
    border-color: #d4b773;
    color: #5D4037; /* بني داكن للنص */
  }

  .pagination-custom .page-link {
    color: #d4b773; /* صفراء برتقالية */
    border: 1px solid #FFE082; /* صفراء فاتحة للحدود */
    background-color: #FFFDF0; /* بيج فاتح جداً */
    transition: all 0.3s;
  }

  .pagination-custom .page-link:hover {
    background-color: #FFF8E1; /* بيج فاتح عند التمرير */
    color: #d4b773; /* صفراء محمرة */
  }
</style>

<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>

@endsection