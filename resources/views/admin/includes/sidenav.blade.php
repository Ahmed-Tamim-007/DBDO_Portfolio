<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 text-center" href="{{url('admin_dashboard')}}">
        <span class="ms-1 font-weight-bold fs-5"><span class="text-info text-gradient">DBDO</span> Admin</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin_dashboard') ? 'active' : '' }}" href="{{url('admin_dashboard')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('global_set', 'header_setting', 'footer_setting') ? 'active' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_1"
                aria-expanded="false" aria-controls="collapse_1">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-settings-gear-65 text-success text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">General</span>
            </a>
            <div class="collapse" id="collapse_1">
                <ul class="navbar-nav">
                    <li class="nav-item px-3">
                        <a class="nav-link {{ Request::is('global_set') ? 'active' : '' }}" href="{{url('global_set')}}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-world text-danger text-gradient text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Globals</span>
                        </a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link {{ Request::is('header_setting') ? 'active' : '' }}" href="{{url('header_setting')}}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-ui-04 text-primary text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Headers</span>
                        </a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link {{ Request::is('footer_setting') ? 'active' : '' }}" href="{{url('footer_setting')}}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-credit-card text-info text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Footer</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('home_setting', 'portfolio_setting', 'about_setting', 'product') ? 'active' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_2"
                aria-expanded="false" aria-controls="collapse_2">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-folder-17 text-info text-gradient text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Components</span>
            </a>
            <div class="collapse" id="collapse_2">
                <ul class="navbar-nav">
                    <li class="nav-item px-3">
                        <a class="nav-link {{ Request::is('home_setting') ? 'active' : '' }}" href="{{url('home_setting')}}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-html5 text-warning text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Home</span>
                        </a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link {{ Request::is('portfolio_setting') ? 'active' : '' }}" href="{{url('portfolio_setting')}}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-image text-success text-gradient text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Portfolio</span>
                        </a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link {{ Request::is('about_setting') ? 'active' : '' }}" href="{{url('about_setting')}}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-copy-04 text-primary text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">About Us</span>
                        </a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link {{ Request::is('product') ? 'active' : '' }}" href="{{url('product')}}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-app text-secondary text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Products</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="admin_template./assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Admin Panel</h6>
            <p class="text-xs font-weight-bold mb-0">Change website content at will</p>
          </div>
        </div>
      </div>
      <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
      <a class="btn bg-gradient-info btn-sm mb-0 w-100" href="{{url('/')}}" type="button">Visit website</a>
    </div>
</aside>
