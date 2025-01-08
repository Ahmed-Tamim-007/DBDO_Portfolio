<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
    <title>Admin - Header Setting</title>
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
                    <h4 class="text-center mt-5 mb-4 text-info text-gradient">Home Page Slider</h4>
                    <form class="px-5 py-3" action="{{url('home_header')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="image_1" class="form-label">Slider 1 Image</label>
                                <input class="form-control" type="file" name="image_1" id="image_1" value="{{$home_h->Image_1}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="title_1" class="form-label">Slider 1 Title</label><br>
                                <input class="form-control" type="text" name="title_1" id="title_1" value="{{$home_h->Title_1}}">
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="image_2" class="form-label">Slider 2 Image</label>
                                <input class="form-control" type="file" name="image_2" id="image_2" value="{{$home_h->Image_2}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="title_2" class="form-label">Slider 2 Title</label><br>
                                <input class="form-control" type="text" name="title_2" id="title_2" value="{{$home_h->Title_2}}">
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="image_3" class="form-label">Slider 3 Image</label>
                                <input class="form-control" type="file" name="image_3" id="image_3" value="{{$home_h->Image_3}}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="title_3" class="form-label">Slider 3 Title</label><br>
                                <input class="form-control" type="text" name="title_3" id="title_3" value="{{$home_h->Title_3}}">
                            </div>

                            <div class="col-md-12 form-group mt-3 text-center">
                                <input type="submit" class="btn bg-gradient-info" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 card shadow mb-4">
                    <h4 class="text-center mt-5 mb-4 text-info text-gradient">Other Page Headers</h4>
                    <form class="px-5 py-3" action="{{url('other_header')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="About_header_img" class="form-label">About Us Header Image</label>
                                <input class="form-control" type="file" name="About_header_img" id="About_header_img" value="{{$home_h->About_header_img}}">
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="Product_header_img" class="form-label">Products Header Image</label>
                                <input class="form-control" type="file" name="Product_header_img" id="Product_header_img" value="{{$home_h->Product_header_img}}">
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="Blog_header_img" class="form-label">Case Studies Header Image</label>
                                <input class="form-control" type="file" name="Blog_header_img" id="Blog_header_img" value="{{$home_h->Blog_header_img}}">
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="Contact_header_img" class="form-label">Contact Us Header Image</label>
                                <input class="form-control" type="file" name="Contact_header_img" id="Contact_header_img" value="{{$home_h->Contact_header_img}}">
                            </div>

                            <div class="col-md-12 form-group mt-3 text-center">
                                <input type="submit" class="btn bg-gradient-info" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
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
