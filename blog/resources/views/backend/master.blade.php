<!DOCTYPE html>
<html>
    @include('backend/head')



    <body class="fixed-left">
        @include('backend/header')
        @include('backend/sidebar')


        @include('backend/sidebar')
        @yield('backendDynamic')

        <!-- ============================================================== -->



        @include('backend/footer')
	
	</body>
</html>