<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    @include('home.includes.head')
    <title>DBDO - Blog Page</title>
</head>

<body class="about-us bg-gray-200">
  <!-- Navbar -->
  @include('home.includes.navbar')
  <!-- Navbar End -->

  <!-- START HEADER -->
  <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('{{ asset('uploads/'.$home_h->Blog_header_img) }}');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center" style="background-color: transparent;">
                <li class="breadcrumb-item opacity-6"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Blog</li>
              </ol>
            </nav>
            <h1 class="text-white">Case Studies</h1>
          </div>
      </div>
    </div>
  </header>
  <!-- END HEADER -->

  <div class="card card-body  blur shadow-blur shadow-xl mx-3 mx-md-4 mt-n6 px-0">
    <section class="pt-2 pb-4 px-3">
        <div class="container pb-5 mb-5">
            <div class="row py-5">
                <div class="col-lg-7 col-md-9 col-sm-12 mx-auto text-center">
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="color: #929292; font-weight: light;">Blog</p>
                    <h4 class="mb-4 text-info text-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" style="font-size: 2.5rem;">DBDO Blogs</h4>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="font-weight: 500; color: #929292;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="cont_a">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="card split">
                            <div class="image">
                            <img src="assets/img/bg11.jpg" alt="" />
                            </div>
                            <div class="content pt-3">
                            <h1 class="card_h">July 12, 2024 | Admin</h1>
                            <p class="copy">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error sequi molestias recusandae deleniti! Ab sunt dolore officia enim neque eius.</p>
                            <p class="card_r mt-3"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="card split">
                            <div class="image">
                            <img src="assets/img/bg10.jpg" alt="" />
                            </div>
                            <div class="content pt-3">
                            <h1 class="card_h">July 12, 2024 | Admin</h1>
                            <p class="copy">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error sequi molestias recusandae deleniti! Ab sunt dolore officia enim neque eius.</p>
                            <p class="card_r mt-3"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="card split">
                            <div class="image">
                            <img src="assets/img/bg3.jpg" alt="" />
                            </div>
                            <div class="content pt-3">
                            <h1 class="card_h">July 12, 2024 | Admin</h1>
                            <p class="copy">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error sequi molestias recusandae deleniti! Ab sunt dolore officia enim neque eius.</p>
                            <p class="card_r mt-3"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="card split">
                            <div class="image">
                            <img src="assets/img/bg0.jpg" alt="" />
                            </div>
                            <div class="content pt-3">
                            <h1 class="card_h">July 12, 2024 | Admin</h1>
                            <p class="copy">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error sequi molestias recusandae deleniti! Ab sunt dolore officia enim neque eius.</p>
                            <p class="card_r mt-3"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="card split">
                            <div class="image">
                            <img src="assets/img/bg5.jpg" alt="" />
                            </div>
                            <div class="content pt-3">
                            <h1 class="card_h">July 12, 2024 | Admin</h1>
                            <p class="copy">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error sequi molestias recusandae deleniti! Ab sunt dolore officia enim neque eius.</p>
                            <p class="card_r mt-3"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="card split">
                            <div class="image">
                            <img src="assets/img/bg9.jpg" alt="" />
                            </div>
                            <div class="content pt-3">
                            <h1 class="card_h">July 12, 2024 | Admin</h1>
                            <p class="copy">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error sequi molestias recusandae deleniti! Ab sunt dolore officia enim neque eius.</p>
                            <p class="card_r mt-3"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></p>
                            </div>
                        </div>
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
