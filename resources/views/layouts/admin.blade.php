<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ @asset('/admin/assets/css/app.min.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ @asset('/admin/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ @asset('/admin/assets/css/components.css') }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ @asset('/admin/assets/css/custom.css') }}">
  <link rel='shortcut icon' type='image/x-icon' href='{{ @asset('./images/29-maktab.png') }}' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar sticky">
          <div class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
              <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                                      collapse-btn"> <i data-feather="align-justify"></i></a></li>
              <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                  <i data-feather="maximize"></i>
                </a></li>
              <li>
                <form class="form-inline mr-auto">
                  <div class="search-element">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                    <button class="btn" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </form>
              </li>
            </ul>
          </div>
          <ul class="navbar-nav navbar-right">


            <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="" src="{{ @asset('./images/29-maktab.png') }}"
                  class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
              <div class="dropdown-menu dropdown-menu-right pullDown">
                <div class="dropdown-title">{{ auth()->user()->name }}</div>

                <div class="dropdown-divider"></div>
                 <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item has-icon text-danger">
                      <i class="fas fa-sign-out-alt"></i>
                       Logout
                  </button>
                 </form>
              </div>
            </li>
          </ul>
        </nav>

        @include('admin.sidebar')

          @yield('content')


        <footer class="main-footer">
          <div class="footer-left">
            <a href="templateshub.net">Templateshub</a></a>
          </div>
          <div class="footer-right">
          </div>
        </footer>
      </div>
    </div>
  <!-- General JS Scripts -->
  <script src="{{ @asset('/admin/assets/js/app.min.js') }}"></script>
  <!-- JS Libraies -->
  <script src="{{ @asset('/admin/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ @asset('/admin/assets/js/page/index.js') }}"></script>
  <!-- Template JS File -->
  <script src="{{ @asset('/admin/assets/js/scripts.js') }}"></script>
  <!-- Custom JS File -->
  <script src="{{ @asset('/admin/assets/js/custom.js') }}"></script>
  @yield('js')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
