<header>
    <div id="carouselExampleCaptions" class="carousel slide bg" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="uploads/{{$home_h->Image_1}}" class="d-block w-100" alt="...">
          <div class="overlay"></div>
          <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
            <p class="text-white display-6 mt-3 wow fadeInUp">{{$home_h->Title_1}}</p>
            <a class="btn btn-md btn-outline-light btn-rounded mb-0 me-1 mt-2 mt-md-0 wow bounceInUp"  data-bs-toggle="modal" data-bs-target="#exampleModal">Get In Touch</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="uploads/{{$home_h->Image_2}}" class="d-block w-100" alt="...">
          <div class="overlay"></div>
          <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
            <p class="text-white display-6 mt-3 wow fadeInUp">{{$home_h->Title_2}}</p>
            <a class="btn btn-md btn-outline-light btn-rounded mb-0 me-1 mt-2 mt-md-0 wow bounceInUp"  data-bs-toggle="modal" data-bs-target="#exampleModal">Get In Touch</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="uploads/{{$home_h->Image_3}}" class="d-block w-100" alt="...">
          <div class="overlay"></div>
          <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
            <p class="text-white display-6 mt-3 wow fadeInUp">{{$home_h->Title_3}}</p>
            <a class="btn btn-md btn-outline-light btn-rounded mb-0 me-1 mt-2 mt-md-0 wow bounceInUp"  data-bs-toggle="modal" data-bs-target="#exampleModal">Get In Touch</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</header>
