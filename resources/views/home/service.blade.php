<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    @include('home.includes.head')
    <title>DBDO - Products Page</title>
    <style>
        #nav_service .nav.nav-pills {
          background: transparent !important;
          border-radius: 0.75rem;
          position: relative;
        }
        #nav_service .nav-pills .nav-link {
            background-color: #f1f1f1;
            border-radius: 30px;
            margin-right: 5px;
            color: #333;
            transition: background-color 0.3s ease, color 0.3s ease;
            padding: 10px 20px;
        }

        #nav_service .nav-pills .nav-link.active {
            background-color: #007bff;
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        #nav_service .nav-pills .nav-link:hover {
            background-color: #007bff;
            color: white;
        }

        /* Category Titles */
        #nav_service .tab-content .row {
            margin-top: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #nav_service .item {
                margin-bottom: 15px;
            }

            #nav_service .nav-pills .nav-link {
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body class="about-us bg-gray-200">
  <!-- Navbar -->
  @include('home.includes.navbar')
  <!-- Navbar End -->

  <!-- START HEADER -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('{{ asset('uploads/'.$home_h->Product_header_img) }}');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-8 text-center mx-auto my-auto wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center" style="background-color: transparent;">
                    <li class="breadcrumb-item opacity-6"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item text-light active" aria-current="page">Products</li>
                </ol>
                </nav>
                <h1 class="text-white">Products</h1>
            </div>
        </div>
        </div>
    </header>
  <!-- END HEADER -->

  <div class="card card-body  blur shadow-blur shadow-xl mx-3 mx-md-4 mt-n6 px-0">
    <section class="py-2 px-3">
      <div class="container-fluid mt-5 mb-3">
          <div class="row">
            <div class="col-lg-7 col-md-9 col-sm-12 mx-auto text-center">
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="color: #929292; font-weight: light;">OUR Products</p>
                <h4 class="mb-4 text-info text-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" style="font-size: 2.5rem;">Web & Mobile app design, bring your ideas to life</h4>
            </div>
            <!-- Nav Pills -->
            <div class="container mt-5" id="nav_service">
              <!-- Category Navigation -->
              <ul class="nav nav-pills justify-content-center mb-6 wow fadeInUp" id="categoryNav" role="tablist" data-wow-duration="1s" data-wow-delay="0.1s">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="all-tab" data-bs-toggle="pill" href="#all" role="tab">All</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="html-tab" data-bs-toggle="pill" href="#html"
                        role="tab">HTML</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="wordpress-tab" data-bs-toggle="pill" href="#wordpress" role="tab">Wordpress</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="dynamic-tab" data-bs-toggle="pill" href="#dynamic" role="tab">Dynamic</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="software-tab" data-bs-toggle="pill" href="#software" role="tab">Software</a>
                </li>
              </ul>

              <!-- Category Content -->
              <div class="tab-content" id="categoryContent">
                <!-- All Items -->
                <div class="tab-pane fade show active" id="all" role="tabpanel">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-md-3 {{$product->category}} px-2 wow fadeInUp">
                                <div class="card" data-animation="true" style="border: none; box-shadow: none;">
                                    <div class="card-header p-0 position-relative z-index-2" style="border: none; box-shadow: none; margin-bottom: -10px;">
                                        <a class="d-block">
                                            <img src="uploads/{{$product->product_img}}" alt="Product" class="img-fluid border-radius-lg" style="box-shadow: none;">
                                        </a>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="d-flex mt-n6 mx-auto">
                                            <a class="btn btn-link mx-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Product Details">
                                                <button type="button" class="btn bg-gradient-info btn-sm open-modal"
                                                data-id="{{ $product->id }}"
                                                data-title="{{ $product->product_title }}"
                                                data-des="{{ $product->product_des }}"
                                                data-img="{{ $product->product_img }}"
                                                data-category="{{ $product->category }}"
                                                data-price="{{ $product->price }}"
                                                data-designer="{{ $product->designer }}"
                                                data-link="{{ $product->link }}"
                                                data-bs-toggle="modal" data-bs-target="#detailModal">
                                                    Details
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- HTML -->
                <div class="tab-pane fade" id="html" role="tabpanel">
                    <div class="row">
                        @foreach ($products as $product)
                            @if ($product->category === 'html')
                            <div class="col-md-3 {{$product->category}} px-2 wow fadeInUp">
                                <div class="card" data-animation="true" style="border: none; box-shadow: none;">
                                    <div class="card-header p-0 position-relative z-index-2" style="border: none; box-shadow: none; margin-bottom: -10px;">
                                        <a class="d-block">
                                            <img src="uploads/{{$product->product_img}}" alt="Product" class="img-fluid border-radius-lg" style="box-shadow: none;">
                                        </a>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="d-flex mt-n6 mx-auto">
                                            <a class="btn btn-link mx-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Product Details">
                                                <button type="button" class="btn bg-gradient-info btn-sm open-modal"
                                                data-id="{{ $product->id }}"
                                                data-title="{{ $product->product_title }}"
                                                data-des="{{ $product->product_des }}"
                                                data-img="{{ $product->product_img }}"
                                                data-category="{{ $product->category }}"
                                                data-price="{{ $product->price }}"
                                                data-designer="{{ $product->designer }}"
                                                data-link="{{ $product->link }}"
                                                data-bs-toggle="modal" data-bs-target="#detailModal">
                                                    Details
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Wordpress -->
                <div class="tab-pane fade" id="wordpress" role="tabpanel">
                    <div class="row">
                        @foreach ($products as $product)
                            @if ($product->category === 'wordpress')
                            <div class="col-md-3 {{$product->category}} px-2 wow fadeInUp">
                                <div class="card" data-animation="true" style="border: none; box-shadow: none;">
                                    <div class="card-header p-0 position-relative z-index-2" style="border: none; box-shadow: none; margin-bottom: -10px;">
                                        <a class="d-block">
                                            <img src="uploads/{{$product->product_img}}" alt="Product" class="img-fluid border-radius-lg" style="box-shadow: none;">
                                        </a>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="d-flex mt-n6 mx-auto">
                                            <a class="btn btn-link mx-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Product Details">
                                                <button type="button" class="btn bg-gradient-info btn-sm open-modal"
                                                data-id="{{ $product->id }}"
                                                data-title="{{ $product->product_title }}"
                                                data-des="{{ $product->product_des }}"
                                                data-img="{{ $product->product_img }}"
                                                data-category="{{ $product->category }}"
                                                data-price="{{ $product->price }}"
                                                data-designer="{{ $product->designer }}"
                                                data-link="{{ $product->link }}"
                                                data-bs-toggle="modal" data-bs-target="#detailModal">
                                                    Details
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Dynamic -->
                <div class="tab-pane fade" id="dynamic" role="tabpanel">
                    <div class="row">
                        @foreach ($products as $product)
                            @if ($product->category === 'dynamic')
                            <div class="col-md-3 {{$product->category}} px-2 wow fadeInUp">
                                <div class="card" data-animation="true" style="border: none; box-shadow: none;">
                                    <div class="card-header p-0 position-relative z-index-2" style="border: none; box-shadow: none; margin-bottom: -10px;">
                                        <a class="d-block">
                                            <img src="uploads/{{$product->product_img}}" alt="Product" class="img-fluid border-radius-lg" style="box-shadow: none;">
                                        </a>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="d-flex mt-n6 mx-auto">
                                            <a class="btn btn-link mx-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Product Details">
                                                <button type="button" class="btn bg-gradient-info btn-sm open-modal"
                                                data-id="{{ $product->id }}"
                                                data-title="{{ $product->product_title }}"
                                                data-des="{{ $product->product_des }}"
                                                data-img="{{ $product->product_img }}"
                                                data-category="{{ $product->category }}"
                                                data-price="{{ $product->price }}"
                                                data-designer="{{ $product->designer }}"
                                                data-link="{{ $product->link }}"
                                                data-bs-toggle="modal" data-bs-target="#detailModal">
                                                    Details
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Software -->
                <div class="tab-pane fade" id="software" role="tabpanel">
                    <div class="row">
                        @foreach ($products as $product)
                            @if ($product->category === 'software')
                            <div class="col-md-3 {{$product->category}} px-2 wow fadeInUp">
                                <div class="card" data-animation="true" style="border: none; box-shadow: none;">
                                    <div class="card-header p-0 position-relative z-index-2" style="border: none; box-shadow: none; margin-bottom: -10px;">
                                        <a class="d-block">
                                            <img src="uploads/{{$product->product_img}}" alt="Product" class="img-fluid border-radius-lg" style="box-shadow: none;">
                                        </a>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="d-flex mt-n6 mx-auto">
                                            <a class="btn btn-link mx-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Product Details">
                                                <button type="button" class="btn bg-gradient-info btn-sm open-modal"
                                                data-id="{{ $product->id }}"
                                                data-title="{{ $product->product_title }}"
                                                data-des="{{ $product->product_des }}"
                                                data-img="{{ $product->product_img }}"
                                                data-category="{{ $product->category }}"
                                                data-price="{{ $product->price }}"
                                                data-designer="{{ $product->designer }}"
                                                data-link="{{ $product->link }}"
                                                data-bs-toggle="modal" data-bs-target="#detailModal">
                                                    Details
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
              </div>
            </div>

          </div>
      </div>
    </section>

    <!-- services -->
    @include('home.includes.services')

    <!-- blogs -->
    @include('home.includes.blogs')

  </div>
    <!-- Modal of showing the Product details -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalBody">
                    <!-- Content will be dynamically loaded -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Script of showing the Product details -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('detailModal');
            const modalBody = document.getElementById('modalBody');

            document.querySelectorAll('.open-modal').forEach(button => {
                button.addEventListener('click', function () {
                    const title = this.getAttribute('data-title');
                    const des = this.getAttribute('data-des');
                    const img = this.getAttribute('data-img');
                    const category = this.getAttribute('data-category');
                    const price = this.getAttribute('data-price');
                    const designer = this.getAttribute('data-designer');
                    const link = this.getAttribute('data-link');

                    // Dynamically populate the modal content
                    modalBody.innerHTML = `
                        <div class="row">
                            <div class="col-md-4">
                                <img src="uploads/${img}" alt="Product Image" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h5>${title}</h5>
                                <p>${des}</p>
                                <p><strong>Category:</strong> ${category}</p>
                                <p><strong>Price:</strong> ${price}</p>
                                <p><strong>Designer:</strong> ${designer}</p>
                                <a href="${link}" target="_blank">View More</a>
                            </div>
                        </div>`;
                });
            });
        });
    </script>

  <!-- Footer -->
  @include('home.includes.footer')

  <!--   Core JS Files   -->
  @include('home.includes.scripts')
    <!-- JS for this page -->
    <script>
        if (document.getElementsByClassName('page-header')) {
        window.onscroll = debounce(function() {
            var scrollPosition = window.pageYOffset;
            var bgParallax = document.querySelector('.page-header');
            var oVal = (window.scrollY / 3);
            bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
        }, 6);
        }
    </script>
    <script>
        $(document).ready(function () {
            $('.nav-link').on('click', function () {
                var target = $(this).attr('href');
                $('.tab-pane').removeClass('show active');
                $(target).addClass('show active');
            });
        });
</script>
</body>

</html>

