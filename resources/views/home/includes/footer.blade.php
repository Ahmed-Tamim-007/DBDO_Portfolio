<footer class="footer py-5 mt-5">
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-3 col-md-3 ps-4 mb-4">
            <div>
                <img src="uploads/{{$data->Company_logo}}" width="auto" height="30" class="wow fadeInUp mb-3" data-wow-duration="1s" data-wow-delay="0.3s">
                <p class="pe-1 text-dark">{{$data->AboutUs_text}}</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 ps-4 mb-4">
          <div>
            <h6 class="text-sm text-info text-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Quick Links</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item mt-3">
                <a class="nav-link" href="{{url('/')}}">
                  Home
                </a>
              </li>

              <li class="nav-item mt-1">
                <a class="nav-link" href="{{url('services')}}">
                  Our Services
                </a>
              </li>

              <li class="nav-item mt-1">
                <a class="nav-link" href="{{url('about')}}">
                  About Us
                </a>
              </li>

              <li class="nav-item mt-1">
                <a class="nav-link" href="{{url('contact')}}">
                  Contact Us
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 ps-4 mb-4">
          <div>
            <h6 class="text-sm text-info text-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Contact Information</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item mt-3">
                <a class="nav-link">
                    {{$data->Company_address}}
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link">
                    {{$data->Phone}}
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link">
                    {{$data->Whatsapp}}
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link">
                    {{$data->Email_address}}
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 ps-4 mb-4">
          <div>
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item text">
                <a class="nav-link pe-1 wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.2s" href="#">
                  <i class="fab fa-facebook fs-2 text-info text-gradient opacity-8"></i>
                </a>
              </li>
              <li class="nav-item text">
                <a class="nav-link pe-1 wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s" href="#">
                  <i class="fab fa-github fs-2 text-info text-gradient opacity-8"></i>
                </a>
              </li>
              <li class="nav-item text">
                <a class="nav-link pe-1 wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s" href="#">
                  <i class="fab fa-linkedin fs-2 text-info text-gradient opacity-8"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              Copyright © <script>document.write(new Date().getFullYear())</script> All rights reserved | This template is made with <i class="fas fa-heart text-info text-gradient"></i> by J A Tamim
            </p>
          </div>
        </div>
      </div>
    </div>
</footer>
