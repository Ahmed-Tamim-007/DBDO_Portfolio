<section class="pt-4 pb-5" id="count-stats">
    <div class="container mb-3">
    <div class="row">
        <div class="col-lg-9 mx-auto py-3">
        <div class="row">
            <div class="col-md-4 position-relative wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="p-3 text-center">
                <h1 class="text-gradient text-info text-gradient"><span id="state1" countTo="{{$stats->st_num_1}}">0</span>+</h1>
                <h5 class="mt-3" style="color: rgb(56, 54, 54);">{{$stats->st_title_1}}</h5>
                <p class="text-sm font-weight-normal" style="color: #929292;">{{$stats->st_para_1}}</p>
            </div>
            <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="p-3 text-center">
                <h1 class="text-gradient text-info text-gradient"> <span id="state2" countTo="{{$stats->st_num_2}}">0</span>+</h1>
                <h5 class="mt-3" style="color: rgb(56, 54, 54);">{{$stats->st_title_2}}</h5>
                <p class="text-sm font-weight-normal" style="color: #929292;">{{$stats->st_para_2}}</p>
            </div>
            <hr class="vertical dark">
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="p-3 text-center">
                <h1 class="text-gradient text-info text-gradient"><span id="state3" countTo="{{$stats->st_num_3}}">0</span>+</h1>
                <h5 class="mt-3" style="color: rgb(56, 54, 54);">{{$stats->st_title_3}}</h5>
                <p class="text-sm font-weight-normal" style="color: #929292;">{{$stats->st_para_3}}</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
