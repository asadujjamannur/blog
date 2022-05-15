<!DOCTYPE html>
<html class="no-js" lang="en">

    <!-- head -->
    @include('frontend.head') 


    <body class="body-class">
        <!-- pre-loder-area area start here  -->
        <div class="preloader">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div>
        <!-- pre-loder-area area start here  -->


        <!-- header area start here  -->
        @include('frontend/header')


        <!-- main body -->
        @yield('content')




            <!-- footer area start here  -->
            @include('frontend.footer')
    </body>
</html>
