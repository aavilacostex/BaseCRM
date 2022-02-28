<!DOCTYPE html>
<html lang="en">

    <head>       

        @include('layouts/partials/title-meta')

        @yield('headerStyle')

        @include('layouts/partials/head-css')         

    </head>

    <body data-layout="horizontal">
        <!-- leftbar-tab-menu -->
        
        <!-- Top Bar Start -->
        @include('layouts/partials/crm/crm-topbar')          
        <!-- Top Bar End -->

        <!-- end leftbar-tab-menu-->        

        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content-tab">

                <!-- content -->
                @yield('content')

            </div>
            <!-- end page content -->
        </div>

        @include('layouts/partials/offcanvas') 
         
        @include('layouts/partials/footer')  

        <!-- footerScript -->
        @yield('footerScript')

        <!-- Javascript  -->

        <script src="{{ URL::asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/analytics-index.init.js')}}"></script>
        <!-- App js -->        
        <script src="{{ URL::asset('assets/js/app.js')}}"></script>
    </body>

</html>
