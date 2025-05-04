@extends('layouts.public')
@section('content')

<div class="container-fluid py-2">
  <div class="row">
    <div class="col-12">
    <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small">
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Sick Leave</p>
                                @php
                                    $sickLeaveType = App\Models\LeaveType::where('name', 'sick')->first();
                                    $sickLeaveBalance = $sickLeaveType ? Auth::user()->leaveBalances()->where('leave_type_id', $sickLeaveType->id)->first() : null;
                                    $usedSickLeaves = $sickLeaveType ? (int)Auth::user()->leaves()->where('leave_type_id', $sickLeaveType->id)->where('status', 'Approved')->sum('total_days') : 0;
                                    $allocatedSick = $sickLeaveBalance ? (int)$sickLeaveBalance->allocated : 14;
                                @endphp
                                <h4 class="card-title">{{ $usedSickLeaves }}/{{ $allocatedSick }}</h4>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-info bubble-shadow-small"
                        >
                          <i class="fas fa-user-check"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Yearly leave</p>
                          @php
                              $yearlyLeaveType = App\Models\LeaveType::where('name', 'yearly')->first();
                              $yearlyLeaveBalance = $yearlyLeaveType ? Auth::user()->leaveBalances()->where('leave_type_id', $yearlyLeaveType->id)->first() : null;
                              $usedYearlyLeaves = $yearlyLeaveType ? (int)Auth::user()->leaves()->where('leave_type_id', $yearlyLeaveType->id)->where('status', 'Approved')->sum('total_days') : 0;
                              $allocatedYearly = $yearlyLeaveBalance ? (int)$yearlyLeaveBalance->allocated : 14;
                          @endphp
                          <h4 class="card-title">{{ $usedYearlyLeaves }}/{{ $allocatedYearly }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-success bubble-shadow-small"
                        >
                          <i class="fas fa-luggage-cart"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Pending Leaves</p>
                          <h4 class="card-title">{{ (int)Auth::user()->leaves()->where('status', 'Pending')->count() }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-secondary bubble-shadow-small"
                        >
                          <i class="far fa-check-circle"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Approved Leaves</p>
                          <h4 class="card-title">{{ (int)Auth::user()->leaves()->where('status', 'Approved')->count() }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </div>
      <div class="card my-4 shadow-sm border-0">
        <!-- Dashboard Header -->
        <div class="dashboard-header">
            <h1 class="dashboard-title">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </h1>
        </div>
        
        <div class="card-body px-0 pb-2">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card mb-3 border-0 shadow-sm">
                      <div class="card-header">
                        <i class="fas fa-user-circle me-2"></i> Employee Information
                      </div>
                      <div class="card-body">
                        <div class="info-row">
                          <div class="info-label"><strong>Employee ID:</strong> {{ Auth::user()->id }}</div>
                        </div>
                        <div class="info-row">
                          <div class="info-label"><strong>Department:</strong> {{ Auth::user()->department->name ?? 'Not Assigned' }}</div>
                        </div>
                        <div class="info-row">
                          <div class="info-label"><strong>Job Title:</strong> {{ Auth::user()->job_title }}</div>
                        </div>
                        <div class="info-row">
                          <div class="info-label"><strong>Email:</strong> {{ Auth::user()->email }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card mb-3 border-0 shadow-sm">
                      <div class="card-header">
                        <i class="fas fa-link me-2"></i> Quick Links
                      </div>
                      <div class="card-body">
                        <a href="{{ route('leaves.create') }}" class="btn btn-dark w-100 mb-3">
                          <i class="fas fa-calendar-alt me-2"></i> Apply for Leave
                        </a>
                        <a href="{{ route('attendances.index') }}" class="btn btn-dark w-100 mb-3">
                          <i class="fas fa-clock me-2"></i> View Attendance
                        </a>
                        
                        <div class="check-buttons mt-3">
  <form action="{{ route('attendance.check-in') }}" method="POST" class="d-inline me-1">
    @csrf
    <button type="submit" class="btn btn-yellow equal-width-btn" {{ isset($currentAttendance) && $currentAttendance->check_in ? 'disabled' : '' }}>
      <i class="fas fa-sign-in-alt me-2"></i> Check In
    </button>
  </form>
  <form action="{{ route('attendance.check-out') }}" method="POST" class="d-inline">
    @csrf
    <button type="submit" class="btn btn-dark equal-width-btn" {{ !isset($currentAttendance) || !$currentAttendance->check_in || isset($currentAttendance) && $currentAttendance->check_out ? 'disabled' : '' }}>
      <i class="fas fa-sign-out-alt me-2"></i> Check Out
    </button>
  </form>
</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="card card1">
              <div class="card-header">
                <i class="fas fa-calendar-check me-2"></i> Recent Leave Requests
              </div>
              <div class="card-body">
                @php
                $recentLeaves = Auth::user()->leaves()->latest()->take(5)->get();
                @endphp
                @if ($recentLeaves->isEmpty())
                <div class="alert text-center py-3" role="alert" style="background-color: #f8f9fa;">You have no recent leave requests.</div>
                @else
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Leave Type</th>
                        <th>Period</th>
                        <th>Days</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($recentLeaves as $leave)
                      <tr>
                        <td>{{ $leave->leavetype->name ?? 'N/A' }}</td>
                        <td>{{ $leave->start_date->format('d/m/Y') }} - {{ $leave->end_date->format('d/m/Y') }}</td>
                        <td>{{ (int)$leave->total_days }}</td>
                        <td>
                          @if($leave->status == 'Pending')
                          <span class="badge" style="background-color: #FFC107;">Pending</span>
                          @elseif($leave->status == 'Approved')
                          <span class="badge" style="background-color: #198754;">Approved</span>
                          @elseif($leave->status == 'Rejected')
                          <span class="badge bg-danger">Rejected</span>
                          @else
                          <span class="badge bg-secondary">{{ $leave->status }}</span>
                          @endif
                        </td>
                        <td>
                          <div class="btn-group" role="group">
                            <a href="{{ route('leaves.show', $leave->id) }}" class="btn btn-sm" style="background-color: #ffde59; color: white;">View</a>
                            @if($leave->status == 'Pending')
                            <a href="{{ route('leaves.edit', $leave->id) }}" class="btn btn-sm btn-dark">Edit</a>
                            @endif
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                @endif
              </div>
              <div class="card-footer">
                <a href="{{ route('leaves.index') }}" class="btn view-all-btn">
                  <i class="fas fa-list me-1"></i> View All
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
    :root {
        --main-yellow: #dcd6c8;
        --yellow-light: #FFF8DC;
        --yellow-dark: #dcd6c8;
        --accent-dark: #333333;
        --accent-light: #FFFFFF;
    }
    
    body {
        background-color: var(--yellow-light);
        font-family: Arial, sans-serif;
    }
    
    .dashboard-header {
        background-color: #d4b773;
        padding: 20px;
        margin-bottom: 30px;
        border-radius: 0 0 20px 20px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .dashboard-title {
        color: #343434;
        font-size: 28px;
        font-weight: bold;
        margin: 0;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    
    
    .card1{
      margin-top: 50px;
    }


    .card {
        /* margin-top: 50px; */
        background-color: var(--accent-light);
        border: none !important;
        border-radius: 15px !important;
        margin-bottom: 25px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        overflow: hidden;
    }
    
    .card-header {
        background-color: var(--main-yellow);
        color: var(--accent-dark);
        font-weight: bold;
        padding: 15px 20px;
        border-bottom: none;
        font-size: 18px;
    }
    
    .info-row {
        padding: 12px 15px;
        border-bottom: 1px solid #f0f0f0;
        display: flex;
    }
    
    .info-row:last-child {
        border-bottom: none;
    }
    
    .info-label {
        font-weight: bold;
        color: var(--accent-dark);
    }
    
    .btn-yellow {
        background-color: var(--main-yellow);
        color: var(--accent-dark);
        font-weight: bold;
        border: none;
        padding: 12px;
        border-radius: 10px;
        margin-bottom: 15px;
        transition: all 0.3s;
    }
    
    .btn-yellow:hover {
        background-color: var(--yellow-dark);
        color: var(--accent-light);
    }
    
    .btn-dark {
        background-color: var(--accent-dark);
        color: var(--main-yellow);
        font-weight: bold;
        border: none;
        padding: 12px;
        border-radius: 10px;
        margin-bottom: 15px;
        transition: all 0.3s;
    }
    
    .btn-dark:hover {
        background-color: #555;
        color: var(--main-yellow);
    }
    
    .check-buttons {
        display: flex;
        justify-content: space-between;
        gap: 10px;
    }
    
    .check-buttons .btn {
        flex: 1;
    }
    
    .table {
        margin-bottom: 0;
    }
    
    .table thead {
        background-color: var(--main-yellow);
    }
    
    .table thead th {
        color: var(--accent-dark);
        font-weight: bold;
        border: none;
        text-transform: uppercase;
        font-size: 14px;
    }
    
    .table tbody tr:hover {
        background-color: var(--yellow-light);
    }
    
    .badge {
        padding: 8px 12px;
        border-radius: 20px;
        font-weight: normal;
    }
    
    .card-footer {
        background-color: var(--accent-light);
        border-top: 1px solid #f0f0f0;
        padding: 15px;
        text-align: right;
    }
    
    .view-all-btn {
        background-color: var(--accent-dark);
        color: var(--main-yellow);
        border: none;
        padding: 8px 20px;
        border-radius: 20px;
        font-weight: bold;
        transition: all 0.3s;
    }
    
    .view-all-btn:hover {
        background-color: #555;
        color: var(--main-yellow);
    }
    
    .btn-group .btn {
        border-radius: 5px !important;
        margin: 0 2px;
    }

    /* تصميم بطاقات الإحصائيات المصغرة */
.card-stats {
  border-radius: 8px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
  transition: all 0.25s ease;
  margin-bottom: 15px;
  border: none;
  position: relative;
  overflow: hidden;
}

.card-stats:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.card-stats .card-body {
  padding: 15px 10px;
}

.card-stats .row {
  flex-direction: column;
  text-align: center;
}

.col-icon {
  margin-bottom: 10px;
}

.col-stats {
  padding: 0;
  margin: 0 !important;
}

.card-category {
  font-size: 12px;
  color: #8e8e8e;
  font-weight: 500;
  margin-bottom: 5px;
  text-transform: uppercase;
  letter-spacing: 0.3px;
}

.card-title {
  font-size: 20px;
  font-weight: 600;
  margin: 0;
  color: #1a2035;
}

/* تصميم الأيقونات */
.icon-big {
  width: 55px;
  height: 55px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  margin: 0 auto;
}

.bubble-shadow-small {
  position: relative;
}

.bubble-shadow-small::before {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  opacity: 0.12;
  transform: scale(1.1);
  z-index: -1;
}

/* ألوان الأيقونات */
.icon-primary {
  color: #1572E8;
}
.icon-primary.bubble-shadow-small::before {
  background-color: #1572E8;
  box-shadow: 0 0 10px #1572E8;
}

.icon-info {
  color: #48ABF7;
}
.icon-info.bubble-shadow-small::before {
  background-color: #48ABF7;
  box-shadow: 0 0 10px #48ABF7;
}

.icon-success {
  color: #31CE36;
}
.icon-success.bubble-shadow-small::before {
  background-color: #31CE36;
  box-shadow: 0 0 10px #31CE36;
}

.icon-secondary {
  color: #6861CE;
}
.icon-secondary.bubble-shadow-small::before {
  background-color: #6861CE;
  box-shadow: 0 0 10px #6861CE;
}

/* تحسينات للموبايل */
@media (max-width: 767.98px) {
  .card-stats {
    margin-bottom: 12px;
  }
  
  .icon-big {
    width: 45px;
    height: 45px;
    font-size: 18px;
  }
  
  .card-title {
    font-size: 18px;
  }
  
  .card-category {
    font-size: 11px;
  }
}
</style>

@endsection