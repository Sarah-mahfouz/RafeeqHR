<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Rafeeq HR</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset("assets/img/logo.png") }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset("assets/css/main.css")}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Dewi
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    .pricing-card {
      background: white;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }

    .pricing-card:hover {
      transform: scale(1.05);
    }

    .highlight {
      background: #d4b773;
      color: white;
    }

    .price {
      font-size: 24px;
      font-weight: bold;
      color: #d4b773;
    }

    .price1 {
      font-size: 24px;
      font-weight: bold;
      color: #FFffff;
    }

    .btn-orange {
      background: #d4b773;
      color: white;
      font-weight: bold;
    }

    .btn-orange:hover {
      background: #d4b773;
    }

    .light-pink-select {
      background-color: #FFE6E6 !important;
      border-color: #FFCCCC !important;
    }

    .light-pink-select:focus {
      border-color: #FFAAAA !important;
      box-shadow: 0 0 0 0.25rem rgba(255, 192, 203, 0.25) !important;
    }


    .light-pink-select option {
      background-color: white;
    }
  </style>


</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto" >
        
        <img src="{{ asset('assets/img/logo.png') }}" alt="logo"  style="width:70px; height: 70px; margin-left: -10px; ">
        <h1 class="sitename">Rafeeq HR</h1>
        
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#team">Developer</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>


    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{ asset('assets/img/working.jpg') }}" alt="" data-aos="fade-in">

      <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">Simplify HR Management</h2>
        <p data-aos="fade-up" data-aos-delay="200">Track employees, attendance, and leave requests effortlessly</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
        
          
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <!-- About Section -->
                <section id="about" class="about section py-5">
              <div class="container">
              <div class="container section-title position-relative text-center mb-5" data-aos="fade-up" style="padding: 2rem 0; overflow: hidden; border-radius: 8px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03); background-color: rgba(246, 240, 230, 0.2);">
  
              <div class="decorative-line d-flex justify-content-center mb-3">
                <div style="width: 60px; height: 3px; background: linear-gradient(to right, transparent, #d4b773, transparent);"></div>
              </div>
  
 
                <h2 class="fw-bold position-relative d-inline-block" style="transition: transform 0.3s ease;">
                  <span style="background: linear-gradient(45deg, #906f3d, #d4b773); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size: 2.5rem;">About</span>
                
                  <span class="position-absolute start-0 bottom-0" style="height: 4px; width: 100%; background: linear-gradient(to right, transparent, #d4b773 50%, transparent); border-radius: 2px; transition: all 0.4s ease;"></span>
                </h2>
                
                
                <div class="subtitle-container mt-4">
                  <p class="text-muted fst-italic" style="font-size: 1.1rem; letter-spacing: 1px; color: #8a7446;">Discover Our Story</p>
                </div>
                
                
                <div class="position-absolute d-none d-md-block" style="top: -15px; right: 20%; opacity: 0.1; transform: rotate(25deg);">
                  <i class="bi bi-pentagon-fill" style="font-size: 4rem; color: #d4b773;"></i>
                </div>
                <div class="position-absolute d-none d-md-block" style="bottom: -10px; left: 25%; opacity: 0.1; transform: rotate(-15deg);">
                  <i class="bi bi-circle-fill" style="font-size: 2.5rem; color: #906f3d;"></i>
                </div>
              </div>

                <div class="row g-4 align-items-center">
                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-image-container h-100 d-flex flex-column">
                      <div class="flex-grow-1 d-flex align-items-center">
                        <img src="{{ asset('assets/img/picture.jpg') }}" class="img-fluid rounded-4 " alt="HR Management System" style="width: 100%; height: 545px;">
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="about-content h-100">
                      <div class="about-rafeeq h-100" style="background:rgb(226, 216, 192); padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <h3 style="color: #2c3e50; margin-bottom: 20px;">About Rafeeq HR</h3>
                        
                        <p class="trusted-by" style="font-weight: bold; color: #7f8c8d; margin-bottom: 20px;">
                          Trusted by 500+ Companies
                        </p>
                        
                        <p style="margin-bottom: 20px; line-height: 1.8;">
                          Rafeeq HR is a modern, user-friendly human resource management system designed to simplify and automate HR processes for small to medium-sized businesses. From employee onboarding and leave tracking to payroll and performance reviews, Rafeeq HR helps organizations manage their workforce more efficiently.
                        </p>
                        
                        <p style="margin-bottom: 20px; line-height: 1.8;">
                          With an intuitive interface and smart automation, our system reduces administrative workload and improves HR visibility.
                        </p>
                        
                        <div class="features-box" style="margin-top: 20px;">
                          <h4 style="color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px;">Team Management</h4>
                          <ul style="list-style-type: none; padding: 0;" class="row row-cols-2 mt-3">
                            <li class="col" style="padding: 8px 0;">• Performance Review</li>
                            <li class="col" style="padding: 8px 0;">• Learn More</li>
                            <li class="col" style="padding: 8px 0;">• Leave Tracking</li>
                            <li class="col" style="padding: 8px 0;">• Payroll System</li>
                          </ul>
                        </div>
                        
                        
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- /About Section -->


    <section id="team" class="about section py-5">

      <!-- Section Title -->
      <div class="container section-title text-center " data-aos="fade-up">
  <h2 class="fw-bold position-relative d-inline-block" style="transition: transform 0.3s ease;">
    <span style="background: linear-gradient(45deg, #906f3d, #d4b773); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size: 2.5rem;">About the Developer</span>
    <span class="position-absolute start-0 bottom-0" style="height: 4px; width: 100%; background: linear-gradient(to right, transparent, #d4b773 50%, transparent); border-radius: 2px; transition: all 0.4s ease;"></span>
  </h2>
  
  
  <div class="subtitle-container mt-4">
    <p class="text-muted fst-italic" style="font-size: 1.1rem; letter-spacing: 1px; color: #8a7446;">Discover Our Story</p>
  </div>
</div><!-- End Section Title -->

<div class="container">
    <div class="row align-items-center g-4">
     
      <div class="col-md-5">
        <div class="profile-image-container bg-white shadow-sm rounded p-3" style="transition: transform 0.3s ease, box-shadow 0.3s ease; overflow: hidden;">
          <img src="{{ asset('assets/img/team/team2.png') }}" class="img-fluid" style="border-radius: 5%;" alt="sarah mahfooz">
        </div>
      </div>
      
     
      <div class="col-md-7">
        <div class="dev-info">
         
          <h2 class="fw-bold position-relative d-inline-block mb-4" style="transition: transform 0.3s ease;">
            <span class="position-absolute start-0 bottom-0" style="height: 4px; width: 100%; background: linear-gradient(to right, transparent, #d4b773 50%, transparent); border-radius: 2px; transition: all 0.4s ease;"></span>
          </h2>
          
         
          <p class="lead mb-4" style="color: #555; line-height: 1.7;">
          Hi, I'm Sarah Mahfooz, a full-stack web developer passionate about building efficient and user-friendly web applications. Rafeeq HR is a project I developed to simplify HR processes through smart automation and clean design. I specialize in Laravel and modern web technologies, with a strong focus on usability and performance.


         
          <div class="skills-container mb-4">
            <ul class="list-inline">
              <li class="list-inline-item">
                <span class="badge rounded-pill  px-3 py-2 me-2 mb-2" style="background-color: #d4b773; font-weight: 500; font-size: 0.9rem; transition: all 0.3s ease;">HTML</span>
              </li>
              <li class="list-inline-item">
                <span class="badge rounded-pill  px-3 py-2 me-2 mb-2" style="background-color: #d4b773; font-weight: 500; font-size: 0.9rem; transition: all 0.3s ease;">CSS</span>
              </li>
              <li class="list-inline-item">
                <span class="badge rounded-pill  px-3 py-2 me-2 mb-2" style="background-color: #d4b773; font-weight: 500; font-size: 0.9rem; transition: all 0.3s ease; ">JS</span>
              </li>
              <li class="list-inline-item">
                <span class="badge rounded-pill  px-3 py-2 me-2 mb-2" style="background-color: #d4b773; font-weight: 500; font-size: 0.9rem; transition: all 0.3s ease;">MySQL</span>
              </li>
              <li class="list-inline-item">
                <span class="badge rounded-pill  px-3 py-2 me-2 mb-2" style="background-color: #d4b773; font-weight: 500; font-size: 0.9rem; transition: all 0.3s ease;">Laravel</span>
              </li>
            </ul>
          </div>
       
          <div class="social-links">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://github.com/Sarah-mahfouz" class="btn btn-outline-dark rounded-circle p-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; margin-right: 8px;">
                  <i class="bi bi-github" style="font-size: 1.2rem;"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/sarah-mahfooz-406087277/" class="btn btn-outline-dark rounded-circle p-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; margin-right: 8px;">
                  <i class="bi bi-linkedin" style="font-size: 1.2rem;"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/sarahmahfooz__02/" class="btn btn-outline-dark rounded-circle p-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; margin-right: 8px;">
                  <i class="bi bi-instagram" style="font-size: 1.2rem;"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

    </section><!-- /Team Section -->

    

    </section> 
    <!-- /About Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title text-center " data-aos="fade-up">
  <h2 class="fw-bold position-relative d-inline-block" style="transition: transform 0.3s ease;">
    <span style="background: linear-gradient(45deg, #906f3d, #d4b773); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size: 2.5rem;">Contact Us</span>
    <span class="position-absolute start-0 bottom-0" style="height: 4px; width: 100%; background: linear-gradient(to right, transparent, #d4b773 50%, transparent); border-radius: 2px; transition: all 0.4s ease;"></span>
  </h2>
  
  
  <div class="subtitle-container mt-4">
    <p class="text-muted fst-italic" style="font-size: 1.1rem; letter-spacing: 1px; color: #8a7446;">Contact Us</p>
  </div>
</div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200" style="border: 1px solid #d4b773; transition: all 0.3s ease;">
                  <i class="bi bi-geo-alt" style="color: #d4b773;"></i>
                  <h3 style="color: #d4b773; font-weight: 600;">Address</h3>
                  <p>Jordan / Amman</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300" style="border: 1px solid #d4b773; transition: all 0.3s ease;">
                  <i class="bi bi-telephone" style="color: #d4b773;"></i>
                  <h3 style="color: #d4b773; font-weight: 600;">Call Us</h3>
                  <p>+962 79 7192 557</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400" style="border: 1px solid #d4b773; transition: all 0.3s ease;">
                  <i class="bi bi-envelope" style="color: #d4b773;"></i>
                  <h3 style="color: #d4b773; font-weight: 600;">Email Us</h3>
                  <p>Mahfouzsar@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6" id="contactForm">
            

          <form action="{{ route('contact.send') }}" method="POST" class="php-email-form" id="contactForm">
                @csrf

                
                @if(session('success'))
                    <div class="alert alert-success text-success fw-bold">{{ session('success') }}</div>
                @endif

               
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row gy-4">
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" id="uname" placeholder="Your Name" required style="border-color: #d4b773;">
                    </div>

                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required style="border-color: #d4b773;">
                    </div>

                    <div class="col-md-12">
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required style="border-color: #d4b773;">
                    </div>

                    <div class="col-md-12">
                        <textarea name="message" class="form-control" id="message" rows="4" placeholder="Message" required style="border-color: #d4b773;"></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                  <div class="loading" id="loading">Loading</div>

                  <button type="submit" class="btn btn-primary" id="">Send Message</button>
                  <div id="feedback" class="mt-3"></div>

                </div>
                </div>
            </form>
          </div>

          <!-- End Contact Form -->

        </div>

      </div>
      <!-- End Contact Form -->

      </div>

      </div>

    </section>
    

  </main>

  <footer id="footer" class="footer" style="background-color: #d4b773; color: white; padding: 0px 0 0px; margin-bottom: 0; ;">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about " style="margin-top: 0;"> 
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename" style="color: white; font-size: 24px; font-weight: bold;">Rafeeq HR</span>
          </a>
          <p style="color: white; margin-top: 15px; opacity: 0.9;">
            Empowering organizations with comprehensive HR solutions that streamline workforce management and enhance employee experience.
          </p>
          <div class="footer-contact pt-3" style="color: white;">
            <p>Jordan</p>
            <p>Amman</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+962 79 7192 557</span></p>
            <p><strong>Email:</strong> <span>contact@rafeeqhr.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="https://www.facebook.com/share/18gvz9jnww/" style="color: white; margin-right: 15px; font-size: 18px;"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/sarahmahfooz__02?igsh=MW9mbzNiYnphcXIyeg==" style="color: white; margin-right: 15px; font-size: 18px;"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/sarah-mahfooz-406087277/" style="color: white; margin-right: 15px; font-size: 18px;"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-3 footer-links" style="margin-top: 0;">
          <h4 style="color: white; font-size: 18px; font-weight: bold; margin-bottom: 20px; margin-left: 60px;">Quick Links</h4>
          <ul style="list-style: none; padding: 0; margin-left: 60px;">
            <li style="margin-bottom: 10px;"><i class="bi bi-chevron-right" style="color: white;"></i> <a href="#hero" style="color: white; text-decoration: none;">Home</a></li>
            <li style="margin-bottom: 10px;"><i class="bi bi-chevron-right" style="color: white;"></i> <a href="#about" style="color: white; text-decoration: none;">About Us</a></li>
            <li style="margin-bottom: 10px;"><i class="bi bi-chevron-right" style="color: white;"></i> <a href="#team" style="color: white; text-decoration: none;">About Developer</a></li>
            <li style="margin-bottom: 10px;"><i class="bi bi-chevron-right" style="color: white;"></i> <a href="#contact" style="color: white; text-decoration: none;">Contact Us</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-3 footer-contact" style="margin-top: 0;">
          <h4 style="color: white; font-size: 18px; font-weight: bold; margin-bottom: 20px;">Contact Info</h4>
          <div style="margin-bottom: 10px; display: flex; align-items: flex-start; color: white;">
            <i class="bi bi-envelope" style="margin-right: 10px;"></i>
            <span>Sarahmahfooz1@gmail.com</span>
          </div>
          <div style="margin-bottom: 10px; display: flex; align-items: flex-start; color: white;">
            <i class="bi bi-phone" style="margin-right: 10px;"></i>
            <span>+962 79 7192 557</span>
          </div>
          <div style="margin-bottom: 10px; display: flex; align-items: flex-start; color: white;">
            <i class="bi bi-geo-alt" style="margin-right: 10px;"></i>
            <span>Jordan/Amman</span>
          </div>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4" style="border-top: 1px solid rgba(255, 255, 255, 0.3); padding-top: 20px;">
      <p style="color: white; opacity: 0.8;">© <span>2025</span> <strong class="px-1 sitename">Rafeeq HR</strong> <span>All Rights Reserved</span></p>
    </div>
</footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
  <script src="{{asset('assets/js/contact.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

 

</body>

</html>