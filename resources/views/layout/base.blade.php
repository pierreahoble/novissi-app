<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Novissi | Administration </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="{{asset('assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/js/loader.js')}}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->


     <!-- END GLOBAL MANDATORY STYLES -->
     <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="{{asset('plugins/font-icons/fontawesome/css/regular.css')}}">
     <link rel="stylesheet" href="{{asset('plugins/font-icons/fontawesome/css/fontawesome.css')}}">
 
     <style>
         .feather-icon .icon-section {
             padding: 30px;
         }
         
         .feather-icon .icon-section h4 {
             color: #3b3f5c;
             font-size: 50px;
             font-weight: 600px;
             margin: 0;
             margin-bottom: 16px;
         }
         
         .feather-icon .icon-content-container {
             padding: 0 16px;
             width: 100%;
             margin: 0 auto;
             border: 1px solid #bfc9d4;
             border-radius: 6px;
         }
         
         .feather-icon .icon-section p.fs-text {
             padding-bottom: 30px;
             margin-bottom: 30px;
         }
         
         .feather-icon .icon-container {
             cursor: pointer;
         }
         
         .feather-icon .icon-container svg {
             color: #3b3f5c;
             margin-right: 6px;
             vertical-align: middle;
             width: 20px;
             height: 20px;
             fill: rgba(0, 23, 55, 0.08);
         }
         
         .feather-icon .icon-container:hover svg {
             color: #1b55e2;
             fill: rgba(27, 85, 226, 0.23921568627450981);
         }
         
         .feather-icon .icon-container span {
             display: none;
         }
         
         .feather-icon .icon-container:hover span {
             color: #1b55e2;
         }
         
         .feather-icon .icon-link {
             color: #1b55e2;
             font-weight: 600;
             font-size: 50px;
         }
         /*FAB*/
         
         .fontawesome .icon-section {
             padding: 30px;
         }
         
         .fontawesome .icon-section h4 {
             color: #3b3f5c;
             font-size: 17px;
             font-weight: 600;
             margin: 0;
             margin-bottom: 16px;
         }
         
         .fontawesome .icon-content-container {
             padding: 0 16px;
             width: 86%;
             margin: 0 auto;
             border: 1px solid #bfc9d4;
             border-radius: 6px;
         }
         
         .fontawesome .icon-section p.fs-text {
             padding-bottom: 30px;
             margin-bottom: 30px;
         }
         
         .fontawesome .icon-container {
             cursor: pointer;
         }
         
         .fontawesome .icon-container i {
             font-size: 20px;
             color: #3b3f5c;
             vertical-align: middle;
             margin-right: 10px;
         }
         
         .fontawesome .icon-container:hover i {
             color: #1b55e2;
         }
         
         .fontawesome .icon-container span {
             color: #888ea8;
             display: none;
         }
         
         .fontawesome .icon-container:hover span {
             color: #1b55e2;
         }
         
         .fontawesome .icon-link {
             color: #1b55e2;
             font-weight: 600;
             font-size: 14px;
         }
     </style>
 

    @yield('style')

</head>

<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->



      <!--  BEGIN NAVBAR  -->

    @include('layout.head')
    <!--  END NAVBAR  -->




   

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>


        <!--  BEGIN SIDEBAR  -->

        @include('layout.sidebar')

          <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">



            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                 
                    @yield('contenu')
                 

                </div>

            </div>

           @include('layout.footer')
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="plugins/highlight/highlight.pack.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    {{-- <script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/dashboard/dash_2.js')}}"></script> --}}
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <script src="{{asset('plugins/font-icons/feather/feather.min.js')}}"></script>
    <script type="text/javascript">
        feather.replace();
    </script>
    


    @yield('script')

</body>

</html>