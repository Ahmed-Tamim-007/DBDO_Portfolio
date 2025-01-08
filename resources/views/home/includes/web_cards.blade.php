<section id="web_cards" class="pt-3 pb-4 px-2">
    <div class="row py-5">
        <div class="col-lg-7 col-md-9 col-sm-12 mx-auto text-center">
            <p class="wow fadeInUp" style="color: #929292; font-weight: light;" data-wow-duration="1s" data-wow-delay="0.2s">{{$home_sec_1->Heading_1}}</p>
            <h4 class="mb-4 text-info text-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" style="font-size: 2.5rem;">{{$home_sec_1->Heading_2}}</h4>
            <p class="wow fadeInUp" style="font-weight: 500; color: #929292;" data-wow-duration="1s" data-wow-delay="0.2s">{{$home_sec_1->Paragraph}}</p>
        </div>
    </div>

    <div class="container-fluid cont_card">
        <div class="row align-items-center my-5">
            <div class="col-lg-3 col-md-6 my-2">
                <div class="rotating-card-container wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="card card-rotate card-background card-background-mask-info shadow-dark mt-md-0 mt-5">
                        <div class="front front-background" style="background-image: url('{{ asset('uploads/'.$home_sec_1->Card_img_1) }}'); background-size: cover;">
                            <div class="card-body py-7 text-center">
                            <i class="material-icons text-white text-4xl my-3 opacity-0">touch_app</i>
                            <h3 class="text-white opacity-0">Feel the <br /> Material Kit</h3>
                            <p class="text-white opacity-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, tempora.</p>
                            </div>
                        </div>
                        <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                            <div class="card-body pt-7 text-center">
                            <h3 class="text-white">{{$home_sec_1->Card_title_1}}</h3>
                            <p class="text-white opacity-8">{{$home_sec_1->Card_para_1}}</p>
                            <p class="text-white opacity-8">{{$home_sec_1->Card_dsg_1}}</p>
                            <a href="{{$home_sec_1->Card_link_1}}" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Visit Site Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 my-2">
                <div class="rotating-card-container wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="card card-rotate card-background card-background-mask-info shadow-dark mt-md-0 mt-5">
                        <div class="front front-background" style="background-image: url('{{ asset('uploads/'.$home_sec_1->Card_img_2) }}'); background-size: cover;">
                            <div class="card-body py-7 text-center">
                            <i class="material-icons text-white text-4xl my-3 opacity-0">touch_app</i>
                            <h3 class="text-white opacity-0">Feel the <br /> Material Kit</h3>
                            <p class="text-white opacity-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, tempora.</p>
                            </div>
                        </div>
                        <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                            <div class="card-body pt-7 text-center">
                            <h3 class="text-white">{{$home_sec_1->Card_title_2}}</h3>
                            <p class="text-white opacity-8">{{$home_sec_1->Card_para_2}}</p>
                            <p class="text-white opacity-8">{{$home_sec_1->Card_dsg_2}}</p>
                            <a href="{{$home_sec_1->Card_link_2}}" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Visit Site Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 my-2">
                <div class="rotating-card-container wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="card card-rotate card-background card-background-mask-info shadow-dark mt-md-0 mt-5">
                    <div class="front front-background" style="background-image: url('{{ asset('uploads/'.$home_sec_1->Card_img_3) }}'); background-size: cover;">
                        <div class="card-body py-7 text-center">
                        <i class="material-icons text-white text-4xl my-3 opacity-0">touch_app</i>
                        <h3 class="text-white opacity-0">Feel the <br /> Material Kit</h3>
                        <p class="text-white opacity-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, tempora.</p>
                        </div>
                    </div>
                    <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                        <div class="card-body pt-7 text-center">
                        <h3 class="text-white">{{$home_sec_1->Card_title_3}}</h3>
                        <p class="text-white opacity-8">{{$home_sec_1->Card_para_3}}</p>
                        <p class="text-white opacity-8">{{$home_sec_1->Card_dsg_3}}</p>
                        <a href="{{$home_sec_1->Card_link_3}}" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Visit Site Now</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 my-2">
                <div class="rotating-card-container wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="card card-rotate card-background card-background-mask-info shadow-dark mt-md-0 mt-5">
                    <div class="front front-background" style="background-image: url('{{ asset('uploads/'.$home_sec_1->Card_img_4) }}'); background-size: cover;">
                        <div class="card-body py-7 text-center">
                        <i class="material-icons text-white text-4xl my-3 opacity-0">touch_app</i>
                        <h3 class="text-white opacity-0">Feel the <br /> Material Kit</h3>
                        <p class="text-white opacity-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, tempora.</p>
                        </div>
                    </div>
                    <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                        <div class="card-body pt-7 text-center">
                        <h3 class="text-white">{{$home_sec_1->Card_title_4}}</h3>
                        <p class="text-white opacity-8">{{$home_sec_1->Card_para_4}}</p>
                        <p class="text-white opacity-8">{{$home_sec_1->Card_dsg_4}}</p>
                        <a href="{{$home_sec_1->Card_link_4}}" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Visit Site Now</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
