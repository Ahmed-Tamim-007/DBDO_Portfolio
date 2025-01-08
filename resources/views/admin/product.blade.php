<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
    <title>Admin - Products</title>
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
                            <h4 class="text-start px-3 mt-5 mb-4 text-info text-gradient">Products</h4>
                        </div>
                        <div class="col-md-2 text-end px-4">
                            <button type="button" class="btn bg-gradient-info mt-5 mb-3" data-bs-toggle="modal" data-bs-target="#modal-form">
                                Add Product
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center text-center mb-4">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Title</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Description</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Image</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Category</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Price</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Designer</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Link</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{!!Str::words($product->product_title, 3)!!}</td>
                                    <td>{!!Str::words($product->product_des, 5)!!}</td>
                                    <td><img src="uploads/{{$product->product_img}}" height="100px" width="auto"></td>
                                    <td>{{$product->category}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->designer}}</td>
                                    <td>{!!Str::limit($product->link, 15)!!}</td>
                                    <td>
                                        <button class="btn btn-icon bg-gradient-success btn-2 btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editModal{{ $product->id }}">
                                            <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                        </button>
                                        <button class="btn btn-icon bg-gradient-danger btn-2 btn-danger" type="button" onclick="confirmDelete({{ $product->id }})">
                                            <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                                        </button>

                                        <form id="delete-form-{{ $product->id }}" action="{{ route('delete_product', ['id' => $product->id]) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal{{ $product->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $product->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="card-header pb-0 text-left">
                                                <h4 class="font-weight-bolder text-info text-gradient">Add Product Details</h4>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Edit Product Form -->
                                                <form action="{{ route('update_product', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="product_img_e" class="form-label">Product Image</label>
                                                            <input class="form-control" type="file" name="product_img_e" id="product_img_e" value="{{$product->product_img}}">
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="product_title_e" class="form-label">Product Title</label><br>
                                                            <input class="form-control" type="text" name="product_title_e" id="product_title_e" value="{{$product->product_title}}">
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="product_des_e" class="form-label">Description</label><br>
                                                            <textarea class="form-control" type="text" name="product_des_e" id="product_des_e" rows="5">{{$product->product_des}}</textarea>
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="category_e" class="form-label">Category</label><br>
                                                            <select class="form-control mb-3" name="category_e" id="category_e">
                                                                <option value="{{$product->category}}">{{$product->category}}</option>
                                                                <option value="html">HTML</option>
                                                                <option value="wordpress">Wordpress</option>
                                                                <option value="dynamic">Dynamic</option>
                                                                <option value="software">Software</option>
                                                            </select>

                                                            <label for="price_e" class="form-label">Price</label><br>
                                                            <input class="form-control" type="text" name="price_e" id="price_e" value="{{$product->price}}">
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="designer_e" class="form-label">Designer</label><br>
                                                            <input class="form-control" type="text" name="designer_e" id="designer_e" value="{{$product->designer}}">
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="link_e" class="form-label">Link Address</label><br>
                                                            <input class="form-control" type="text" name="link_e" id="link_e" value="{{$product->link}}">
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

{{-- Add Product Modal --}}
<div class="row">
    <div class="col-md-4">
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h4 class="font-weight-bolder text-info text-gradient">Add Product Details</h4>
                    </div>
                    <div class="card-body">
                        <form class="" action="{{url('add_product')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="product_img" class="form-label">Product Image</label>
                                    <input class="form-control" type="file" name="product_img" id="product_img" placeholder="Write">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="product_title" class="form-label">Product Title</label><br>
                                    <input class="form-control" type="text" name="product_title" id="product_title" placeholder="Write product name">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="product_des" class="form-label">Description</label><br>
                                    <textarea class="form-control" type="text" name="product_des" id="product_des" rows="5" placeholder="Write Product description here..."></textarea>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="category" class="form-label">Category</label><br>
                                    <select class="form-control mb-3" name="category" id="category">
                                        <option value="">Select Category</option>
                                        <option value="html">HTML</option>
                                        <option value="wordpress">Wordpress</option>
                                        <option value="dynamic">Dynamic</option>
                                        <option value="software">Software</option>
                                    </select>

                                    <label for="price" class="form-label">Price</label><br>
                                    <input class="form-control" type="text" name="price" id="price" placeholder="Include products price">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="designer" class="form-label">Designer</label><br>
                                    <input class="form-control" type="text" name="designer" id="designer" placeholder="Add the designers name">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="link" class="form-label">Link Address</label><br>
                                    <input class="form-control" type="text" name="link" id="link" placeholder="Add link">
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
