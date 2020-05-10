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

    @yield('content')

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
     <script src="/assets/js/functions.js"></script>
     <script src="/assets/js/customizer.js"></script>
     <!-- Custom JavaScript -->
     <script src="/assets/js/script.js"></script>

 </body>
</html>
