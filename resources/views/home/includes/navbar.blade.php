<div class="container-fluid position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-3 end-3 mx-0">
                <div class="container-fluid px-0">
                    <a class="navbar-brand text-info text-gradient font-weight-bolder fs-6 ms-sm-3" href="home.html" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
                        <img src="uploads/{{$data->Company_logo}}" width="auto" height="30">
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mt-2">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </span>
                    </button>
                    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover ms-auto">
                            <li class="nav-item mx-2">
                                <a href="{{url('/')}}" class="nav-link {{ Request::is('/') ? 'active' : '' }} ps-2 d-flex align-items-center cursor-pointer">
                                    <i class="fas fa-home opacity-6 me-2 mb-1 text-sm"></i>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="nav-item mx-2">
                                <a href="{{url('about')}}" class="nav-link {{ Request::is('about') ? 'active' : '' }} ps-2 d-flex align-items-center cursor-pointer">
                                    <i class="fas fa-info-circle opacity-6 me-2 mb-1 text-sm"></i>
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li class="nav-item mx-2">
                                <a href="{{url('services')}}" class="nav-link {{ Request::is('services') ? 'active' : '' }} ps-2 d-flex align-items-center cursor-pointer">
                                    <i class="fas fa-briefcase opacity-6 me-2 mb-1 text-sm"></i>
                                    <span>Our Services</span>
                                </a>
                            </li>
                            <li class="nav-item mx-2">
                                <a href="{{url('contact')}}" class="nav-link {{ Request::is('contact') ? 'active' : '' }} ps-2 d-flex align-items-center cursor-pointer">
                                    <i class="fas fa-address-book opacity-6 me-2 mb-1 text-sm"></i>
                                    <span>Contact Us</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav navbar-nav-hover ms-auto">
                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex align-items-center cursor-pointer">
                                    <i class="fas fa-paper-plane opacity-6 me-2 mb-1 text-sm"></i>
                                    <span>{{$data->Phone}}</span>
                                </a>
                            </li>
                        </ul>
                        <div>
                            <button type="button" class="btn btn-sm btn-outline-info btn-rounded mb-0 me-1 mt-2 mt-md-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Get In Touch</button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
@if (session('denied'))
    <div class="alert alert-danger alert-dismissible fade show text-center text-light floating-alert d-flex justify-content-between align-items-center" role="alert">
        <span class="mx-auto px-3 fs-5 fw-bold">{{ session('denied') }}</span>
        <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close">
            <i class="fas fa-times"></i>
        </button>
    </div>
@endif

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Get in touch with us</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="contact-form-container">
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
      </div>
    </div>
</div>
