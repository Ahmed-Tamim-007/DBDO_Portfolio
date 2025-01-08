<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
    <title>Admin - Footer Setting</title>
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
            <div class="row mx-1 card shadow">
                <div class="col-12 p-5">
                    <h4 class="text-center mt-2 mb-2 text-info text-gradient">Footer Settings</h4>
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
