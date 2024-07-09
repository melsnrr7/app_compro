<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Compro - MELA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/assets/fe/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/fe/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/fe/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/fe/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/fe/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/fe/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/assets/fe/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php">
      <?php
        $name = $profile->name;
        $explode = explode(" ", $name);

        echo $explode[0] . " " . $explode[1] . " " . $explode[2];
      ?>
      </a></h1>
      <br>
      <h2>{{$profile->description}}</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a target="_blank" href="{{$profile->github_link}}" class="github"><i class="bi bi-github"></i></a>
        <a target="_blank" href="{{$profile->instagram_link}}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a target="_blank" href="{{$profile->linkedin}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            @foreach ($pengalamans as $pengalaman)
            {{-- jangan pake yg di table pengalamans, bikin table baru dari about --}}
                 <h3>{{ $pengalaman->nama_pekerjaan }}</h3>
            @endforeach

            {{-- <h3>{{$pengalamans->nama_pekerjaan}}</h3> --}}

          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span><?= $name = $profile->name;
                    $explode = explode(" ", $name);?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <a href="mailto:{{$profile->email}}">{{$profile->email}}</a> </li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$profile->phone}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>{{$profile->address}}</span></li>
              </ul>
            </div>
          </div>
          <p>
            {{$profile->description}}
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML<i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Test Planning <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Testing <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3>Quality Assurance</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3>Web Programming</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3>Database Administrator</h3>
          </div>
        </div>
      </div>

    </div><!-- End Interests -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">


          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>{{$pendidikans->lulusan}}</h4>
            <h5>{{$pendidikans->tgl_lulus}}</h5>
            <p><em>{{$pendidikans->nama_univ}}</em></p>
            <p>{{$pendidikans->gpa}}</p>
            <p>{{$pendidikans->description}}</p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            @foreach ($pengalamans as $pengalaman)
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h4 class="mb-0">{{ $pengalaman->nama_pekerjaan }}</h4>
                    <h5>{{ $pengalaman->tgl_mulai }} | {{ $pengalaman->tgl_akhir }}</h5>
                    <p><em>{{ $pengalaman->perusahaan }}</em></p><br>
                    <p>
                        @php
                            $deskripsi = explode("\n", $pengalaman->deskripsi);
                        @endphp
                        @foreach ($deskripsi as $line)
                            {{ $line }}<br><br>
                        @endforeach
                    </p>
                </div>
            </div>
        @endforeach

          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Web Programming</li>
            {{-- <li data-filter=".filter-card">Card</li> --}}
            <li data-filter=".filter-web">Quality Assurance</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/porto/porto1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web Programming 1</h4>
              <p>Web Programming</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/porto/porto1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/porto/porto2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Quality Assurance 1</h4>
              <p>Quality Assurance</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/porto/porto2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/porto/porto3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web Programming 2</h4>
              <p>Web Programming</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/porto/porto3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/porto/porto4.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Quality Assurance 2</h4>
              <p>Quality Assurance</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/porto/porto4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>{{$profile->address}}</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a target="_blank" href="{{$profile->github_link}}" class="github"><i class="bi bi-github"></i></a>
              <a target="_blank" href="{{$profile->instagram_link}}" class="instagram"><i class="bi bi-instagram"></i></a>
              <a target="_blank" href="{{$profile->linkedin}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><a href="mailto:{{$profile->email}}">{{$profile->email}}</a> </p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>{{$profile->phone}}</p>
          </div>
        </div>
      </div>

      {{-- ini buat codenya biar bisa masuk ke database --}}
      <form action="{{route('contact.store')}}" method="POST" role="form" class="php-email-form mt-4">
        @csrf
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/assets/fe/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('/assets/fe/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/fe/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/assets/fe/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/assets/fe/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/fe/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('/assets/fe/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/assets/fe/assets/js/main.js') }}"></script>

</body>

</html>
