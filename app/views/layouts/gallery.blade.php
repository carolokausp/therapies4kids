<!DOCTYPE html>
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]> <html class="no-js" lang="en"> <![endif]-->
<html lang="en">
    <head>
       @include('includes.head')
    </head>
    <body>
        @include('includes.header')
        <div class="container">
            <div class="row">
                  @yield('content')
                  <div class="col-md-3 sidebar">
                     <div class="row">
                        @include('includes.sidebanner.openingHours')
                        @include('includes.sidebanner.todaysMenu')
                        @include('includes.sidebanner.gallery')
                        @include('includes.sidebanner.tv')
                     </div>
                  </div>
                  @include('includes.connectWithUs')
            </div>
        </div>
        @include('includes.footer')
          <!-- SCRIPTS -->

            <script src="./assets/js/jquery.min.js"></script>
            <script src="./assets/bootstrap/js/bootstrap.min.js"></script>

            <script src="./assets/js/hoverIntent.js"></script>

            <script src="./assets/js/jquery.parallax.js"></script>

            <script src="./assets/js/jquery.fitvids.js"></script>

            <script src="./assets/js/masonry.min.js"></script>

            <script src="./assets/js/jquery.flexslider-min.js"></script>

            <script src="./assets/js/fullcalendar.min.js"></script>
            <script src="./assets/js/jquery-ui.custom.min.js"></script>

            <script src="./assets/js/jquery.browser.min.js"></script>

            <script src="./assets/js/jquery.appear.js"></script>

            <script src="./assets/js/jquery.placeholder.min.js"></script>

            <script src="./assets/js/jquery.spritely.js"></script>

            <script src="./assets/js/jquery-migrate.min.js"></script>
            <script src="./assets/js/packery.pkgd.min.js"></script>
            <script src="./assets/js/imagesloaded.js"></script>
            <script src="./assets/js/infinitescroll.min.js"></script>

            <script src="./assets/js/jquery.magnific-popup.min.js"></script>

            <script src="./assets/js/datepicker/bootstrap-datepicker.js"></script>

            <script src="./assets/twitter/js/jquery.tweet.js"></script>

            <script src="./assets/form/js/contact-form.js"></script>

            <script src="./assets/js/main.js"></script>

            <!-- EDIT THIS FILE TO CHANGE THE CALENDAR EVENTS -->
            <script src="./assets/js/calendar.js"></script>

            <script src="./assets/js/less.min.js"></script>

    </body>
</html>