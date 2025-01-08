<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
    <title>Admin - Home Setting</title>
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-200 bg-gradient-info position-absolute w-100"></div>

    <!-- Sidenav -->
    @include('admin.includes.sidenav')

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('admin.includes.navbar')
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            <div class="row mx-1 ">
                <div class="col-12 card shadow mb-4">
                    <h4 class="text-center mt-5 mb-4 text-info text-gradient">Card Section Top</h4>
                    <form class="px-5 py-3" action="{{url('home_sec_1')}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-3 form-group mb-3">
                                <label for="head_1" class="form-label">Heading 1</label><br>
                                <input class="form-control" type="text" name="head_1" id="head_1" value="{{$home_sec_1->Heading_1}}">
                            </div>
                            <div class="col-md-3 form-group mb-3">
                                <label for="head_2" class="form-label">Heading 2</label><br>
                                <input class="form-control" type="text" name="head_2" id="head_2" value="{{$home_sec_1->Heading_2}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="para" class="form-label">Paragraph</label><br>
                                <input class="form-control" type="text" name="para" id="para" value="{{$home_sec_1->Paragraph}}">
                            </div>

                            <div class="col-md-12 form-group mt-3 text-center">
                                <input type="submit" class="btn bg-gradient-info" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 card shadow mb-4">
                    <h4 class="text-center mt-5 mb-4 text-info text-gradient">Cards</h4>
                    <form class="px-5 py-3" action="{{url('home_sec_1_card')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_img_1" class="form-label">Card 1 Image</label>
                                <input class="form-control" type="file" name="card_img_1" id="card_img_1" value="{{$home_sec_1->Card_img_1}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_title_1" class="form-label">Card 1 Title</label><br>
                                <input class="form-control" type="text" name="card_title_1" id="card_title_1" value="{{$home_sec_1->Card_title_1}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_para_1" class="form-label">Card 1 Para</label><br>
                                <textarea class="form-control" rows="5" name="card_para_1" id="card_para_1">{{$home_sec_1->Card_para_1}}</textarea>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_dsg_1" class="form-label">Card 1 Designer</label><br>
                                <input class="form-control mb-3" type="text" name="card_dsg_1" id="card_dsg_1" value="{{$home_sec_1->Card_dsg_1}}">

                                <label for="card_link_1" class="form-label">Card 1 Link</label><br>
                                <input class="form-control" type="text" name="card_link_1" id="card_link_1" value="{{$home_sec_1->Card_link_1}}">
                            </div>
                            <hr class="horizontal dark my-4">

                            <!-- Card 2 -->
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_img_2" class="form-label">Card 2 Image</label>
                                <input class="form-control" type="file" name="card_img_2" id="card_img_2" value="{{$home_sec_1->Card_img_2}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_title_2" class="form-label">Card 2 Title</label><br>
                                <input class="form-control" type="text" name="card_title_2" id="card_title_2" value="{{$home_sec_1->Card_title_2}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_para_2" class="form-label">Card 2 Para</label><br>
                                <textarea class="form-control" rows="5" name="card_para_2" id="card_para_2">{{$home_sec_1->Card_para_2}}</textarea>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_dsg_2" class="form-label">Card 2 Designer</label><br>
                                <input class="form-control mb-3" type="text" name="card_dsg_2" id="card_dsg_2" value="{{$home_sec_1->Card_dsg_2}}">

                                <label for="card_link_2" class="form-label">Card 2 Link</label><br>
                                <input class="form-control" type="text" name="card_link_2" id="card_link_2" value="{{$home_sec_1->Card_link_2}}">
                            </div>
                            <hr class="horizontal dark my-4">

                            <!-- Card 3 -->
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_img_3" class="form-label">Card 3 Image</label>
                                <input class="form-control" type="file" name="card_img_3" id="card_img_3" value="{{$home_sec_1->Card_img_3}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_title_3" class="form-label">Card 3 Title</label><br>
                                <input class="form-control" type="text" name="card_title_3" id="card_title_3" value="{{$home_sec_1->Card_title_3}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_para_3" class="form-label">Card 3 Para</label><br>
                                <textarea class="form-control" rows="5" name="card_para_3" id="card_para_3">{{$home_sec_1->Card_para_3}}</textarea>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_dsg_3" class="form-label">Card 3 Designer</label><br>
                                <input class="form-control mb-3" type="text" name="card_dsg_3" id="card_dsg_3" value="{{$home_sec_1->Card_dsg_3}}">

                                <label for="card_link_3" class="form-label">Card 3 Link</label><br>
                                <input class="form-control" type="text" name="card_link_3" id="card_link_3" value="{{$home_sec_1->Card_link_3}}">
                            </div>
                            <hr class="horizontal dark my-4">

                            <!-- Card 4 -->
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_img_4" class="form-label">Card 4 Image</label>
                                <input class="form-control" type="file" name="card_img_4" id="card_img_4" value="{{$home_sec_1->Card_img_4}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_title_4" class="form-label">Card 4 Title</label><br>
                                <input class="form-control" type="text" name="card_title_4" id="card_title_4" value="{{$home_sec_1->Card_title_4}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_para_4" class="form-label">Card 4 Para</label><br>
                                <textarea class="form-control" rows="5" name="card_para_4" id="card_para_4">{{$home_sec_1->Card_para_4}}</textarea>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="card_dsg_4" class="form-label">Card 4 Designer</label><br>
                                <input class="form-control mb-3" type="text" name="card_dsg_4" id="card_dsg_4" value="{{$home_sec_1->Card_dsg_4}}">

                                <label for="card_link_4" class="form-label">Card 4 Link</label><br>
                                <input class="form-control" type="text" name="card_link_4" id="card_link_4" value="{{$home_sec_1->Card_link_4}}">
                            </div>

                            <div class="col-md-12 form-group mt-3 text-center">
                                <input type="submit" class="btn bg-gradient-info" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 card shadow mb-4">
                    <h4 class="text-center mt-5 mb-4 text-info text-gradient">Stats Section</h4>
                    <form class="px-5 py-3" action="{{url('stat_edit')}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-2 form-group mb-3">
                                <label for="st_num_1" class="form-label">Stat 1 Number</label><br>
                                <input class="form-control" type="text" name="st_num_1" id="st_num_1" value="{{$stats->st_num_1}}">
                            </div>
                            <div class="col-md-3 form-group mb-3">
                                <label for="st_title_1" class="form-label">Stat 1 Title</label><br>
                                <input class="form-control" type="text" name="st_title_1" id="st_title_1" value="{{$stats->st_title_1}}">
                            </div>
                            <div class="col-md-7 form-group mb-3">
                                <label for="st_para_1" class="form-label">Stat 1 Paragraph</label><br>
                                <input class="form-control" type="text" name="st_para_1" id="st_para_1" value="{{$stats->st_para_1}}">
                            </div>
                            <hr class="horizontal dark my-4">

                            <div class="col-md-2 form-group mb-3">
                                <label for="st_num_2" class="form-label">Stat 2 Number</label><br>
                                <input class="form-control" type="text" name="st_num_2" id="st_num_2" value="{{$stats->st_num_2}}">
                            </div>
                            <div class="col-md-3 form-group mb-3">
                                <label for="st_title_2" class="form-label">Stat 2 Title</label><br>
                                <input class="form-control" type="text" name="st_title_2" id="st_title_2" value="{{$stats->st_title_2}}">
                            </div>
                            <div class="col-md-7 form-group mb-3">
                                <label for="st_para_2" class="form-label">Stat 2 Paragraph</label><br>
                                <input class="form-control" type="text" name="st_para_2" id="st_para_2" value="{{$stats->st_para_2}}">
                            </div>
                            <hr class="horizontal dark my-4">

                            <div class="col-md-2 form-group mb-3">
                                <label for="st_num_3" class="form-label">Stat 3 Number</label><br>
                                <input class="form-control" type="text" name="st_num_3" id="st_num_3" value="{{$stats->st_num_3}}">
                            </div>
                            <div class="col-md-3 form-group mb-3">
                                <label for="st_title_3" class="form-label">Stat 3 Title</label><br>
                                <input class="form-control" type="text" name="st_title_3" id="st_title_3" value="{{$stats->st_title_3}}">
                            </div>
                            <div class="col-md-7 form-group mb-3">
                                <label for="st_para_3" class="form-label">Stat 3 Paragraph</label><br>
                                <input class="form-control" type="text" name="st_para_3" id="st_para_3" value="{{$stats->st_para_3}}">
                            </div>

                            <div class="col-md-12 form-group mt-3 text-center">
                                <input type="submit" class="btn bg-gradient-info" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 card shadow mb-4">
                    <h4 class="text-center mt-5 mb-4 text-info text-gradient">Subscription</h4>
                    <form class="px-5 py-3" action="{{url('subsc_edit')}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="sub_h" class="form-label">Heading</label><br>
                                <input class="form-control" type="text" name="sub_h" id="sub_h" value="{{$s_p->sub_h}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="sub_p" class="form-label">Paragraph</label><br>
                                <input class="form-control" type="text" name="sub_p" id="sub_p" value="{{$s_p->sub_p}}">
                            </div>

                            <div class="col-md-12 form-group mt-3 text-center">
                                <input type="submit" class="btn bg-gradient-info" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Footer -->
            @include('admin.includes.footer')
        </div>
    </main>

    <!-- Settings -->
    @include('admin.includes.setting')
    <!--   Core JS Files   -->
    @include('admin.includes.scripts')
</body>

</html>
