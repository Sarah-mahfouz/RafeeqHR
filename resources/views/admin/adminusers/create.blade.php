@extends('layouts.admin')
@section('content')
<style>
  /* تعديل الألوان لتتماشى مع الثيم الأصفر والبيج */
  body {
    background-color: #FFF9E6; /* لون بيج فاتح للخلفية */
    color: #000;
  }

  .card {
    border: 1px solid #d4b773 !important; /* حدود صفراء ذهبية خفيفة */
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(255, 193, 7, 0.2);
    background-color: #FFFBEE; /* بيج فاتح جداً للبطاقات */
  }

  .card-header {
    color: white !important;
  }

  .bg-gradient-dark {
    background: #d4b773 !important; /* صفراء برتقالية للعنوان */
    box-shadow: 0 4px 10px rgba(255, 193, 7, 0.4) !important;
  }

  .shadow-dark {
    box-shadow: 0 4px 10px rgba(255, 193, 7, 0.4) !important;
  }

  .form-control,
  .form-select {
    border: 2px solid #d4b773 !important; /* حدود صفراء ذهبية */
    background-color: #FFFDF0 !important; /* بيج فاتح جداً */
    border-radius: 8px;
    padding: 10px 15px;
    transition: all 0.3s;
  }

  .form-control:focus,
  .form-select:focus {
    border-color: #d4b773 !important; /* صفراء أغمق عند التركيز */
    box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.25) !important;
  }

  .form-label {
    color: #5D4037; /* بني داكن للنص */
    font-weight: 500;
    margin-bottom: 8px;
  }

  /* أزرار الإرسال والإلغاء */
  .btn-success {
    background-color: #d4b773 !important; /* صفراء برتقالية */
    color: white !important;
    border: none !important;
    transition: all 0.3s;
    font-weight: 600;
    padding: 10px 20px;
  }

  .btn-success:hover {
    background-color: #d4b773 !important; /* صفراء محمرة */
    box-shadow: 0 4px 8px rgba(255, 193, 7, 0.4);
  }

  .btn-danger {
    background-color: #FFFDE7 !important; /* بيج فاتح جداً */
    color: #5D4037!important; /* صفراء محمرة */
    border: 1px solid #d4b773 !important; /* حدود صفراء ذهبية */
    transition: all 0.3s;
    font-weight: 600;
    padding: 10px 20px;
  }

  .btn-danger:hover {
    background-color: #d4b773!important; /* صفراء محمرة */
    color: white !important;
    border: 1px solid #d4b773 !important;
  }

  /* رسائل الخطأ */
  .alert-danger {
    background-color: #FFF3E0 !important; /* بيج فاتح للتنبيهات */
    border: 1px solid #d4b773 !important; /* برتقالي محمر للحدود */
    color: #d4b773 !important; /* برتقالي محمر غامق للنص */
  }

  #head {
    color: white;
  }
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
            <h1 class="text-white text-capitalize ps-3">New Employee</h1>
          </div>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('add_new_employee') }}">
            @csrf
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="name" type="text" class="form-control border border-secondary" id="name" value="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control border border-secondary" id="email" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control border border-secondary" id="function" value="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password_confirmation" type="password" class="form-control border border-secondary" id="function" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input name="phone" type="number" class="form-control border border-secondary" id="employed" value="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input name="salary" type="number" class="form-control border border-secondary" id="employed" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="jobtitle" class="form-label">Job Title</label>
                <input name="job_title" type="text" class="form-control border border-secondary" id="employed" value="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="hire_date" class="form-label">Hire date</label>
                <input name="hire_date" type="date" class="form-control border border-secondary" id="employed" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="profile_picture" class="form-label">profile picture</label>
                <input name="profile_picture" type="text" class="form-control border border-secondary" id="employed" value="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="address" class="form-label">Address</label>
                <input name="address" type="text" class="form-control border border-secondary" id="employed" value="">
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="department_id" class="form-label">Department</label>
              <select name="department_id" class="form-select border border-secondary" id="status">
                <option value="" selected>Select Department</option>
                @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="d-flex justify-content-end mb-2 me-2">
              <button type="button" class="btn btn-danger me-2 border border-secondary">Cancel</button>
              <button type="submit" class="btn btn-success border border-primary">Save Changes</button>
            </div>
          </form>
          @if ($errors->any())
          <div class="alert alert-danger border border-danger">
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