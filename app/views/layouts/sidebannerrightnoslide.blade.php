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
        @include('includes.script')
    </body>
</html>