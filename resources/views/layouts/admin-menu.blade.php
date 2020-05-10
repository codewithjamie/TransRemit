<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Drift - A fully responsive, HTML5 based admin template">
        <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
        <!-- /meta tags -->
        <title>TransRemit | eProfile - @yield('page_title')</title>

        <!-- Site favicon -->
        <link rel="shortcut icon" href="/assets/images/icon-project.png" type="image/x-icon">
        <!-- /site favicon -->

        <!-- Font Icon Styles -->
        <link rel="stylesheet" href="/assets/node_modules/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="/assets/vendors/gaxon-icon/styles.css">
        <!-- /font icon Styles -->

        <!-- Perfect Scrollbar stylesheet -->
        <link rel="stylesheet" href="/assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
        <!-- /perfect scrollbar stylesheet -->

        <!-- Load Styles -->
        <link rel="stylesheet" href="/assets/css/semidark-style-1.min.css">
        <!-- /load styles -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      <!-- Loader -->
    <div class="dt-loader-container">
      <div class="dt-loader">
          <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
          </svg>
      </div>
    </div>
    <!-- /loader -->
    <!-- Root -->
    <div class="dt-root">
        <div class="dt-root__inner">
            <!-- Header -->
            <header class="dt-header">

                <!-- Header container -->
                <div class="dt-header__container">

                    <!-- Brand -->
                    <div class="dt-brand">

                        <!-- Brand tool -->
                        <div class="dt-brand__tool" data-toggle="main-sidebar">
                            <div class="hamburger-inner"></div>
                        </div>
                        <!-- /brand tool -->
                        <!-- Brand logo -->
                        <span class="dt-brand__logo">
                            <a class="dt-brand__logo-link" href="route('dashboard')">
                                <img class="dt-brand__logo-img d-none d-sm-inline-block" src="https://i.pinimg.com/736x/2e/f2/f3/2ef2f3289430a49cfbd483bf44dd2f17.jpg" srcset="https://i.pinimg.com/736x/2e/f2/f3/2ef2f3289430a49cfbd483bf44dd2f17.jpg" alt="CP Tech">
                                <img class="dt-brand__logo-symbol d-sm-none" src="https://i.pinimg.com/736x/2e/f2/f3/2ef2f3289430a49cfbd483bf44dd2f17.jpg" alt="CP Tech">
                            </a>
                        </span>
                        <!-- /brand logo -->

                    </div>
                    <!-- /brand -->

                    <!-- Header toolbar-->
                    <div class="dt-header__toolbar">
                        <!-- Header Menu Wrapper -->
                        <div class="dt-nav-wrapper">
                            <!-- Header Menu -->
                            <ul class="dt-nav">
                                <li class="dt-nav__item dropdown">

                                    <!-- Dropdown Link -->
                                    <a href="#" class="dt-nav__link dropdown-toggle no-arrow dt-avatar-wrapper" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="dt-avatar size-30" src="/assets/images/user-avatar/user.svg" alt="Domnic Harris">
                                        <span class="dt-avatar-info d-none d-sm-block">
                                            <span class="dt-avatar-name">{{ ucfirst(Auth::user()->name) }}</span>
                                        </span> </a>
                                    <!-- /dropdown link -->

                                    <!-- Dropdown Option -->
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dt-avatar-wrapper flex-nowrap p-6 mt-n2 bg-gradient-purple text-white rounded-top">
                                            <img class="dt-avatar" src="/assets/images/user-avatar/user.svg" alt="{{ ucfirst(Auth::user()->name) }}">
                                            <span class="dt-avatar-info">
                                                <span class="dt-avatar-name">{{ ucfirst(Auth::user()->name) }}</span>
                                                <span class="f-12">
                                                    @if (Auth::user()->userid == "0")
                                                    Administrator
                                                    @elseif (Auth::user()->userid == "1")
                                                    Aent
                                                    @elseif (Auth::user()->userid == "2")
                                                    Government Agent
                                                    @endif
                                                </span>
                                            </span>
                                        </div>
                                        <!-- <a class="dropdown-item" href=""> <i class="icon icon-user icon-fw mr-2 mr-sm-1"></i>Account -->
                                        </a> <a class="dropdown-item" href="">
                                            <i class="icon icon-user icon-fw mr-2 mr-sm-1"></i>Profile</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"> <i class="icon icon-editors icon-fw mr-2 mr-sm-1"></i>Logout
                                        </a>
                                    </div>
                                    <!-- /dropdown option -->

                                </li>
                            </ul>
                            <!-- /header menu -->
                        </div>
                        <!-- Header Menu Wrapper -->

                    </div>
                    <!-- /header toolbar -->

                </div>
                <!-- /header container -->

            </header>
            <!-- /header -->
            <!-- Site Main -->
            <main class="dt-main">
              @if (Auth::user()->userid == "0")
              <!-- Sidebar -->
              <aside id="main-sidebar" class="dt-sidebar">
                  <div class="dt-sidebar__container">

                      <!-- Sidebar Navigation -->
                      <ul class="dt-side-nav">

                          <!-- Menu Header -->
                          <li class="dt-side-nav__item dt-side-nav__header">
                              <span class="dt-side-nav__text">Overview</span>
                          </li>
                          <!-- /menu header -->
                          <!-- <li class="dt-side-nav__item">
                              <a href="/" class="dt-side-nav__link" title="Classic">
                                  <i class="icon icon-components icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Visit Site</span>
                              </a>
                          </li> -->
                          <li class="dt-side-nav__item">
                              <a href="{{ route('dashboard')}}" class="dt-side-nav__link" title="Dashboard">
                                  <i class="icon icon-dashboard icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Dashboard</span>
                              </a>
                          </li>

                          <!-- Menu Header -->
                          <li class="dt-side-nav__item dt-side-nav__header">
                              <span class="dt-side-nav__text">General Account</span>
                          </li>
                          <!-- /menu header -->

                          <!-- Menu Item -->
                          <li class="dt-side-nav__item">
                              <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow " title="Agents">
                                  <i class="icon icon-users icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Agents</span>
                              </a>
                              <!-- Sub-menu -->
                              <ul class="dt-side-nav__sub-menu">
                                  <li class="dt-side-nav__item">
                                      <a href="{{ route('dashboard/agents') }}" class="dt-side-nav__link" title="All Agents">
                                          <i class="icon icon-list icon-fw icon-lg"></i>
                                          <span class="dt-side-nav__text">All Agents</span>
                                      </a>
                                  </li>
                                  <li class="dt-side-nav__item">
                                      <a href="{{ route('dashboard/add-agent')}}" class="dt-side-nav__link" title="New Agent">
                                          <i class="icon icon-plus icon-fw icon-lg"></i>
                                          <span class="dt-side-nav__text">New Agent</span>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="dt-side-nav__item">
                              <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow " title="Riders">
                                  <i class="icon icon-users icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Riders</span>
                              </a>
                              <!-- Sub-menu -->
                              <ul class="dt-side-nav__sub-menu">
                                  <li class="dt-side-nav__item">
                                      <a href="{{ route('dashboard/all-riders')}}" class="dt-side-nav__link" title="All Riders">
                                          <i class="icon icon-list icon-fw icon-lg"></i>
                                          <span class="dt-side-nav__text">All Riders</span>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="dt-side-nav__item">
                              <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow " title="Riders">
                                  <i class="icon icon-users icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Govt Agency</span>
                              </a>
                              <!-- Sub-menu -->
                              <ul class="dt-side-nav__sub-menu">
                                  <li class="dt-side-nav__item">
                                      <a href="{{ route('dashboard/all-gas')}}" class="dt-side-nav__link" title="All Riders">
                                          <i class="icon icon-list icon-fw icon-lg"></i>
                                          <span class="dt-side-nav__text">All GA</span>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="dt-side-nav__item">
                              <a href="{{ route('dashboard/branches') }}" class="dt-side-nav__link " title="Branches">
                                  <i class="icon icon-users icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Branches</span>
                              </a>
                          </li>
                          <li class="dt-side-nav__item">
                              <a href="{{ route('dashboard/unions') }}" class="dt-side-nav__link " title="Union">
                                  <i class="icon icon-users icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Unions</span>
                              </a>
                          </li>
                          <!-- Menu Header -->
                          <li class="dt-side-nav__item dt-side-nav__header">
                              <span class="dt-side-nav__text">Settings</span>
                          </li>
                          <!-- /menu header -->

                          <!-- Menu Item -->
                          <li class="dt-side-nav__item">
                              <a href="/dashboard/profile" class="dt-side-nav__link" title="Profile">
                                  <i class="icon icon-users icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Profile</span>
                              </a>
                          </li>
                          <li class="dt-side-nav__item">
                              <a href="/dashboard/report" class="dt-side-nav__link" title="Report">
                                  <i class="icon icon-archive icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Report</span>
                              </a>
                          </li>
                          <li class="dt-side-nav__item">
                              <a href="/dashboard/logs" class="dt-side-nav__link" title="Log">
                                  <i class="icon icon-list icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Log</span>
                              </a>
                          </li>

                      </ul>
                      <!-- /sidebar navigation -->

                  </div>
              </aside>
              <!-- /sidebar -->
              @elseif (Auth::user()->userid == "1")
              <!-- Sidebar -->
              <aside id="main-sidebar" class="dt-sidebar">
                  <div class="dt-sidebar__container">

                      <!-- Sidebar Navigation -->
                      <ul class="dt-side-nav">

                          <!-- Menu Header -->
                          <li class="dt-side-nav__item dt-side-nav__header">
                              <span class="dt-side-nav__text">Overview</span>
                          </li>
                          <!-- /menu header -->
                          <!-- <li class="dt-side-nav__item">
                              <a href="/" class="dt-side-nav__link" title="Classic">
                                  <i class="icon icon-components icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Visit Site</span>
                              </a>
                          </li> -->
                          <li class="dt-side-nav__item">
                              <a href="{{ route('dashboard')}}" class="dt-side-nav__link" title="Dashboard">
                                  <i class="icon icon-dashboard icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Dashboard</span>
                              </a>
                          </li>
                          <li class="dt-side-nav__item">
                              <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow " title="Riders">
                                  <i class="icon icon-users icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Riders</span>
                              </a>
                              <!-- Sub-menu -->
                              <ul class="dt-side-nav__sub-menu">
                                  <li class="dt-side-nav__item">
                                      <a href="{{ route('dashboard/all-riders')}}" class="dt-side-nav__link" title="All Riders">
                                          <i class="icon icon-list icon-fw icon-lg"></i>
                                          <span class="dt-side-nav__text">All Riders</span>
                                      </a>
                                  </li>
                                  <li class="dt-side-nav__item">
                                      <a href="{{ route('dashboard/all-riders')}}" class="dt-side-nav__link" title="All Riders">
                                          <i class="icon icon-plus icon-fw icon-lg"></i>
                                          <span class="dt-side-nav__text">New Riders</span>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <!-- Menu Header -->
                          <li class="dt-side-nav__item dt-side-nav__header">
                              <span class="dt-side-nav__text">Settings</span>
                          </li>
                          <!-- /menu header -->

                          <!-- Menu Item -->
                          <li class="dt-side-nav__item">
                              <a href="/dashboard/profile" class="dt-side-nav__link" title="Profile">
                                  <i class="icon icon-users icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Profile</span>
                              </a>
                          </li>
                      </ul>
                      <!-- /sidebar navigation -->

                  </div>
              </aside>
              <!-- /sidebar -->
              @elseif (Auth::user()->userid == "2")
              <!-- Sidebar -->
              <aside id="main-sidebar" class="dt-sidebar">
                  <div class="dt-sidebar__container">

                      <!-- Sidebar Navigation -->
                      <ul class="dt-side-nav">

                          <!-- Menu Header -->
                          <li class="dt-side-nav__item dt-side-nav__header">
                              <span class="dt-side-nav__text">Overview</span>
                          </li>
                          <li class="dt-side-nav__item">
                              <a href="{{ route('dashboard')}}" class="dt-side-nav__link" title="Dashboard">
                                  <i class="icon icon-dashboard icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Dashboard</span>
                              </a>
                          </li>
                          <li class="dt-side-nav__item">
                              <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow " title="Riders">
                                  <i class="icon icon-users icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Riders</span>
                              </a>
                              <!-- Sub-menu -->
                              <ul class="dt-side-nav__sub-menu">
                                  <li class="dt-side-nav__item">
                                      <a href="{{ route('dashboard/all-riders')}}" class="dt-side-nav__link" title="All Riders">
                                          <i class="icon icon-list icon-fw icon-lg"></i>
                                          <span class="dt-side-nav__text">All Riders</span>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <!-- Menu Header -->
                          <li class="dt-side-nav__item dt-side-nav__header">
                              <span class="dt-side-nav__text">Settings</span>
                          </li>
                          <!-- /menu header -->

                          <!-- Menu Item -->
                          <li class="dt-side-nav__item">
                              <a href="/dashboard/profile" class="dt-side-nav__link" title="Profile">
                                  <i class="icon icon-users icon-fw icon-lg"></i>
                                  <span class="dt-side-nav__text">Profile</span>
                              </a>
                          </li>

                      </ul>
                      <!-- /sidebar navigation -->

                  </div>
              </aside>
              <!-- /sidebar -->
              @endif




                <!-- Site Content Wrapper -->
                <div class="dt-content-wrapper">
                    <!-- Site Content -->
                    <div class="dt-content">
                        @yield('content')
                    </div>
                </div>

                <!-- Optional JavaScript -->
                <script src="/assets/node_modules/jquery/dist/jquery.min.js"></script>
                <script src="/assets/node_modules/moment/moment.js"></script>
                <script src="/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Perfect Scrollbar jQuery -->
                <script src="/assets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
                <!-- /perfect scrollbar jQuery -->

                <!-- masonry script -->
                <script src="/assets/node_modules/masonry-layout/dist/masonry.pkgd.min.js"></script>
                <script src="/assets/node_modules/sweetalert2/dist/sweetalert2.js"></script>
                <script src="/assets/node_modules/datatables.net/js/jquery.dataTables.js"></script>
                <script src="/assets/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
                <script src="/assets/js/functions.js"></script>
                <script src="/assets/js/customizer.js"></script>
                <!-- Custom JavaScript -->
                <script src="/assets/js/script.js"></script>

                <script src="/assets/js/qrious.js"></script>
                <script>
                    $(function() {

                        var genAlpha = Math.random().toString(36).slice(2);
                        var twoToneButton = document.querySelector('#generateQr-modal');

                        twoToneButton.addEventListener("click", function() {
                            twoToneButton.innerHTML = "Generating Qrcode...";

                            setTimeout(
                                function() {
                                    twoToneButton.innerHTML = "Generate Qrcode";
                                    var qr = new QRious({
                                        element: document.getElementById('qrious'),
                                        value: genAlpha,
                                        background: 'white', // background color
                                        foreground: 'black', // foreground color
                                        backgroundAlpha: 1,
                                        foregroundAlpha: 1,
                                        level: 'L', // Error correction level of the QR code (L, M, Q, H)
                                        mime: 'image/png', // MIME type used to render the image for the QR code
                                        size: 300, // Size of the QR code in pixels.
                                        padding: null // padding in pixels
                                    })
                                }, 6000);
                        }, false);

                    });
                </script>

</body>

</html>
