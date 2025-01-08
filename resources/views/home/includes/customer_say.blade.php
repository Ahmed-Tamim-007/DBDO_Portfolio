<section class="py-4 px-3 bg-light section">
    <div class="container">
    <div class="row py-5">
        <div class="col-lg-7 col-md-9 col-sm-12 mx-auto text-center">
        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="color: #929292; font-weight: light;">Customer Says</p>
        <h4 class="mb-4 text-info text-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" style="font-size: 2.5rem;">Our satisfied customer says</h4>
        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="font-weight: 500; color: #929292;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
        </div>
    </div>
    <div class="swiper mySwiper mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
        <div class="swiper-wrapper py-5">
            @foreach ($reviews as $review)
            <div class="swiper-slide">
                <div class="card" style="margin: 0px 10px;">
                <a href="javascript:;" class="avatar rounded-circle mx-auto mt-5 mb-4">
                    <img style="width: 100px; height: auto;" src="uploads/{{$review->image}}">
                </a>
                <div class="card-body">
                    <p class="card-text text-center res_des">{{$review->says}}</p>
                    <h5 class="card-title text-center text-info text-gradient">{{$review->name}}</h5>
                    <p class="text-center res_para">{{$review->profession}}</p>
                </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-button-next text-info text-gradient"></div>
        <div class="swiper-button-prev text-info text-gradient"></div>
    </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 10,
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        },
    });
    </script>
</section>
