<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
    <title>Admin - About Setting</title>
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
                    <div class="row mb-3">
                        <div class="col-md-10">
                            <h4 class="text-start px-3 mt-5 mb-4 text-info text-gradient">Teammates</h4>
                        </div>
                        <div class="col-md-2 text-end px-4">
                            <button type="button" class="btn bg-gradient-info mt-5 mb-3" data-bs-toggle="modal" data-bs-target="#modal-form_team">
                                Add Teammate
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center text-center mb-4">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Designation</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Image</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Facebook</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">GitHub</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">LinkedIn</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $team)
                                <tr>
                                    <td>{{$team->name}}</td>
                                    <td>{{$team->designation}}</td>
                                    <td><img src="uploads/{{$team->image}}" height="100px" width="auto"></td>
                                    <td>{{$team->facebook}}</td>
                                    <td>{{$team->github}}</td>
                                    <td>{{$team->linkedin}}</td>
                                    <td>
                                        <button class="btn btn-icon bg-gradient-success btn-2 btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editModal{{ $team->id }}">
                                            <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                        </button>

                                        <button class="btn btn-icon bg-gradient-danger btn-2 btn-danger" type="button" onclick="confirmDelete({{ $team->id }})">
                                            <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                                        </button>

                                        <form id="delete-form-{{ $team->id }}" action="{{ route('delete_team', ['id' => $team->id]) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal{{ $team->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $team->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="card-header pb-0 text-left">
                                                <h4 class="font-weight-bolder text-info text-gradient">Edit Teammate Details</h4>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Edit Product Form -->
                                                <form action="{{ route('update_team', ['id' => $team->id]) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="name" class="form-label">Name</label>
                                                            <input class="form-control" type="text" name="name" id="name" value="{{$team->name}}">
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="designation" class="form-label">Designation</label>
                                                            <input class="form-control" type="text" name="designation" id="designation" value="{{$team->designation}}">
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="image" class="form-label">Image</label>
                                                            <input class="form-control" type="file" name="image" id="image" value="{{$team->image}}">
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="facebook" class="form-label">Facebook</label>
                                                            <input class="form-control" type="text" name="facebook" id="facebook" value="{{$team->facebook}}">
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="github" class="form-label">GitHub</label>
                                                            <input class="form-control" type="text" name="github" id="github" value="{{$team->github}}">
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="linkedin" class="form-label">LinkedIn</label>
                                                            <input class="form-control" type="text" name="linkedin" id="linkedin" value="{{$team->linkedin}}">
                                                        </div>
                                                        <div class="col-md-12 text-end">
                                                            <button type="submit" class="btn bg-gradient-info">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Script for Delete confirmation -->
                                <script>
                                    function confirmDelete(id) {
                                        Swal.fire({
                                            title: 'Are you sure to delete this?',
                                            text: "You won't be able to revert this!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Yes, delete it!'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                // If confirmed, submit the form
                                                document.getElementById('delete-form-' + id).submit();
                                            }
                                        })
                                    }
                                </script>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-12 card shadow mb-4">
                    <div class="row mb-3">
                        <div class="col-md-10">
                            <h4 class="text-start px-3 mt-5 mb-4 text-info text-gradient">Customers Say</h4>
                        </div>
                        <div class="col-md-2 text-end px-4">
                            <button type="button" class="btn bg-gradient-info mt-5 mb-3" data-bs-toggle="modal" data-bs-target="#modal-form_review">
                                Add Review
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center text-center mb-4">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Customer Name</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Profession</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Image</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Says</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $review)
                                <tr>
                                    <td>{{$review->name}}</td>
                                    <td>{{$review->profession}}</td>
                                    <td><img src="uploads/{{$review->image}}" height="100px" width="auto"></td>
                                    <td>{!!Str::words($review->says, 9)!!}</td>
                                    <td>
                                        <button class="btn btn-icon bg-gradient-success btn-2 btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editModal2{{ $review->id }}">
                                            <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                        </button>

                                        <button class="btn btn-icon bg-gradient-danger btn-2 btn-danger" type="button" onclick="confirmDelete({{ $review->id }})">
                                            <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                                        </button>

                                        <form id="delete-form-{{ $review->id }}" action="{{ route('delete_review', ['id' => $review->id]) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal2{{ $review->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $review->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="card-header pb-0 text-left">
                                                <h4 class="font-weight-bolder text-info text-gradient">Edit Review Details</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('update_review', ['id' => $review->id]) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="name" class="form-label">Customer Name</label>
                                                            <input class="form-control" type="text" name="name" id="name" value="{{$review->name}}">
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="profession" class="form-label">Profession</label>
                                                            <input class="form-control" type="text" name="profession" id="profession" value="{{$review->profession}}">
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="image" class="form-label">Image</label>
                                                            <input class="form-control" type="file" name="image" id="image" value="{{$review->image}}">
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="says" class="form-label">Says</label>
                                                            <input class="form-control" type="text" name="says" id="says" value="{{$review->says}}">
                                                        </div>
                                                        <div class="col-md-12 text-end">
                                                            <button type="submit" class="btn bg-gradient-info">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Script for Delete confirmation -->
                                <script>
                                    function confirmDelete(id) {
                                        Swal.fire({
                                            title: 'Are you sure to delete this?',
                                            text: "You won't be able to revert this!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Yes, delete it!'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                // If confirmed, submit the form
                                                document.getElementById('delete-form-' + id).submit();
                                            }
                                        })
                                    }
                                </script>
                                @endforeach
                            </tbody>
                        </table>
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
{{-- Add teammate Modal --}}
<div class="row">
    <div class="col-md-4">
        <div class="modal fade" id="modal-form_team" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h4 class="font-weight-bolder text-info text-gradient">Add Teammate Details</h4>
                    </div>
                    <div class="card-body">
                        <form class="" action="{{url('add_team')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Write the name">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input class="form-control" type="text" name="designation" id="designation" placeholder="Write designation">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control" type="file" name="image" id="image">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input class="form-control" type="text" name="facebook" id="facebook" placeholder="Add Facebook link">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="github" class="form-label">GitHub</label>
                                    <input class="form-control" type="text" name="github" id="github" placeholder="Add GitHub link">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="linkedin" class="form-label">LinkedIn</label>
                                    <input class="form-control" type="text" name="linkedin" id="linkedin" placeholder="Add LinkedIn link">
                                </div>
                                <div class="col-md-12 text-end">
                                    <button type="submit" class="btn bg-gradient-info">Add Product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
{{-- Add review Modal --}}
<div class="row">
    <div class="col-md-4">
        <div class="modal fade" id="modal-form_review" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h4 class="font-weight-bolder text-info text-gradient">Add Customer Review</h4>
                    </div>
                    <div class="card-body">
                        <form class="" action="{{url('add_review')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="name" class="form-label">Customer Name</label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Write the name">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="profession" class="form-label">Profession</label>
                                    <input class="form-control" type="text" name="profession" id="profession" placeholder="Write his/her profession">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control" type="file" name="image" id="image">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="says" class="form-label">Says</label>
                                    <input class="form-control" type="text" name="says" id="says" placeholder="Write what he says about us">
                                </div>
                                <div class="col-md-12 text-end">
                                    <button type="submit" class="btn bg-gradient-info">Add Review</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
