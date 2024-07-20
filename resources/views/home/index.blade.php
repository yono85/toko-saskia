<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">

        <title>{{$TITLE}}</title>

        <!-- meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="description"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="google" content="notranslate" />

        <!-- icon -->
        <link rel="icon" href="{{$APPS['ICON']}}" sizes="32x32">
        <link rel="icon" href="{{$APPS['ICON']}}" sizes="192x192">
        <link rel="apple-touch-icon-precomposed" href="{{$APPS['ICON']}}">
        <meta name="msapplication-TileImage" content="{{$APPS['ICON']}}">

        <!-- StyleSheets -->
        <link href="{{$APPS['BASE_URL']}}/assets/temp/css/jquery-ui.css" rel="stylesheet" />
        <link href="{{$APPS['BASE_URL']}}/assets/temp/css/bootstrap.min.css" rel="stylesheet" />
        <link href="{{$APPS['BASE_URL']}}/assets/temp/css/perfect-scrollbar.css" rel="stylesheet" />

        <!-- Begin Global Structure -->
        <link href="{{$APPS['BASE_URL']}}/assets/temp/css/structure.css" rel="stylesheet" />
        <link href="{{$APPS['BASE_URL']}}/assets/temp/css/components.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{$APPS['BASE_URL']}}/assets/css/font.css">
        <!-- End Global Structure -->

        <!-- Moby Icons -->
        <!-- <link href="{{$APPS['BASE_URL']}}/assets/temp/css/moby.css" rel="stylesheet" /> -->
        <link rel="stylesheet" type="text/css" href="{{$APPS['BASE_URL']}}/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{$APPS['BASE_URL']}}/assets/fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="{{$APPS['BASE_URL']}}/assets/css/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="{{$APPS['BASE_URL']}}/assets/css/global-plugins.bundle.css">


        <!-- FontsOnline -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet" />

        
        <link rel="stylesheet" type="text/css" href="{{$APPS['BASE_URL']}}/assets/css/dashboard/style.css">
        <link rel="stylesheet" type="text/css" href="{{$APPS['BASE_URL']}}/assets/css/default.css">

        <!-- script -->
        @include('config')

        
        <script src="/js/globals.js" type="text/javascript"></script>
        <script src="/assets/js/global.js" type="text/javascript"></script>
        <script src="/assets/js/dashboard/dashboard.js" type="text/javascript"></script>
        <script src="/assets/js/dashboard/modal.js" type="text/javascript"></script>
        <!-- <script src="{{$APPS['BASE_URL']}}/assets/js/conf.js" type="text/javascript"></script> -->

    </head>

    <body>

        <div class="moby__aside-structure moby__theme_ui classic">

            <!-- Moby SideBar Menu -->
            @include('home.component.aside')

            <div class="wrapper">

                <!-- Moby Main Header -->
                @include('home.component.header')

                <!-- CONTENT -->
                @yield('content')

                <!-- Moby Main Footer -->
                @include('home.component.footer')

            </div>

        </div>

        <!-- Java Script -->
        
        <!-- <script src="{{$APPS['BASE_URL']}}/assets/js/dashboard/dashboard.js" type="text/javascript"></script> -->

        <script src="{{$APPS['BASE_URL']}}/assets/temp/scripts/popper.min.js"></script>
        <script src="{{$APPS['BASE_URL']}}/assets/temp/scripts/bootstrap.min.js"></script>
        <script src="{{$APPS['BASE_URL']}}/assets/temp/scripts/jquery-ui.min.js"></script>

        <script src="{{$APPS['BASE_URL']}}/assets/temp/scripts/perfect-scrollbar.min.js"></script>
        <!-- End Global Scripts -->


        <!-- selectpicker -->
        <script src="{{$APPS['BASE_URL']}}/assets/js/dashboard/dropdown-search/bootstrap-select.min.js"></script>

        <!-- Begin Custom Scripts -->
        <script src="{{$APPS['BASE_URL']}}/assets/temp/scripts/custom.js"></script>
        <!-- End Custom Scripts -->



    </body>

<script>

$(document).ready(function(){



});
</script>

</html>
