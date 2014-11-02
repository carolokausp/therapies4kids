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
        @include('includes.slider')
        @include('includes.featuredbar')
        <div class="container">
            <div class="row">
              @yield('content')
            </div>
        </div>
         <div class="col-md-3 sidebar">
            <div class="row">
              @include('includes.sidebanner.openingHours')
            </div>
         </div>
        @include('includes.connectWithUs')
        @include('includes.footer')
        @include('includes.script')
    </body>
</html>