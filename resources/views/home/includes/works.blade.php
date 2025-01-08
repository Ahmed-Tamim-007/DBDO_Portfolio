<section class="py-4 px-3">
    <div class="container-fluid my-5">
        <div class="row py-5">
            <div class="col-lg-7 col-md-9 col-sm-12 mx-auto text-center">
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="color: #929292; font-weight: light;">{{$s_p->portfolio_h1}}</p>
                <h4 class="mb-4 text-info text-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" style="font-size: 2.5rem;">{{$s_p->portfolio_h2}}</h4>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="font-weight: 500; color: #929292;">{{$s_p->portfolio_para}}</p>
            </div>
        </div>
    </div>
</section>
<section class="py-4 px-3">
    <div class="container mt-3 mb-5">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 img_div">
                <img src="uploads/{{$s_p->portfolio_img_1}}" class="img-fluid w-100 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" alt="...">
            </div>
            <div class="col-lg-6 col-md-6 p-5 text-left">
                <p class="res_para wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">{{$s_p->portfolio_1_h1}}</p>
                <h4 class="res_title mb-4 text-info text-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">{{$s_p->portfolio_1_h2}}</h4>
                <p class="res_des wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">{{$s_p->portfolio_para_1}}</p>
                <a href="#">
                    <button class="btn btn-rounded btn-lg bg-gradient-info wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">View Products</button>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="py-4 px-3">
    <div class="container mt-3 mb-5">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 order-2 order-md-1 p-5 text-left">
                <p class="res_para wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">{{$s_p->portfolio_2_h1}}</p>
                <h4 class="mb-4 text-info text-gradient res_title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">{{$s_p->portfolio_2_h2}}</h4>
                <p class="res_des wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">{{$s_p->portfolio_para_2}}</p>
                <a href="#">
                    <button class="btn btn-rounded btn-lg bg-gradient-info wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">View Products</button>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 img_div order-1 order-md-2">
                <img src="uploads/{{$s_p->portfolio_img_2}}" class="img-fluid w-100 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" alt="...">
            </div>
        </div>
    </div>
</section>
<section class="py-4 px-3">
    <div class="container mt-3 mb-5">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 img_div">
                <img src="uploads/{{$s_p->portfolio_img_3}}" class="img-fluid w-100 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" alt="...">
            </div>
            <div class="col-lg-6 col-md-6 p-5 text-left">
                <p class="res_para wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">{{$s_p->portfolio_3_h1}}</p>
                <h4 class="mb-4 text-info text-gradient res_title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">{{$s_p->portfolio_3_h2}}</h4>
                <p class="res_des wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">{{$s_p->portfolio_para_3}}</p>
                <a href="#">
                    <button class="btn btn-rounded btn-lg bg-gradient-info wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">View Products</button>
                </a>
            </div>
        </div>
    </div>
</section>
