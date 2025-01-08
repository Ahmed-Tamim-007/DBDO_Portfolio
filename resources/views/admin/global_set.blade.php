<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
    <title>Admin - Navbar Setting</title>
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

                <div class="col-12 card shadow mb-4 px-5 py-3">
                    <h4 class="text-center my-4 text-info text-gradient">Company Logo</h4>
                    <form action="{{url('logo_edit')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label class="form-label">Current Logo</label><br>
                                <img src="uploads/{{$data->Company_logo}}" width="auto" height="60">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="logo" class="form-label">Change Logo</label>
                                <input class="form-control" type="file" name="logo" id="logo" required>
                            </div>

                            <div class="col-md-12 form-group mt-3 text-center">
                                <input type="submit" class="btn bg-gradient-info w-25" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 card shadow mb-4 px-5 py-3">
                    <h4 class="text-center my-4 text-info text-gradient">Other Informations</h4>
                    <form action="{{url('global_edit')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="company_name" class="form-label">Company Name</label>
                                <input class="form-control" type="text" name="company_name" id="company_name" value="{{$data->Company_name}}" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="AboutUs_text" class="form-label">About Us Text</label>
                                <input class="form-control" type="text" name="AboutUs_text" id="AboutUs_text" value="{{$data->AboutUs_text}}" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="company_address" class="form-label">Company Address</label>
                                <input class="form-control" type="text" name="company_address" id="company_address" value="{{$data->Company_address}}" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{$data->Phone}}" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="whatsapp" class="form-label">WhatsApp</label>
                                <input class="form-control" type="text" name="whatsapp" id="whatsapp" value="{{$data->Whatsapp}}" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="email_address" class="form-label">E-Mail Address</label>
                                <input class="form-control" type="email" name="email_address" id="email_address" value="{{$data->Email_address}}" required>
                            </div>

                            <div class="col-md-12 form-group mt-3 text-center">
                                <input type="submit" class="btn bg-gradient-info w-25" value="Save Changes">
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
