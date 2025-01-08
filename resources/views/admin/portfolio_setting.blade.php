<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
    <title>Admin - Portfolio Setting</title>
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
            <div class="row mx-1">

                <div class="col-12 card shadow mb-4">
                    <h4 class="text-center mt-5 mb-4 text-info text-gradient">Portfolio Top</h4>
                    <form class="px-5 py-3" action="{{url('portfolio_head_edit')}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-3 form-group mb-3">
                                <label for="portfolio_h1" class="form-label">Heading 1</label><br>
                                <input class="form-control" type="text" name="portfolio_h1" id="portfolio_h1" value="{{$s_p->portfolio_h1}}">
                            </div>
                            <div class="col-md-3 form-group mb-3">
                                <label for="portfolio_h2" class="form-label">Heading 2</label><br>
                                <input class="form-control" type="text" name="portfolio_h2" id="portfolio_h2" value="{{$s_p->portfolio_h2}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="portfolio_para" class="form-label">Paragraph</label><br>
                                <input class="form-control" type="text" name="portfolio_para" id="portfolio_para" value="{{$s_p->portfolio_para}}">
                            </div>

                            <div class="col-md-12 form-group mt-3 text-center">
                                <input type="submit" class="btn bg-gradient-info" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 card shadow mb-4">
                    <h4 class="text-center mt-5 mb-4 text-info text-gradient">Portfolios</h4>
                    <form class="px-5 py-3" action="{{url('portfolio_edit')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-md-6 form-group mb-3">
                                <label for="portfolio_img_1" class="form-label">Portfolio Image 1</label>
                                <input class="form-control" type="file" name="portfolio_img_1" id="portfolio_img_1" value="{{$s_p->portfolio_img_1}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="portfolio_1_h1" class="form-label">Portfolio 1st Heading 1</label><br>
                                <input class="form-control" type="text" name="portfolio_1_h1" id="portfolio_1_h1" value="{{$s_p->portfolio_1_h1}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="portfolio_1_h2" class="form-label">Portfolio 1st Heading 2</label><br>
                                <input class="form-control" type="text" name="portfolio_1_h2" id="portfolio_1_h2" value="{{$s_p->portfolio_1_h2}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="portfolio_para_1" class="form-label">Portfolio Paragraph 1</label><br>
                                <input class="form-control" type="text" name="portfolio_para_1" id="portfolio_para_1" value="{{$s_p->portfolio_para_1}}">
                            </div>
                            <hr class="horizontal dark my-4">

                            <!-- Card 2 -->
                            <div class="col-md-6 form-group mb-3">
                                <label for="portfolio_img_2" class="form-label">Portfolio Image 2</label>
                                <input class="form-control" type="file" name="portfolio_img_2" id="portfolio_img_2" value="{{$s_p->portfolio_img_2}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="portfolio_2_h1" class="form-label">Portfolio 2nd Heading 1</label><br>
                                <input class="form-control" type="text" name="portfolio_2_h1" id="portfolio_2_h1" value="{{$s_p->portfolio_2_h1}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="portfolio_2_h2" class="form-label">Portfolio 2nd Heading 2</label><br>
                                <input class="form-control" type="text" name="portfolio_2_h2" id="portfolio_2_h2" value="{{$s_p->portfolio_2_h2}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="portfolio_para_2" class="form-label">Portfolio Paragraph 2</label><br>
                                <input class="form-control" type="text" name="portfolio_para_2" id="portfolio_para_2" value="{{$s_p->portfolio_para_2}}">
                            </div>
                            <hr class="horizontal dark my-4">

                            <!-- Card 3 -->
                            <div class="col-md-6 form-group mb-3">
                                <label for="portfolio_img_3" class="form-label">Portfolio Image 3</label>
                                <input class="form-control" type="file" name="portfolio_img_3" id="portfolio_img_3" value="{{$s_p->portfolio_img_3}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="portfolio_3_h1" class="form-label">Portfolio 3rd Heading 1</label><br>
                                <input class="form-control" type="text" name="portfolio_3_h1" id="portfolio_3_h1" value="{{$s_p->portfolio_3_h1}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="portfolio_3_h2" class="form-label">Portfolio 3rd Heading 2</label><br>
                                <input class="form-control" type="text" name="portfolio_3_h2" id="portfolio_3_h2" value="{{$s_p->portfolio_3_h2}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="portfolio_para_3" class="form-label">Portfolio Paragraph 3</label><br>
                                <input class="form-control" type="text" name="portfolio_para_3" id="portfolio_para_3" value="{{$s_p->portfolio_para_3}}">
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
