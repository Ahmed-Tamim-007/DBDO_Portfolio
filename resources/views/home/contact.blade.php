<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    @include('home.includes.head')
    <title>DBDO - Contact Page</title>
    <style>

    </style>
</head>

<body class="about-us bg-gray-200">
  <!-- Navbar -->
  @include('home.includes.navbar')
  <!-- Navbar End -->

  <!-- START HEADER -->
  <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('{{ asset('uploads/'.$home_h->Contact_header_img) }}');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center" style="background-color: transparent;">
                <li class="breadcrumb-item opacity-6"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Contact</li>
              </ol>
            </nav>
            <h1 class="text-white">Contact Us</h1>
          </div>
      </div>
    </div>
  </header>
  <!-- END HEADER -->

  <div class="card card-body  blur shadow-blur shadow-xl mx-3 mx-md-4 mt-n6 px-0">
    <section>
        <div class="container py-4">
            <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="col-12">
                    <h4 class="fs-3 text-gradient text-info">Contact Information</h4>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <p class="fs-6">Address: {{$data->Company_address}}</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <p class="fs-6">Phone: {{$data->Phone}}</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <p class="fs-6">Whatsapp: {{$data->Whatsapp}}</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <p class="fs-6">Email: {{$data->Email_address}}</p>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-lg-6 col-md-12 col-sm-12 my-5">
                    <h3 class="text-center text-gradient text-info wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Contact us</h3>
                    <div class="contact-form-container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <form action="{{ route('send.contact') }}" method="POST">
                            @csrf
                            <div class="form-group mb-4">
                                <input type="text" id="name" name="name" required>
                                <label for="name">Your Name</label>
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" id="email" name="email" required>
                                <label for="email">Your Email</label>
                            </div>
                            <div class="form-group mb-4">
                                <textarea id="message" name="message" rows="5" required></textarea>
                                <label for="message">Your Message</label>
                            </div>
                            <button type="submit" class="submit-btn">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 my-5">
                    <h3 class="text-center text-gradient text-info wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Our Location</h3>
                    <div class="map-container wow bounceIn" data-wow-duration="1s" data-wow-delay="0.3s" style="width: 100%; height: 400px;">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29224.929928649723!2d90.49538559999999!3d23.70754265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b657e85480e5%3A0x4b0c9e6e54135c69!2z4Ka44Ka-4Kaw4KeB4Kay4Ka_4Kav4Ka84Ka-IOCmrOCmvuCmnOCmvuCmsA!5e0!3m2!1sen!2sbd!4v1724764685062!5m2!1sen!2sbd"
                        width="100%"
                        height="100%"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                      </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>

  <!--   Footer   -->
  @include('home.includes.footer')

  <!--   Core JS Files   -->
  @include('home.includes.scripts')
  <!-- JS -->
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
</body>

</html>
