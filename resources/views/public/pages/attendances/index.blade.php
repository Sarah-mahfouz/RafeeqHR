@extends('layouts.public')
@section('content')

<div class="container-fluid py-4" style="background-color: #f9f5eb;">
  <div class="row">
    <div class="col-12">
      <div class="card my-4" style="border-radius: 15px; box-shadow: 0 8px 16px #d4b773; border: none;">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div style="background: linear-gradient(to right, #d4b773, #d4b773); border-radius: 15px; padding: 20px;" >
            <h1 class="text-white text-capitalize ps-3 mb-0">Attendances</h1>
          </div>
        </div>
        <div class="card-body px-3 pb-2">
          <form action="{{ route('attendance.check-in') }}" method="POST" class="d-inline mx-2">
            @csrf
            <button type="submit" class="btn" style="background-color: #d4b773; color: white; font-weight: 600; border-radius: 5px; padding: 10px 25px;" {{ isset($currentAttendance) && $currentAttendance->check_in ? 'disabled' : '' }}>
              <i class="fas fa-sign-in-alt me-2"></i>Check In
            </button>
          </form>
          <form action="{{ route('attendance.check-out') }}" method="POST" class="d-inline mx-2">
            @csrf
            <button type="submit" class="btn" style="background-color: #e6bc8b; color: white; font-weight: 600; border-radius: 5px; padding: 10px 25px;" {{ !isset($currentAttendance) || !$currentAttendance->check_in || isset($currentAttendance) && $currentAttendance->check_out ? 'disabled' : '' }}>
              <i class="fas fa-sign-out-alt me-2"></i>Check Out
            </button>
          </form>
          @if (session('success'))
          <div class="alert alert-success mx-3" role="alert" style="background-color: #eee6ce; color: #6d5b33; border-color: #e2d7b5;">
            {{ session('success') }}
          </div>
          @endif

          @if (session('error'))
          <div class="alert alert-danger mx-3" role="alert" style="background-color: #f8d7da; color: #721c24; border-color: #f5c6cb;">
            {{ session('error') }}
          </div>
          @endif

          @if(isset($currentAttendance))
          <div class="row mx-1 mb-4">
            <div class="col-md-6 mb-3 mb-md-0">
              <div class="card h-100" style="border-radius: 10px; border: 1px solid #e6d7bf; box-shadow: 0 4px 8px ; background-color: #fcf9f3;">
                <div class="card-header pb-0" style="background-color: #fcf9f3; border-bottom: 2px solid #f8b400;">
                  <h6 style="font-weight: 700; color: #6d5b33;">Today's Attendance</h6>
                  <p class="text-sm">
                    <span id="current-time" class="font-weight-bold" style="color: #f8b400;">{{ now()->format('H:i:s') }}</span>
                    <span class="text-secondary">{{ now()->format('l, d F Y') }}</span>
                  </p>
                </div>
                <div class="card-body pt-2">
                  <div class="row">
                    <div class="col-6">
                      <p class="text-sm mb-0"><strong style="color: #6d5b33;">Check In:</strong></p>
                      <p style="color: #f8b400; font-weight: 600;">
                        {{ $currentAttendance->check_in ? $currentAttendance->check_in->format('H:i:s') : 'Not checked in yet' }}
                      </p>
                    </div>
                    <div class="col-6">
                      <p class="text-sm mb-0"><strong style="color: #6d5b33;">Check Out:</strong></p>
                      <p style="color: #b8935f; font-weight: 600;">
                        {{ $currentAttendance->check_out ? $currentAttendance->check_out->format('H:i:s') : 'Not checked out yet' }}
                      </p>
                    </div>
                  </div>
                  @if($currentAttendance->check_in && $currentAttendance->check_out)
                  <div class="alert mt-3" style="background-color: #f5eee0; border-left: 4px solid #f8b400; padding: 10px;">
                    <strong style="color: #6d5b33;">Total Hours:</strong> <span style="color: #f8b400; font-weight: 600;">{{ $currentAttendance->total_hours }} hours</span>
                  </div>
                  @endif
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card h-100" style="border-radius: 10px; border: 1px solid #e6d7bf; box-shadow: 0 4px 8px ; background-color: #fcf9f3;">
                <div class="card-header pb-0" style="background-color: #fcf9f3; border-bottom: 2px solid #f8b400;">
                  <h6 style="font-weight: 700; color: #6d5b33;">Attendance Statistics</h6>
                  <p class="text-sm" style="color: #b8935f;">Statistics from your recent attendance records</p>
                </div>
                <div class="card-body pt-2">
                  @php
                  $totalHours = 0;
                  $presentDays = 0;
                  $lateDays = 0;

                  foreach($recentAttendances as $attendance) {
                  $totalHours += $attendance->total_hours ?? 0;

                  if($attendance->status == 'present') {
                  $presentDays++;
                  }

                  if($attendance->status == 'late') {
                  $lateDays++;
                  }
                  }
                  @endphp
                  <div class="row g-0">
                    <div class="col-4">
                      <div class="p-2 text-center">
                        <h3 class="mb-0" style="color: #d4b773; font-weight: 700;">{{ $presentDays }}</h3>
                        <p class="text-xs mb-0" style="color: #6d5b33;">Present Days</p>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="p-2 text-center">
                        <h3 class="mb-0" style="color: #d4b773; font-weight: 700;">{{ $lateDays }}</h3>
                        <p class="text-xs mb-0" style="color: #6d5b33;">Late Days</p>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="p-2 text-center">
                        <h3 class="mb-0" style="color: #d4b773 ; font-weight: 700;">{{ number_format($totalHours, 1) }}</h3>
                        <p class="text-xs mb-0" style="color: #6d5b33;">Total Hours</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif

          <div class="table-responsive p-0 mt-4">
            <table class="table text-center mb-0">
              <thead>
                <tr style="background-color: #f5eee0;">
                  <th class="text-uppercase font-weight-bolder" style="color: #6d5b33; font-size: 0.7rem;">Attendance Date</th>
                  <th class="text-uppercase font-weight-bolder" style="color: #6d5b33; font-size: 0.7rem;">Check In</th>
                  <th class="text-uppercase font-weight-bolder" style="color: #6d5b33; font-size: 0.7rem;">Check Out</th>
                  <th class="text-uppercase font-weight-bolder" style="color: #6d5b33; font-size: 0.7rem;">Total Hours</th>
                  <th class="text-uppercase font-weight-bolder" style="color: #6d5b33; font-size: 0.7rem;">Overtime Hours</th>
                  <th class="text-uppercase font-weight-bolder" style="color: #6d5b33; font-size: 0.7rem;">Shortage Hours</th>
                  <th class="text-center text-uppercase font-weight-bolder" style="color: #6d5b33; font-size: 0.7rem;">Status</th>
                </tr>
              </thead>
              <tbody>
                @if($recentAttendances->isEmpty())
                <tr>
                  <td colspan="6" class="text-center" style="color: #b8935f;">No attendance records found.</td>
                </tr>
                @else
                @foreach($recentAttendances as $attendance)
                <tr style="border-bottom: 1px solid #e6d7bf;">
                  <td style="padding: 12px;">{{ $attendance->date->format('d/m/Y') }}</td>
                  <td style="padding: 12px;">{{ $attendance->check_in ? $attendance->check_in->format('H:i:s') : '-' }}</td>
                  <td style="padding: 12px;">{{ $attendance->check_out ? $attendance->check_out->format('H:i:s') : '-' }}</td>
                  <td style="padding: 12px;">{{ $attendance->total_hours ?? '-' }}</td>
                  <td style="padding: 12px;">{{ $attendance->overtime_hours ?? '-' }}</td>
                  <td style="padding: 12px;">{{ $attendance->shortage_hours ?? '-' }}</td>
                  <td class="text-center" style="padding: 12px;">
                    @if($attendance->status == 'present')
                    <span class="badge" style="background-color: #8db600; color: white; padding: 5px 10px; border-radius: 4px;">Present</span>
                    @elseif($attendance->status == 'late')
                    <span class="badge" style="background-color: #f8b400; color: white; padding: 5px 10px; border-radius: 4px;">Late</span>
                    @elseif($attendance->status == 'absent')
                    <span class="badge" style="background-color: #e67e22; color: white; padding: 5px 10px; border-radius: 4px;">Absent</span>
                    @else
                    <span class="badge" style="background-color: #b8935f; color: white; padding: 5px 10px; border-radius: 4px;">{{ ucfirst($attendance->status) }}</span>
                    @endif
                  </td>
                </tr>
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
  
  function updateTime() {
    const now = new Date();
    const timeString = now.toLocaleTimeString();
    document.getElementById('current-time').textContent = timeString;
  }

  
  updateTime();
  setInterval(updateTime, 1000);
</script>
@endpush