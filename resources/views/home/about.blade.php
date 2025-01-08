<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    @include('home.includes.head')
    <title>DBDO - About Page</title>
    <style>
        .team_section a i:hover {
            color: #1A73E8 !important;
            transition: 0.3s;
        }
    </style>
</head>

<body class="about-us bg-gray-200">
  <!-- Navbar -->
  @include('home.includes.navbar')
  <!-- Navbar End -->

  <!-- START HEADER -->
  <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('{{ asset('uploads/'.$home_h->About_header_img) }}');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center" style="background-color: transparent;">
                <li class="breadcrumb-item opacity-6"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">About</li>
              </ol>
            </nav>
            <h1 class="text-white">About Us</h1>
          </div>
      </div>
    </div>
  </header>
  <!-- END HEADER -->

  <div class="card card-body  blur shadow-blur shadow-xl mx-3 mx-md-4 mt-n6 px-0">
    <section class="py-6 mb-3" id="section_a">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-12 mx-auto text-center">
            <p class="wow fadeInUp" style="color: #929292; font-weight: light;" data-wow-duration="1s" data-wow-delay="0.2s">About DBDO</p>
            <p class="fs-3 text-info text-gradient wow fadeInUp" style="font-weight: 500" data-wow-duration="1s" data-wow-delay="0.3s">{{$data->AboutUs_text}}</p>
            <a href="#" class="btn btn-lg btn-outline-info btn-rounded mb-0 me-1 mt-2 mt-md-0 wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-bs-toggle="modal" data-bs-target="#exampleModal">Get In Touch</a>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 team_section">
      <div class="container pb-7">
        <div class="row py-5">
          <div class="col-lg-7 col-md-9 col-sm-12 mx-auto text-center">
            <p class="wow fadeInUp" style="color: #929292; font-weight: light;" data-wow-duration="1s" data-wow-delay="0.2s">Team</p>
            <h4 class="mb-4 text-info text-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" style="font-size: 2.5rem;">Our Team</h4>
            <p class="wow fadeInUp" style="font-weight: 500; color: #929292;" data-wow-duration="1s" data-wow-delay="0.2s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
            @foreach ($teams as $team)
            <div class="col-lg-4 col-md-6 my-2 mx-auto wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="image-container" style="border-radius: 4px;">
                    <img src="uploads/{{$team->image}}" class="img-fluid">
                    <div class="overlay bottom text-center px-3">
                      <p><span class="fs-4 fw-bold">{{$team->name}}</span> <br> <span class="fs-6">{{$team->designation}}</span></p>
                    </div>
                    <div class="overlay top text-center px-3">
                      <a class="nav-link px-3" href="{{$team->facebook}}" target="_blank">
                          <i class="fab fa-facebook fs-2 text-white opacity-8"></i>
                      </a>
                      <a class="nav-link px-3" href="{{$team->github}}" target="_blank">
                          <i class="fab fa-github fs-2 text-white opacity-8"></i>
                      </a>
                      <a class="nav-link px-3" href="{{$team->linkedin}}" target="_blank">
                          <i class="fab fa-linkedin fs-2 text-white opacity-8"></i>
                      </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </section>

    <!-- services -->
    @include('home.includes.customer_say')

    <section class="pb-7 pt-5" id="count-stats">
        <div class="container">
          <div class="row mb-7 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="col-lg-2 col-md-4 col-6 mb-4">
              <img class="w-100 opacity-7" src="./assets/img/logos/gray-logos/logo-coinbase.svg" alt="logo">
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
              <img class="w-100 opacity-7" src="./assets/img/logos/gray-logos/logo-nasa.svg" alt="logo">
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
              <img class="w-100 opacity-7" src="./assets/img/logos/gray-logos/logo-netflix.svg" alt="logo">
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
              <img class="w-100 opacity-7" src="./assets/img/logos/gray-logos/logo-pinterest.svg" alt="logo">
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
              <img class="w-100 opacity-7" src="./assets/img/logos/gray-logos/logo-spotify.svg" alt="logo">
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
              <img class="w-100 opacity-7" src="./assets/img/logos/gray-logos/logo-vodafone.svg" alt="logo">
            </div>
          </div>
          <div class="row justify-content-center text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="col-md-3">
              <h1 class="text-gradient text-info"><span id="state1" countTo="1500">0</span>+</h1>
              <h5 style="color: rgb(56, 54, 54);">Works</h5>
              <p style="color: #929292;">Of “high-performing” level are led by a certified project manager</p>
            </div>
            <div class="col-md-3">
              <h1 class="text-gradient text-info"><span id="state2" countTo="5400">0</span>+</h1>
              <h5 style="color: rgb(56, 54, 54);">Hours</h5>
              <p style="color: #929292;">That meets quality standards required by our users</p>
            </div>
            <div class="col-md-3">
              <h1 class="text-gradient text-info"><span id="state3" countTo="24">0</span>/7</h1>
              <h5 style="color: rgb(56, 54, 54);">Support</h5>
              <p style="color: #929292;">Actively engage team members that finishes on time</p>
            </div>
          </div>
        </div>
    </section>
  </div>

  <!-- Footer -->
  @include('home.includes.footer')

  <!--   Core JS Files   -->
  @include('home.includes.scripts')
  <!-- JS for about page -->
  <script>
    if (document.getElementsByClassName('page-header')) {
      window.onscroll = debounce(function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var oVal = (window.scrollY / 3);
        bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
      }, 6);
    }
  </script>
  <script>
    $(document).ready(function() {
      $('.image-container').hover(
          function() {
              $(this).css('z-index', '10');
          },
          function() {
              $(this).css('z-index', '1');
          }
      );
    });
  </script>
  <script>
    // get the element to animate
    var element = document.getElementById('count-stats');
    var elementHeight = element.clientHeight;

    // listen for scroll event and call animate function

    document.addEventListener('scroll', animate);

    // check if element is in view
    function inView() {
      // get window height
      var windowHeight = window.innerHeight;
      // get number of pixels that the document is scrolled
      var scrollY = window.scrollY || window.pageYOffset;
      // get current scroll position (distance from the top of the page to the bottom of the current viewport)
      var scrollPosition = scrollY + windowHeight;
      // get element position (distance from the top of the page to the bottom of the element)
      var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

      // is scroll position greater than element position? (is element in view?)
      if (scrollPosition > elementPosition) {
        return true;
      }

      return false;
    }

    var animateComplete = true;
    // animate element when it is in view
    function animate() {

      // is element in view?
      if (inView()) {
        if (animateComplete) {
          if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
              countUp.start();
            } else {
              console.error(countUp.error);
            }
          }
          if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
              countUp1.start();
            } else {
              console.error(countUp1.error);
            }
          }
          if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
              countUp2.start();
            } else {
              console.error(countUp2.error);
            };
          }
          animateComplete = false;
        }
      }
    }

    if (document.getElementById('typed')) {
      var typed = new Typed("#typed", {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        backSpeed: 90,
        backDelay: 200,
        startDelay: 500,
        loop: true
      });
    }
  </script>

</body>

</html>
