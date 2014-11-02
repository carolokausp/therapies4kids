<?php
/**
 * Created by PhpStorm.
 * User: carolokausp
 * Date: 10/6/2014
 * Time: 9:03 PM
 */ ?>

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
            <div class="row below-menu">
                  @yield('content')
                  @include('includes.connectWithUs')
            </div>
        </div>
        @include('includes.footer')
        @include('includes.script')
    </body>
</html>