<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talent Wave Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
      overflow-x: hidden;
    }

    .wrapper {
      display: flex;
      position: relative;
    }

    .sidenav {
      width: 260px;
      height: 100vh;
      background-color: #343434; /* Changed to dark background */
      position: fixed;
      left: 0;
      top: 0;
      overflow-y: auto;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      z-index: 1000;
    }

    .main-content {
      margin-left: 260px;
      width: calc(100% - 260px);
      padding: 20px;
      min-height: 100vh;
    }

    .sidenav-header {
      padding: 20px 16px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid rgba(212, 183, 115, 0.3); /* Changed border color */
      margin-bottom: 10px;
      background-color: #343434; /* Added background color */
    }

    .navbar-brand {
      display: flex;
      align-items: center;
      text-decoration: none;
      color: #fff; /* Changed text color */
    }

    .navbar-brand-img {
      margin-right: 12px;
    }

    .navbar-brand span {
      font-size: 16px;
      font-weight: 500;
      color: #dcd6c8; /* Changed text color */
      text-shadow: 1px 1px 2px rgba(0,0,0,0.5); /* Added text shadow */
    }

    .navbar-nav {
      list-style: none;
      padding: 0;
      margin: 0;
      flex: 1;
    }

    .nav-item {
      margin: 6px 0;
    }

    .nav-link {
      display: flex;
      align-items: center;
      text-decoration: none;
      color: #fff; /* Changed text color */
      padding: 14px 20px;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      background-color: rgba(212, 183, 115, 0.1); /* Changed hover color */
      color: #d4b773; /* Changed text color on hover */
    }

    /* Important: Style for active menu item */
    .nav-item.active .nav-link {
      background-color: rgba(212, 183, 115, 0.2); /* Changed active color */
      color: #d4b773; /* Changed text color for active */
      border-left: 4px solid #d4b773; /* Added border */
    }

    .icon {
      width: 20px;
      height: 20px;
      margin-right: 15px;
      fill: currentColor;
    }

    /* Logout section styling */
    .logout-section {
      margin-top: auto;
      padding-bottom: 20px;
      border-top: 1px solid rgba(212, 183, 115, 0.3); /* Changed border color */
      margin-top: 20px;
      padding-top: 10px;
    }

    .logout-button {
      display: flex;
      align-items: center;
      color: #fff; /* Changed text color */
      padding: 14px 20px;
      border: none;
      background-color: transparent;
      cursor: pointer;
      transition: all 0.3s ease;
      width: 100%;
      text-align: left;
      font-family: inherit;
      font-size: 14px;
    }

    .logout-button:hover {
      background-color: rgba(212, 183, 115, 0.1); /* Changed hover color */
      color: #d4b773; /* Changed text color on hover */
    }

    .navbar-collapse {
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    /* Sample content styling */
    .content-card {
      background: white;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      margin-bottom: 20px;
    }

    /* SVG Icons */
    .nav-icon {
      display: inline-block;
      width: 20px;
      height: 20px;
      margin-right: 15px;
      color: #d4b773; /* Changed icon color */
    }
    
    /* Customizing scrollbar */
    .sidenav::-webkit-scrollbar {
      width: 8px;
    }
    
    .sidenav::-webkit-scrollbar-track {
      background-color: rgba(212, 183, 115, 0.1);
    }
    
    .sidenav::-webkit-scrollbar-thumb {
      background-color: #d4b773;
      border-radius: 4px;
    }

    .submenu {
    display: none;
    list-style: none;
    padding: 0;
    margin: 0;
}

.submenu.show {
    display: block;
}

  </style>
</head>

<body>
    <div class="">
        <!-- Sidebar -->
        <aside class="sidenav">
            <div class="sidenav-header">
            <a class="navbar-brand" href="{{route('dashboard')}}">
          <img src="{{asset('../assets/img/logo.png')}}" class="navbar-brand-img"  
          height="120"
          width="120"
          style="margin-left: -20px; margin-top:-35px; margin-bottom: -50px;" alt="Rafeeq Logo">
          <span style="color: #dcd6c8; font-weight: bold; font-size: 18px; letter-spacing: 1px; vertical-align: middle; display: inline-block; margin-left: -35px;">Rafeeq</span>
        </a>
            </div>

            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.attendances') }}">
                            <svg class="nav-icon" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path>
                                <path fill="currentColor" d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"></path>
                            </svg>
                            <span>Attendance</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link submenu-toggle" href="#usersSubmenu" data-toggle="collapse">
                            <svg class="nav-icon" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                            </svg>
                            <span>Users</span>
                            <svg class="nav-icon toggle-icon" viewBox="0 0 24 24" width="16" height="16">
                                <path fill="currentColor" d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
                            </svg>
                        </a>
                        <ul class="submenu" id="usersSubmenu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('all_users') }}">
                                    <span>All Users</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.create') }}">
                                    <span>Add New User</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('deletedeusers.index') }}">
                                    <span>Deleted User</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    @if(Auth::guard('admin')->user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link submenu-toggle" href="#hrSubmenu" data-toggle="collapse">
                            <svg class="nav-icon" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"></path>
                            </svg>
                            <span>HR</span>
                            <svg class="nav-icon toggle-icon" viewBox="0 0 24 24" width="16" height="16">
                                <path fill="currentColor" d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
                            </svg>
                        </a>
                        <ul class="submenu" id="hrSubmenu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('hr.index') }}">
                                    <span>All HRs</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('hr.create') }}">
                                    <span>Add New HR</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('hr.index_deleted') }}">
                                    <span>Deleted HRs</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link submenu-toggle" href="#departmentSubmenu" data-toggle="collapse">
                            <svg class="nav-icon" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z"></path>
                            </svg>
                            <span>Departments</span>
                            <svg class="nav-icon toggle-icon" viewBox="0 0 24 24" width="16" height="16">
                                <path fill="currentColor" d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
                            </svg>
                        </a>
                        <ul class="submenu" id="departmentSubmenu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('all_department') }}">
                                    <span>All Departments</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('all.deleted_departments') }}">
                                    <span>Deleted Departments</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link submenu-toggle" href="#leavesSubmenu" data-toggle="collapse">
                            <svg class="nav-icon" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                            </svg>
                            <span>Leaves</span>
                            <svg class="nav-icon toggle-icon" viewBox="0 0 24 24" width="16" height="16">
                                <path fill="currentColor" d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
                            </svg>
                        </a>
                        <ul class="submenu" id="leavesSubmenu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.leaves.index') }}">
                                    <span>Employee Leaves</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.leave-balances.index') }}">
                                    <span>Employee leave balance</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.leave-types.index') }}">
                                    <span>Leaves types</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('document.index')}}">
                            <svg class="nav-icon" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"></path>
                            </svg>
                            <span>Documents</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('document_type.index')}}">
                            <svg class="nav-icon" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm-2 16c-2.05 0-3.81-1.24-4.58-3h1.71c.63.9 1.68 1.5 2.87 1.5 1.93 0 3.5-1.57 3.5-3.5S13.93 9.5 12 9.5c-1.35 0-2.52.78-3.1 1.9l1.6 1.6h-4V9l1.3 1.3C8.69 8.92 10.23 8 12 8c2.76 0 5 2.24 5 5s-2.24 5-5 5z"></path>
                            </svg>
                            <span>Documents Type</span>
                        </a>
                    </li>

                    

                    <div class="separator"></div>
                    

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('hr.show', ['id' => Auth::guard('admin')->user()->id]) }}">
                            <svg class="nav-icon" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                            </svg>
                            <span>Profile</span>
                        </a>
                    </li>
                </ul>

                <div class="logout-section">
                    <form action="{{route('admin_logout')}}" method="POST" id="logout-form">
                        @csrf
                        <button type="submit" class="logout-button">
                            <svg class="nav-icon" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"></path>
                            </svg>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </aside>
    </div>

    <script>
        // Add toggle functionality for submenus
        document.addEventListener('DOMContentLoaded', function() {
            const submenuToggles = document.querySelectorAll('.submenu-toggle');

            submenuToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    const submenu = document.querySelector(targetId);

                    submenu.classList.toggle('show');

                    // Toggle the arrow icon
                    const arrow = this.querySelector('.toggle-icon');
                    if (submenu.classList.contains('show')) {
                        arrow.style.transform = 'rotate(180deg)';
                    } else {
                        arrow.style.transform = 'rotate(0)';
                    }
                });
            });

            // Mobile menu toggle functionality
            const menuToggle = document.querySelector('.menu-toggle');
            const sidenav = document.querySelector('.sidenav');

            if (menuToggle) {
                menuToggle.addEventListener('click', function() {
                    sidenav.classList.toggle('show');
                });
            }
        });
    </script>
</body>

</html>