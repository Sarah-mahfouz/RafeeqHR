<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <ul class="navbar-nav d-flex align-items-center  justify-content-end">
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<style>
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    /* Reset and Base Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    body {
      background-color: #f4f7fa;
      min-height: 100vh;
      padding: 20px;
    }
    
    /* Main Header Styles */


    .main-header{
        margin-top: -55px;
        border: 1px  #dcd6c8;
        background-color: #dcd6c8;
        border-radius: 8px;
        padding: 10px 10px;
    }



    .top-nav-header {
      background-color: #fff;
      padding: 12px 20px;
      box-shadow: 0 2px 15px rgba(0,0,0,0.08);
      border-radius: 8px;
      margin-bottom: 20px;
    }
    
    .top-nav-logo-section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-bottom: 10px;
      border-bottom: 1px solid #f0f0f0;
    }
    
    .top-nav-logo {
      height: 24px;
    }
    
    .top-nav-toggle-buttons {
      display: flex;
      gap: 10px;
    }
    
    .btn-toggle {
      background: none;
      border: none;
      color: #718096;
      font-size: 18px;
      cursor: pointer;
      padding: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.2s;
    }
    
    .btn-toggle:hover {
      color: #4a5568;
    }
    
    .top-nav-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      padding-top: 12px;
    }
    
   
    .top-nav-search-box {
      position: relative;
      width: 350px;
    }
    
    .top-nav-search-icon {
      position: absolute;
      left: 100px;
      top: 50%;
      transform: translateY(-50%);
      color: #777;
    }
    
    .top-nav-search-input {
      width: 100%;
      padding: 10px 10px 10px 35px;
      border: 1px solid #e8e8e8;
      border-radius: 30px;
      font-size: 14px;
      background-color: #f8f9fa;
      outline: none;
      transition: all 0.3s;
    }
    
    .top-nav-search-input:focus {
      border-color: #cbd5e0;
      box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.15);
    }
    
    
    .top-nav-right {
      display: flex;
      align-items: center;
    }
    
    .top-nav-icon {
      position: relative;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
          margin-left: 900px;
      color: #4a5568;
      cursor: pointer;
      transition: all 0.2s;
      border-radius: 50%;
    }
    
    .top-nav-icon:hover {
      background-color: #f7fafc;
    }
    
    .top-nav-icon i {
      font-size: 18px;
    }
    
    
    .top-nav-badge {
      position: absolute;
      top: 5px;
      right: 5px;
      background-color: #2ecc71;
      color: white;
      min-width: 18px;
      height: 18px;
      font-size: 11px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      padding: 0 5px;
    }
    
    
    .top-nav-user-profile {
      display: flex;
      align-items: center;
      margin-left: 20px;
      cursor: pointer;
      padding: 5px 10px;
      border-radius: 30px;
      transition: all 0.2s;
    }
    
    .top-nav-user-profile:hover {
      background-color: #f7fafc;
    }
    
    .top-nav-profile-img {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid #f2f2f2;
    }
    
    .top-nav-profile-text {
      margin-left: 10px;
      font-size: 14px;
      color: #555;
    }
    
    .top-nav-profile-text strong {
      color: #333;
    }
    
    
    .quick-actions-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 15px 10px;
      transition: all 0.2s;
      border-radius: 8px;
    }
    
    .quick-actions-item:hover {
      background-color: #f7fafc;
    }
    
    .avatar-item {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 8px;
      color: white;
    }
    
    .bg-danger { background-color: #e74c3c; }
    .bg-warning { background-color: #f39c12; }
    .bg-info { background-color: #3498db; }
    .bg-success { background-color: #2ecc71; }
    .bg-primary { background-color: #3498db; }
    .bg-secondary { background-color: #95a5a6; }
    
    
    .dropdown-menu {
      position: absolute;
      right: 0;
      top: 100%;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 5px 25px rgba(0,0,0,0.1);
      width: 300px;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s;
      z-index: 1000;
      margin-top: 10px;
      border: 1px solid #eee;
      overflow: hidden;
    }
    
    
    .dropdown-menu.show {
      opacity: 1;
      visibility: visible;
    }
    
    .dropdown-title {
      padding: 15px;
      border-bottom: 1px solid #f0f0f0;
      font-weight: 600;
      color: #2d3748;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .dropdown-title a {
      color: #3498db;
      text-decoration: none;
      font-size: 12px;
    }
    
    .notif-scroll, .message-notif-scroll, .quick-actions-scroll {
      max-height: 300px;
      overflow-y: auto;
    }
    
    .notif-center a, .dropdown-menu a {
      display: flex;
      padding: 12px 15px;
      color: #4a5568;
      text-decoration: none;
      border-bottom: 1px solid #f7fafc;
      transition: all 0.2s;
    }
    
    .notif-center a:hover, .dropdown-menu a:hover {
      background-color: #f7fafc;
    }
    
    .notif-img {
      width: 40px;
      height: 40px;
      margin-right: 15px;
    }
    
    .notif-img img {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      object-fit: cover;
    }
    
    .notif-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      color: white;
    }
    
    .notif-content {
      flex: 1;
    }
    
    .notif-content .subject, .notif-content .block {
      display: block;
    }
    
    .notif-content .subject {
      font-weight: 600;
      color: #2d3748;
    }
    
    .notif-content .time {
      font-size: 12px;
      color: #a0aec0;
      margin-top: 4px;
      display: block;
    }
    
    .see-all {
      padding: 12px 15px;
      text-align: center;
      color: #3498db;
      font-weight: 600;
      display: block;
      text-decoration: none;
      border-top: 1px solid #f0f0f0;
    }
    
    .see-all i {
      margin-left: 5px;
    }

    
    .user-box {
      padding: 15px;
      display: flex;
      align-items: center;
      border-bottom: 1px solid #f0f0f0;
    }
    
    .avatar-lg {
      width: 60px;
      height: 60px;
      margin-right: 15px;
    }
    
    .avatar-lg img {
      width: 100%;
      height: 100%;
      border-radius: 8px;
      object-fit: cover;
    }
    
    .u-text h4 {
      margin: 0;
      color: #2d3748;
      font-size: 16px;
      font-weight: 600;
    }
    
    .u-text p {
      margin: 5px 0 10px;
      color: #a0aec0;
      font-size: 13px;
    }
    
    .btn-xs {
      padding: 5px 10px;
      font-size: 12px;
      border-radius: 4px;
      background-color: #718096;
      color: white;
      text-decoration: none;
      display: inline-block;
      transition: all 0.2s;
    }
    
    .btn-xs:hover {
      background-color: #4a5568;
    }
    
    .dropdown-divider {
      height: 1px;
      background-color: #f0f0f0;
      margin: 5px 0;
    }
    
    
    .quick-actions-items {
      padding: 10px;
    }
    
    .row {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -5px;
    }
    
    .col-6 {
      width: 50%;
      padding: 5px;
    }
    
    .col-md-4 {
      width: 33.333333%;
    }
    
    
    @media (max-width: 992px) {
      .col-md-4 {
        width: 50%;
      }
    }
    
    @media (max-width: 768px) {
      .top-nav-search-box {
        width: 200px;
      }
      
      .top-nav-profile-text {
        display: none;
      }
      
      .dropdown-menu {
        width: 280px;
      }
    }
    
    @media (max-width: 576px) {
      .top-nav-search-box {
        width: 150px;
      }
      
      .top-nav-logo-section {
        padding-bottom: 5px;
      }
      
      .top-nav-container {
        padding-top: 5px;
      }
      
      .col-md-4, .col-6 {
        width: 100%;
      }
    }
    
    
    .dropdown-container {
      position: relative;
    }
  </style>

<div class="main-header">
    
   
    <div class="top-nav-container">
      
      
    
      <div class="top-nav-right">
      
        
        
       
        <div class="dropdown-container">
          <div class="top-nav-icon top-nav-notification-icon" id="notifDropdown">
          </div>
          
          <!-- Notifications Dropdown -->
         
        </div>
        
        
        
        <!-- User Profile -->
            <div class="dropdown-container">
            <div class="top-nav-user-profile" id="userProfileDropdown">
        <img src="{{ Auth::user()->profile_picture ?? '/api/placeholder/40/40' }}" alt="User Profile" class="top-nav-profile-img">
        <span class="top-nav-profile-text">
            <strong>{{ Auth::user()->name }}</strong>
              </span>
          </div>
                
          <!-- User Profile Dropdown -->
          <div class="dropdown-menu user-dropdown">
                      <div class="user-box">
                <div class="avatar-lg">
                    <img src="{{ Auth::user()->profile_picture ?? '/api/placeholder/60/60' }}" alt="User Profile" class="avatar-img rounded">
                </div>
                <div class="u-text">
                    <h4>{{ Auth::user()->name }}</h4>
                </div>
            </div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('profile.index')}}" style="background-color:rgb(207, 192, 150);">My Profile</a>
            <div class="dropdown-divider"></div>
            <div class="logout-section">
          <form id="logout-form" action="{{ route('logout') }}" method="POST" >
            @csrf
            <button type="submit" class="logout-button bg-dark">
              <svg class="nav-icon" viewBox="0 0 24 24">
                <path fill="currentColor" d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"></path>
              </svg>
              <span>Logout</span>
            </button>
          </form>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  
  <!-- JavaScript for dropdown functionality -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Get all dropdown triggers
      const dropdownTriggers = [
        document.getElementById('messageDropdown'),
        document.getElementById('notifDropdown'),
        document.getElementById('quickActionsDropdown'),
        document.getElementById('userProfileDropdown')
      ];
      
      // Get all dropdown menus
      const dropdownMenus = [
        document.querySelector('.messages-dropdown'),
        document.querySelector('.notifications-dropdown'),
        document.querySelector('.quick-actions-dropdown'),
        document.querySelector('.user-dropdown')
      ];
      
      // Add click event listeners to each trigger
      dropdownTriggers.forEach((trigger, index) => {
        if (trigger) {
          trigger.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent event bubbling
            
            // Close all other dropdowns
            dropdownMenus.forEach((menu, menuIndex) => {
              if (menuIndex !== index && menu) {
                menu.classList.remove('show');
              }
            });
            
            // Toggle current dropdown
            if (dropdownMenus[index]) {
              dropdownMenus[index].classList.toggle('show');
            }
          });
        }
      });
      
      // Close all dropdowns when clicking outside
      document.addEventListener('click', function() {
        dropdownMenus.forEach(menu => {
          if (menu) {
            menu.classList.remove('show');
          }
        });
      });
      
      // Prevent clicks inside dropdown from closing it
      dropdownMenus.forEach(menu => {
        if (menu) {
          menu.addEventListener('click', function(e) {
            e.stopPropagation();
          });
        }
      });
    });
  </script>

